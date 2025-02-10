<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return('dashboard');
    }
    public function create(){
        return('dashboard.create-quiz');
}
}
