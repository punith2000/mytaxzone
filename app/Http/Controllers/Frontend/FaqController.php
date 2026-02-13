<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\User;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class FaqController extends Controller
{
    public function faqStore(Request $request)
{
    $request->validate([
        'name'     => 'required|string|max:255',
        'email'    => 'required|email',
        'phone'    => 'nullable|string|max:15',
        'question' => 'required|string|max:1000',
    ]);

    // 1️⃣ Check if email exists in users table
    $user = User::where('email', $request->email)->first();

    if (!$user) {
        // Email not registered → ask to register
        return response()->json([
            'error' => 'not_registered',
            'message' => 'This email is not registered. Please register first.'
        ], 403);
    }

    // 2️⃣ Check if name matches with registered user
    if (strcasecmp($user->name, $request->name) !== 0) {
        return response()->json([
            'error' => 'name_mismatch',
            'message' => 'The name does not match the registered email.'
        ], 403);
    }

    // 3️⃣ Check free question limit (example: 3 free questions)
    $faqCount = Faq::where('user_id', $user->id)->count();
    if ($faqCount >= 3 && !$user->is_subscribed) {
        return response()->json([
            'error' => 'limit_exceeded',
            'message' => 'You have used your 3 free questions. Please upgrade your plan.'
        ], 403);
    }

    // 4️⃣ Save the FAQ
    $faq = Faq::create([
        'user_id'  => $user->id,
        'name'     => $request->name,
        'email'    => $request->email,
        'phone'    => $request->phone,
        'question' => $request->question,
    ]);

    // 5️⃣ Notify admin (optional)
    Mail::to('punithmy2000@gmail.com')->send(new SendEmail($faq));
    // Mail::raw("New FAQ submitted: {$faq->question}", function ($message) {
    //     $message->to('punithmy2000@gmail.com')
    //             ->subject('New FAQ Submission');
    // });

    return response()->json([
        'success' => 'Your question has been submitted successfully!'
    ]);
}

    // Called after successful payment – e.g., from your payment gateway webhook/UI
    public function markPaid(Request $request)
    {
        $user = Auth::user();
        $user->is_paid = true;
        $user->save();

        return response()->json([
            'status'  => 'ok',
            'message' => 'Payment recorded. You can continue asking questions.'
        ], 200);
    }
    
    
}