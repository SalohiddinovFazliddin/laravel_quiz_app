<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
public function take(){
    return view('quiz.take-quiz');
}
}
