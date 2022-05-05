<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function microsoft() {
        return view('microsoft');
    }

    

    
}
