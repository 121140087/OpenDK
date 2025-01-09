<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Gemini\Laravel\Facades\Gemini;

use Illuminate\Http\Request;
use Str;
class GeminiController extends Controller
{
    public function index(Request $request)
    {

        $request->validate([
            'question' => 'required',
        ]);
        $question = $request->question;
        // Initialize the Gemini API client with the API key from the .env file
        // Use the Gemini API to generate a response for the question
        $response = Gemini::geminiPro()->generateContent($question);
        // Extract the answer from the API response
        $answer = $response->text();
        // Return the question and the generated answer as a JSON response
        return response()->json(data: ['question' => $question, 'answer' => Str::markdown($answer)]);
    }
}
