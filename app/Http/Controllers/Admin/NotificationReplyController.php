<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use App\Http\Controllers\Admin\Log;
use Illuminate\Support\Facades\Log;
use App\Models\Faq;

class NotificationReplyController extends Controller
{
    public function sendReply(Request $request, $id)
{
    $faq = Faq::findOrFail($id);

    $request->validate([
        'message' => 'required|string',
    ]);

    Mail::send('emails.reply', [
        'faq' => $faq,
        'messageContent' => $request->message
    ], function ($m) use ($faq) {
        $m->to($faq->email)->subject('Reply to your question');
    });

    return redirect()->back()->with('success', 'Reply sent successfully!');
}
    
    // public function sendReply(Request $request, $id)
    // {
    //     // Validate input
    //     $request->validate([
    //         'reply' => 'required|string',
    //     ]);

    //     // Fetch FAQ entry
    //     $faq = Faq::findOrFail($id);

    //     try {
    //         // Send email to the user
    //         Mail::raw($request->reply, function ($message) use ($faq) {
    //             $message->to($faq->email)
    //                     ->subject('Reply to your FAQ');
    //         });

    //         // Save reply in DB
    //         $faq->reply = $request->reply;
    //         $faq->save();

    //         return redirect()
    //             ->back()
    //             ->with('success', 'Reply sent successfully and saved to database!');
    //     } catch (\Exception $e) {
    //         Log::error("Reply email failed: " . $e->getMessage());

    //         return redirect()
    //             ->back()
    //             ->with('error', 'Failed to send reply. Please check mail settings.');
    //     }
    // }

//     public function sendReply(Request $request)
// {
//     try {
//         $request->validate([
//             'to_email' => 'required|email',
//             'reply_message' => 'required|string|max:2000',
//         ]);

//         $faq = Faq::findOrFail($id);
//         // $data = ['messageContent' => $request->reply_message];

//         // Mail::send('admin.faq.reply', $data, function ($message) use ($request) {
//         //     $message->to($request->$faq->email)
//         //             ->subject('Reply from Admin - MyTaxZone');
//         // });

//         // Send email
//         Mail::raw($request->reply, function ($message) use ($faq) {
//             $message->to($faq->email)
//                     ->subject('Reply to your FAQ');
//         });

//         // Save reply in DB if needed
//         $faq->reply = $request->reply;
//         $faq->save();

//         return response()->json([
//             'success' => true,
//             'message' => 'Reply sent successfully!'
//         ]);

//     } catch (\Exception $e) {
//         // log error and return json
//         Log::error("Mail send failed: " . $e->getMessage());

//         return response()->json([
//             'success' => false,
//             'message' => $e->getMessage()  // show real error
//         ], 500);
//     }
// }

}