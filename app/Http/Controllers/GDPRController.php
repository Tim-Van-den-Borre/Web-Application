<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GDPRController extends Controller
{
    public function index(){
        return view('gdpr.privacy-policy');
    }
}
