<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index(){
        return view('JobsPage.index');
    }
    public function detail(){
        return view('JobsPage.detail');
    }
}

