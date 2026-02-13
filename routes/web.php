<?php

use App\Mail\SendEmail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\FeaturesController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CaseStudiesController;
use App\Http\Controllers\Admin\CaseStudiesHeader;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TeamHeaderController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BlogHeaderController;
use App\Http\Controllers\Admin\BusinessServiceController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Frontend\FaqController;
use App\Http\Controllers\Admin\FaqController as AdminFaqController;
use App\Http\Controllers\Admin\FinanceServiceController;
use App\Http\Controllers\Admin\NotificationReplyController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\InvestmentServiceController;
use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\Admin\CacheController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\ChangePassword;
use App\Http\Controllers\Admin\VisitorController;

// Group routes under FrontendController
Route::controller(FrontendController::class)->group(function () {
    Route::get('/register', 'RegisterForm')->name('frontend.user_login.register');
    Route::post('/register', 'register');
    Route::get('/login', 'user_login')->name('frontend.user_login.login');
    Route::post('/login', 'login');
    // Route::post('/logout',  'logout')->name('logout');
    Route::get('/verify_otp', 'showVerifyForm')->name('frontend.user_login.verify_otp');
    Route::post('/verify_otp', 'verifyOtp');
    Route::post('/resend_otp', 'resendOtp')->name('frontend.user_login.resend_otp');
    Route::get('/forgot_password', 'forgot')->name('frontend.user_login.forgot_password');
    Route::post('/forgot_password', 'sendResetLink');
    Route::get('/reset_password/{token}', 'showResetForm')->name('frontend.user_login.resetPassword');
    Route::post('/reset_password', 'resetPassword')->name('frontend.user_login.reset_password.post');
    Route::get('/', 'cms')->name('cms');
    Route::get('/cms', 'cms');
    Route::get('/about', 'about')->name('about');
    Route::get('/business_services', 'business_services')->name('business_services');
    Route::get('/finance_services', 'finance_services')->name('finance_services');
    Route::get('/investment_services', 'investment_services')->name('investment_services');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog_single/{id}', 'blogSingle')->name('blog_single');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/faq/pricing', 'pricing')->name('frontend.faq.pricing');
    Route::get('/privacy', 'privacyPolicy')->name('privacy_policy');
    Route::get('/terms', 'terms')->name('terms');
    // Route::post('/contact/store', 'store')->name('frontend.layouts.contact.store');
});
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::post('/faq-submit', [FaqController::class, 'faqStore'])->name('faq.submit');

Route::post('/faq/mark-paid', [FaqController::class, 'markPaid'])
    ->middleware('auth')
    ->name('faq.markPaid');

