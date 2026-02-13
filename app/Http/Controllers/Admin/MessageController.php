<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminMessage;

class MessageController extends Controller
{
    public function msg()
    {
        $messages = AdminMessage::latest()->get();
        return view('admin.messages.msg', compact('messages'));
    }

    public function markRead($id)
    {
        $msg = AdminMessage::findOrFail($id);
        $msg->update(['is_read' => true]);
        return back();
    }
}