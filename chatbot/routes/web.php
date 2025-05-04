<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenAIController;

// Route::get('/genai', [GenAIController::class, 'ask']);

// Route::get('/', function(){
//     return view('genai');
// });

// Route::get('/', [GenAIController::class, 'showChat']);
// Route::post('/genai', [GenAIController::class, 'handleChat']);
Route::view('/', 'genai');