Route::get('/send-mail', function () {
    // Example dummy data for testing
    $faq = (object) [
        'email' => 'user@example.com',
        'name'  => 'John Doe',
        'question' => 'How do I file my taxes?'
    ];

    $messageContent = "New FAQ submitted: " . $faq->question;

    Mail::to($faq->email)->send(new SendEmail($messageContent));
    
    return "Mail sent successfully!";
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout')->middleware('auth');

// Route::middleware('auth')->group(function () {
//     Route::post('/logout', [FrontendController::class, 'logout'])->name('logout');
// });

// Admin routes
Route::get('/admin_login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin_login', [AdminController::class, 'login'])->name('login.submit');

// Protected Admin routes
Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/notifications/mark-all-read', function () {
        auth('admin')->user()->unreadNotifications->markAsRead();
        return back();
    })->name('admin.notifications.markAllRead');
    Route::get('/messages', [MessageController::class, 'msg'])->name('admin.messages.msg');
    Route::get('/messages/{id}/read', [MessageController::class, 'markRead'])->name('admin.message.read');

    Route::get('/admin/visitor', [VisitorController::class, 'visitor'])->name('admin.visitors');

    Route::get('/page-views', [\App\Http\Controllers\Admin\PageViewController::class, 'pageview'])->name('admin.page_view');

    Route::get('/contacts', [ContactController::class, 'contacts'])->name('admin.contacts');
    Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('admin.contacts.show');
    Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('admin.contacts.destroy');
    Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('admin.contacts.edit');
    Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('admin.contacts.update');

    Route::get('/admin-logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Route::prefix('admin')->group(function () {
    Route::get('/faqs', [AdminFaqController::class, 'faqs'])->name('admin.faq.faqs');
    Route::get('/faqs/{id}', [AdminFaqController::class, 'show'])->name('admin.faq.show');
    // Route::post('/faq/{id}/reply', [NotificationReplyController::class, 'sendReply'])->name('admin.faq.reply');
    Route::delete('/destroy/{id}', [AdminFaqController::class, 'destroy'])->name('admin.faq.destroy');
    // });

Route::post('/admin/notifications/reply/{id}', [NotificationReplyController::class, 'sendReply'])->name('admin.notifications.reply');

Route::post('/test-mail', function (Request $request) {
    $request->validate([
        'message' => 'required|string',
        'email'   => 'required|email'
    ]);

    Mail::raw($request->message, function($msg) use ($request) {
        $msg->to($request->email)
            ->subject('Testing Gmail SMTP');
    });

    return 'Mail sent to ' . $request->email;
});

Route::get('/admin/home', [HomeController::class, 'home'])->name('admin.homes.home');
Route::get('/admin/home/add_home', [HomeController::class, 'add_home'])->name('admin.homes.add_home');
Route::get("create", [HomeController::class, 'create']);
Route::prefix('admin')->group(function () {
    Route::prefix('homes')->group(function () {
        Route::post('/store', [HomeController::class, 'store'])->name('admin.homes.store');
        Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('admin.homes.edit');
        Route::put('/update/{id}', [HomeController::class, 'update'])->name('admin.homes.update');
        Route::delete('/destroy/{id}', [HomeController::class, 'destroy'])->name('admin.homes.destroy');
        Route::get('/show/{id}', [HomeController::class, 'show'])->name('admin.homes.show');
    });
});

Route::get('admin/features/feature', [FeaturesController::class, 'feature'])->name('admin.features.feature');
Route::get('admin/features/add_feature', [FeaturesController::class, 'add_feature'])->name('admin.features.add_feature');
Route::get("create", [FeaturesController::class, 'create']);
Route::prefix('admin')->group(function () {
    Route::prefix('features')->group(function () {
        Route::post('/store', [FeaturesController::class, 'store'])->name('admin.features.store');
        Route::get('/edit/{id}', [FeaturesController::class, 'edit'])->name('admin.features.edit');
        Route::put('/update/{id}', [FeaturesController::class, 'update'])->name('admin.features.update');
        Route::delete('/destroy/{id}', [FeaturesController::class, 'destroy'])->name('admin.features.destroy');
        Route::get('/show/{id}', [FeaturesController::class, 'show'])->name('admin.features.show');
    });
});

Route::get('admin/abouts', [AboutController::class, 'about'])->name('admin.abouts.about');
Route::get('admin/abouts/add_about', [AboutController::class, 'add_about'])->name('admin.abouts.add_about');
Route::get("create", [AboutController::class, 'create']);
Route::prefix('admin')->group(function () {
    Route::prefix('abouts')->group(function () {
        Route::post('/store', [AboutController::class, 'store'])->name('admin.abouts.store');
        Route::get('/edit/{id}', [AboutController::class, 'edit'])->name('admin.abouts.edit');
        Route::put('/update/{id}', [AboutController::class, 'update'])->name('admin.abouts.update');
        Route::delete('/destroy/{id}', [AboutController::class, 'destroy'])->name('admin.abouts.destroy');
        Route::get('/show/{id}', [AboutController::class, 'show'])->name('admin.abouts.show');
    });
});

Route::get('admin/case_studies/case_study', [CaseStudiesController::class, 'case_study'])->name('admin.case_studies.case_study');
Route::get('admin/case_studies/add_cs', [CaseStudiesController::class, 'add_cs'])->name('admin.case_studies.add_cs');
Route::get("create", [CaseStudiesController::class, 'create']);
Route::prefix('admin')->group(function () {
    Route::prefix('case_studies')->group(function () {
        Route::post('/store', [CaseStudiesController::class, 'store'])->name('admin.case_studies.store');
        Route::get('/edit/{id}', [CaseStudiesController::class, 'edit'])->name('admin.case_studies.edit');
        Route::put('/update/{id}', [CaseStudiesController::class, 'update'])->name('admin.case_studies.update');
        Route::delete('/destroy/{id}', [CaseStudiesController::class, 'destroy'])->name('admin.case_studies.destroy');
        Route::get('/show/{id}', [CaseStudiesController::class, 'show'])->name('admin.case_studies.show');
    });
});

Route::get('admin/case_studies/cases/cs', [CaseStudiesHeader::class, 'cs'])->name('admin.case_studies.cases.cs');
Route::get('admin/case_studies/cases/add_hd', [CaseStudiesHeader::class, 'add_hd'])->name('admin.case_studies.cases.add_hd');
Route::get("create", [CaseStudiesHeader::class, 'create']);
Route::prefix('admin')->group(function () {
    Route::prefix('case_studies/cases')->group(function () {
        Route::post('/store', [CaseStudiesHeader::class, 'store'])->name('admin.case_studies.cases.store');
        Route::get('/edit/{id}', [CaseStudiesHeader::class, 'edit'])->name('admin.case_studies.cases.edit');
        Route::put('/update/{id}', [CaseStudiesHeader::class, 'update'])->name('admin.case_studies.cases.update');
        Route::delete('/destroy/{id}', [CaseStudiesHeader::class, 'destroy'])->name('admin.case_studies.cases.destroy');
        Route::get('/show/{id}', [CaseStudiesHeader::class, 'show'])->name('admin.case_studies.cases.show');
    });
});

Route::get('admin/services', [ServicesController::class, 'service'])->name('admin.services.service');
Route::get('admin/services/add_service', [ServicesController::class, 'add_service'])->name('admin.services.add_service');
Route::get("create", [ServicesController::class, 'create']);
Route::prefix('admin')->group(function () {
    Route::prefix('services')->group(function () {
        Route::post('/store', [ServicesController::class, 'store'])->name('admin.services.store');
        Route::get('/edit/{id}', [ServicesController::class, 'edit'])->name('admin.services.edit');
        Route::put('/update/{id}', [ServicesController::class, 'update'])->name('admin.services.update');
        Route::delete('/destroy/{id}', [ServicesController::class, 'destroy'])->name('admin.services.destroy');
        Route::get('/show/{id}', [ServicesController::class, 'show'])->name('admin.services.show');
    });
});

Route::get('admin/services/bs', [BusinessServiceController::class, 'business'])->name('admin.services.bs.business');
Route::get('admin/services/bs/add_bs', [BusinessServiceController::class, 'add_bs'])->name('admin.services.bs.add_bs');
Route::get("create", [BusinessServiceController::class, 'create']);
Route::prefix('admin')->group(function () {
    Route::prefix('services/bs')->group(function () {
        Route::post('/store', [BusinessServiceController::class, 'store'])->name('admin.services.bs.store');
        Route::get('/edit/{id}', [BusinessServiceController::class, 'edit'])->name('admin.services.bs.edit');
        Route::put('/update/{id}', [BusinessServiceController::class, 'update'])->name('admin.services.bs.update');
        Route::delete('/destroy/{id}', [BusinessServiceController::class, 'destroy'])->name('admin.services.bs.destroy');
        Route::get('/show/{id}', [BusinessServiceController::class, 'show'])->name('admin.services.bs.show');
    });
});

Route::get('admin/services/fs', [FinanceServiceController::class, 'finance'])->name('admin.services.fs.finance');
Route::get('admin/services/add_fs', [FinanceServiceController::class, 'add_fs'])->name('admin.services.fs.add_fs');
Route::get("create", [FinanceServiceController::class, 'create']);
Route::prefix('admin')->group(function (){
    Route::prefix('services/fs')->group(function() {
        Route::post('/store', [FinanceServiceController::class, 'store'])->name('admin.services.fs.store');
        Route::get('/edit/{id}', [FinanceServiceController::class, 'edit'])->name('admin.services.fs.edit');
        Route::put('/update/{id}', [FinanceServiceController::class, 'update'])->name('admin.services.fs.update');
        Route::delete('/destroy/{id}', [FinanceServiceController::class, 'destroy'])->name('admin.services.fs.destroy');
        Route::get('/show/{id}', [FinanceServiceController::class, 'show'])->name('admin.services.fs.show');
    });
});

Route::get('admin/services/invest', [InvestmentServiceController::class, 'investment'])->name('admin.services.invest.investment');
Route::get('admin/services/add_invest', [InvestmentServiceController::class, 'add_invest'])->name('admin.services.invest.add_invest');
Route::get('create', [FinanceServiceController::class, 'create']);
Route::prefix('admin')->group(function() {
    Route::prefix('services/invest')->group(function() {
        Route::post('store', [InvestmentServiceController::class, 'store'])->name('admin.services.invest.store');
        Route::get('/edit/{id}', [InvestmentServiceController::class, 'edit'])->name('admin.services.invest.edit');
        Route::put('/update/{id}', [InvestmentServiceController::class, 'update'])->name('admin.services.invest.update');
        Route::delete('/destroy/{id}', [InvestmentServiceController::class, 'destroy'])->name('admin.services.invest.destroy');
        Route::get('/show/{id}', [InvestmentServiceController::class, 'show'])->name('admin.services.invest.show');
    });
});

Route::get('admin/testimonials/test', [TestimonialController::class, 'test'])->name('admin.testimonials.test');
Route::get('admin/testimonials/add_test', [TestimonialController::class, 'add_test'])->name('admin.testimonials.add_test');
Route::get("create", [TestimonialController::class, 'create']);
Route::prefix('admin')->group(function () {
    Route::prefix('testimonials')->group(function () {
        Route::post('/store', [TestimonialController::class, 'store'])->name('admin.testimonials.store');
        Route::get('/edit/{id}', [TestimonialController::class, 'edit'])->name('admin.testimonials.edit');
        Route::put('/update/{id}', [TestimonialController::class, 'update'])->name('admin.testimonials.update');
        Route::delete('/destroy/{id}', [TestimonialController::class, 'destroy'])->name('admin.testimonials.destroy');
        Route::get('/show/{id}', [TestimonialController::class, 'show'])->name('admin.testimonials.show');
    });
});

Route::get('admin/teams/team', [TeamController::class, 'team'])->name('admin.teams.team');
Route::get('admin/teams/add_team', [TeamController::class, 'add_team'])->name('admin.teams.add_team');
Route::get("create", [TeamController::class, 'create']);
Route::prefix('admin')->group(function () {
    Route::prefix('teams')->group(function () {
        Route::post('/store', [TeamController::class, 'store'])->name('admin.teams.store');
        Route::get('/edit/{id}', [TeamController::class, 'edit'])->name('admin.teams.edit');
        Route::put('/update/{id}', [TeamController::class, 'update'])->name('admin.teams.update');
        Route::delete('/destroy/{id}', [TeamController::class, 'destroy'])->name('admin.teams.destroy');
        Route::get('/show/{id}', [TeamController::class, 'show'])->name('admin.teams.show');
    });
});

Route::get('admin/teams/team/teams', [TeamHeaderController::class, 'teams'])->name('admin.teams.team.teams');
Route::get('admin/teams/team/add_teams', [TeamHeaderController::class, 'add_teams'])->name('admin.teams.team.add_teams');
Route::get("create", [TeamHeaderController::class, 'create']);
Route::prefix('admin')->group(function () {
    Route::prefix('teams/team')->group(function () {
        Route::post('/store', [TeamHeaderController::class, 'store'])->name('admin.teams.team.store');
        Route::get('/edit/{id}', [TeamHeaderController::class, 'edit'])->name('admin.teams.team.edit');
        Route::put('/update/{id}', [TeamHeaderController::class, 'update'])->name('admin.teams.team.update');
        Route::delete('/destroy/{id}', [TeamHeaderController::class, 'destroy'])->name('admin.teams.team.destroy');
        Route::get('/show/{id}', [TeamHeaderController::class, 'show'])->name('admin.teams.team.show');
    });
});

Route::get('admin/blogs', [BlogController::class, 'blog'])->name('admin.blogs.blog');
Route::get('admin/blogs/add_blog', [BlogController::class, 'add_blog'])->name('admin.blogs.add_blog');
Route::get("create", [BlogController::class, 'create']);
Route::prefix('admin')->group(function () {
    Route::prefix('blogs')->group(function () {
        Route::post('/store', [BlogController::class, 'store'])->name('admin.blogs.store');
        Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('admin.blogs.edit');
        Route::put('/update/{id}', [BlogController::class, 'update'])->name('admin.blogs.update');
        Route::delete('/destroy/{id}', [BlogController::class, 'destroy'])->name('admin.blogs.destroy');
        Route::get('/show/{id}', [BlogController::class, 'show'])->name('admin.blogs.show');
    });
});

Route::get('admin/blogs/bloghead/blog_head', [BlogHeaderController::class, 'blog_head'])->name('admin.blogs.bloghead.blog_head');
Route::get('admin/blogs/bloghead/add_blog_head', [BlogHeaderController::class, 'add_blog_head'])->name('admin.blogs.bloghead.add_blog_head');
Route::get("create", [BlogHeaderController::class, 'create']);
Route::prefix('admin')->group(function () {
    Route::prefix('blogs/bloghead')->group(function () {
        Route::post('/store', [BlogHeaderController::class, 'store'])->name('admin.blogs.bloghead.store');
        Route::get('/edit/{id}', [BlogHeaderController::class, 'edit'])->name('admin.blogs.bloghead.edit');
        Route::put('/update/{id}', [BlogHeaderController::class, 'update'])->name('admin.blogs.bloghead.update');
        Route::delete('/destroy/{id}', [BlogHeaderController::class, 'destroy'])->name('admin.blogs.bloghead.destroy');
        Route::get('/show/{id}', [BlogHeaderController::class, 'show'])->name('admin.blogs.bloghead.show');
    });
});

Route::get('/admin/clear-cache', function () {
    // Clear Laravel caches
    Artisan::call('cache:clear');     // Clears application cache
    Artisan::call('view:clear');      // Clears compiled views
    Artisan::call('route:clear');     // Clears route cache
    Artisan::call('config:clear');    // Clears config cache

    // (Optional) Warm-up cache again to improve speed
    Artisan::call('config:cache');
    Artisan::call('route:cache');

    return redirect()->back()->with('success', 'Pure Cache cleared and refreshed successfully!');
})->name('admin.clear.cache');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('admin/change-password', [ChangePassword::class, 'showForm'])->name('admin.change_password');
    Route::post('admin/change-password', [ChangePassword::class, 'update'])->name('admin.change_password.update');
});

});

Route::post('/chatbot', [ChatController::class, 'chat'])->name('chatbot.chat');
Route::get('/chatbot/ping', [ChatController::class, 'ping']);

Route::get('/check-auth', function () {
    return response()->json([
        'authenticated' => Auth::check(),
        'user' => Auth::user()
    ]);
});

// Frontend form submission
Route::post('/contact/store', [ConsultationController::class, 'store'])->name('consultation.store');

// Admin backend list
Route::get('/admin/consultations', [ConsultationController::class, 'consult'])->name('admin.consultations.consult');

// Route::get('/admin/clear-cache', [CacheController::class, 'clear'])->name('admin.clear.cache');

// Route::prefix(['auth'])->group(function () {
//     Route::get('admin/change-password', [ChangePassword::class, 'showForm'])->name('admin.change_password');
//     Route::post('admin/change-password', [ChangePassword::class, 'update'])->name('admin.change_password.update');
// });