<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenAIController;

Route::get('/genai', [GenAIController::class, 'ask']);

Route::get('/', function(){
    return view('genai');
});
