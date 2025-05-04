<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GenAIController extends Controller
{
    public function ask(Request $request)
    {
        $prompt = $request->input('prompt', 'Apa itu Laravel?');
        $response = Http::post('http://127.0.0.1:8000/ask', [
            'prompt' => $prompt
        ]);

        
        $result = $response->json('response') ?? 'Tanya Jing';
        return view('genai', ['result' => $result]);
    }
}

