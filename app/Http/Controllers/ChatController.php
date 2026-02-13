<?php

namespace App\Http\Controllers;

use App\Services\GeminiService;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ChatController extends Controller
{
    public function chat(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:2000',
        ]);

        $userMessage = $request->input('message');
        $apiKey = env('OPENAI_API_KEY');

        // If no key (or placeholder key), DON'T break the UI — echo back.
        if (empty($apiKey) || $apiKey === 'your_api_key_here') {
            return response()->json([
                'reply' => "You said: {$userMessage}"
            ]);
        }

        try {
            // Call OpenAI Chat Completions (no extra package required)
            $resp = Http::withToken($apiKey)
                ->timeout(30)
                ->post('https://api.openai.com/v1/chat/completions', [
                    'model' => 'gpt-4o-mini',   // or 'gpt-3.5-turbo' if needed
                    'temperature' => 0.2,
                    'messages' => [
                        ['role' => 'system', 'content' => 'You are a concise, friendly FAQ assistant for MyTaxZone.'],
                        ['role' => 'user', 'content' => $userMessage],
                    ],
                ]);

            if (!$resp->ok()) {
                Log::error('OpenAI error', ['status' => $resp->status(), 'body' => $resp->body()]);
                return response()->json([
                    'reply' => "Sorry, I can’t reach the assistant right now. Please try again."
                ]);
            }

            $data  = $resp->json();
            $reply = $data['choices'][0]['message']['content'] ?? "Sorry, I didn’t catch that.";
            return response()->json(['reply' => $reply]);

        } catch (\Throwable $e) {
            Log::error('Chatbot exception', ['e' => $e->getMessage()]);
            return response()->json([
                'reply' => "Oops — something went wrong. Please try again."
            ]);
        }
    }

    // Simple health check if you want to test connectivity
    public function ping()
    {
        return response()->json(['ok' => true]);
    }

    // public function chat()
    // {
    //     return view('frontend.chat');
    // }

    // public function generate(Request $request, GeminiService $gemini)
    // {
    //     $prompt = $request->input('prompt');
    //     $response = $gemini->generatedContent($prompt);
        
    //     return back()->with(['response' => $response, 'prompt' => $prompt]);
    // }
}