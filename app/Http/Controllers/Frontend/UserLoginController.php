<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\AdminMessage;
use App\Notifications\NewUserRegistered;

class UserLoginController extends Controller
{
    public function notifyAdminAndStoreMessage($user)
    {
        // Notify Admin
        $admin = Admin::first(); // or loop through multiple admins
        if ($admin) {
            $admin->notify(new NewUserRegistered($user));
        }

        // Store in Admin Messages Table
        AdminMessage::create([
            'title' => 'New User Registered',
            'message' => $user->name . ' (' . $user->email . ') has just registered.',
        ]);
    }
}