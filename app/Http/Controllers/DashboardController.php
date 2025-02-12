<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
public function createQuiz(){
    return view('dashboard.create-quiz');
}
public function dashboard(){
    return view('dashboard.home');
}
public function statistics(){
    return view('dashboard.statistics');
}

}
