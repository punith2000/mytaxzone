<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Features;
use App\Models\About;
use App\Models\CaseStudies;
use App\Models\CaseStudyHeader;
use App\Models\Services;
use App\Models\Testimonials;
use App\Models\Team;
use App\Models\TeamHeader;
use App\Models\Blog;
use App\Models\BlogHeader;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Models\Admin;
use App\Models\AdminMessage;
use App\Notifications\NewUserRegistered;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\BusinessService;
use App\Models\FinanceService;
use App\Models\InvestmentService;

class FrontendController extends Controller
{
    public function RegisterForm()
    {
        return view('frontend.user_login.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);
        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'otp' => rand(100000, 999999), // Generate a random OTP
            'otp_expires_at' => Carbon::now()->addMinutes(10), // Set OTP expiration time
        ]);

        $brevoApikey = config('services.brevo.key');
        $senderEmail = "pmy.151220@gmail.com";

        Http::withHeaders([
            'accept' => 'application/json',
            'api-key' => $brevoApikey,
            'content-type' => 'application/json',
        ])->post('https://api.brevo.com/v3/smtp/email', [
            'sender' => [
                'name' => 'MyTaxZone',
                'email' => $senderEmail,
            ],
            'to' => [
                [
                    'name' => $user->name,
                    'email' => $user->email,
                ],
            ],
            'subject' => 'OTP for registration',
            'htmlContent' => "<h1> Your OTP code is </h1> {$user->otp}",
        ]);

        // Notify admin
foreach (Admin::where("status", 1)->get() as $admin) {
    try {
        $admin->notify(new NewUserRegistered($user));
    } catch (\Throwable $e) {
        Log::error("Failed to notify admin ID {$admin->id}: ".$e->getMessage());
    }
}

// Create admin message
AdminMessage::create([
    'title' => 'New User Registered',
    'message' => $user->name . ' (' . $user->email . ') has just registered.',
]);

        session(['otp_email'=>$user->email]);

        return redirect()->route('frontend.user_login.verify_otp')->with('success', 'Registration successful. Check Your Email for the otp.');
    }
    
    public function user_login()
    {
        return view('frontend.user_login.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password))
        {
            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        }

        if(!$user->email_verified_at) {
            session(['otp_email' => $user->email]);
            return redirect()->route('frontend.user_login.verify_otp')->withErrors(['otp', 'Check your email, we sent an OTP.
            If you did not receive it, click "Resend OTP"']);
        }

        Auth::login($user);

        return redirect('/cms')->with('success', 'Logged in successfully.');
    }
    
    public function cms() {
        $teams = Team::all();
        $teamheader = TeamHeader::all();  
        $homes = Home::all();
        $features = Features::all();
        $abouts = About::all();
        $cases = CaseStudies::latest()->get();
        $casestudies = CaseStudyHeader::all();
        $services = Services::all();
        $blogs = Blog::all();
        $blogheader = BlogHeader::all();
        return view('frontend.layouts.cms_master', compact('teams', 'teamheader', 'homes', 'features', 'abouts', 'cases', 'casestudies', 'services', 'blogs', 'blogheader'));
    }

    public function logout(Request $request)
{
    if (Auth::check()) {
        Auth::logout();
    }

    return redirect()->route('frontend.user_login.login');
}


    // public function logout(Request $request)
    // {
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    //     return redirect()->route('frontend.user_login.login');
    // }

    public function showVerifyForm(Request $request)
    {
        $email = session('otp_email');
        // if (!$email) {
        //     return redirect()->route('user.login')->withErrors('otp', 'No email found in session.');
        // }
        return view('frontend.user_login.verify_otp', compact('email'));
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|digits:6',
        ]);

        $user = User::where('email', $request->email)->first();
        
        if($user->otp !== $request->otp) {
            return redirect()->back()->withErrors(['otp' => 'Invalid OTP']);
        }
        if(Carbon::now()->isAfter($user->otp_expires_at)) {
            return redirect()->back()->withErrors(['otp' => 'OTP has expired.']);
        }

        $user->update([
            'email_verified_at' => Carbon::now(),
            'otp' => null, // Clear the OTP after successful verification
            'otp_expires_at' => null, // Clear the OTP expiration time
        ]);

        Auth::login($user);

        return redirect('/login')->with('success', 'Otp verified successfully.');
    }

    public function resendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255|exists:users,email',
        ]);
        $user = User::where('email', $request->email)->first();
        $otp = rand(100000, 999999); // Generate a new OTP
        $user->update([
            'otp' => $otp, // Clear the OTP after successful verification
            'otp_expires_at' => Carbon::now()->addMinutes(10), // Clear the OTP expiration time
        ]);

        $brevoApikey = config('services.brevo.key');
        $senderEmail = "pmy.151220@gmail.com";

        $response = Http::withHeaders([
            'accept' => 'application/json',
            'api-key' => $brevoApikey,
            'content-type' => 'application/json',
        ])->post('https://api.brevo.com/v3/smtp/email', [
            'sender' => [
                'name' => 'MyTaxZone',
                'email' => $senderEmail,
            ],
            'to' => [
                [
                    'name' => $user->name,
                    'email' => $user->email,
                ],
            ],
            'subject' => 'OTP for registration',
            'htmlContent' => "<h1> Your OTP code is </h1> {$user->otp}",
        ]);

        if(!$response->successful()) {
    Log::error("OTP send failed during registration, continuing without email. Response: ".$response->body());
    // Do not early return; allow admin notifications/messages to still be created
}

        return back()->with('success', 'A new OTP has sent to you email');
    }

    public function forgot()
    {
        return view('frontend.user_login.forgot_password');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $token = Str::random(65);

        DB::table('forgot_password')->insert([
            "email" => $request->email,
            "token" => $token,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        Mail::send('frontend.user_login.reset_password', ['token' => $token], function($message) use($request) {
            $message->to($request->email);
            $message->subject('Reset your password');
        });

        // Logic to send password reset link goes here

        return redirect()->route("frontend.user_login.login")->with('success', 'Password reset link sent to your email.');
    }

    public function showResetForm($token)
    {
        return view('frontend.user_login.resetPassword', compact('token'));
    }

    public function resetPassword(Request $request) {
        $request->validate([
            "token" => "required|string|exists:forgot_password,token",
            "email" => "required|email|exists:users,email",
            "password" => "required|confirmed"
        ]);

        DB::table('forgot_password')->where([
            "email" => $request->email,
            "token" => $request->token,
        ])->delete();
        $user = User::where("email", $request->email)->first();
        $user->update([
            "password" => bcrypt($request->password)
        ]);
        return redirect()->route("frontend.user_login.login")->with('success', 'Password reset successfully.');
    }

    public function about() {
        $abouts = About::all();
        $features = Features::all();
        return view('frontend.layouts.about', compact('abouts', 'features'));
    }

    public function business_services()
    {
        $business = BusinessService::all();
        $features = Features::all();
        return view('frontend.services.business_services', compact('business', 'features'));
    }

    public function finance_services()
    {
        $finance = FinanceService::all();
        $features = Features::all();
        return view('frontend.services.finance_services', compact('finance', 'features'));
    }

    public function investment_services()
    {
        $investment = InvestmentService::all();
        $features = Features::all();
        return view('frontend.services.investment_services', compact('investment', 'features'));
    }

    public function blog() {
        $blogs = Blog::all();
        return view('frontend.blogs.blog', compact('blogs'));
    }

    public function blogSingle($id)
{
    $blog = Blog::findOrFail($id);

    if (!$blog) {
        abort(404);
    }

    return view('frontend.blogs.blog_single', compact('blog'));
}


    public function contact() {
        return view('frontend.layouts.contact');
    }

    public function faq()
    {
        return view('frontend.faq.faq');
    }

    public function privacyPolicy() {
        return view('frontend.layouts.privacy_policy');
    }

    public function terms() {
        return view('frontend.layouts.terms');
    }

    public function testimonial()
    {
        $testimonials = Testimonials::all();
        return view('frontend.layouts.cms_master', compact('testimonials'));
    }

}