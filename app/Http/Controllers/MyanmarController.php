<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyanmarController extends Controller
{
    public function index()
    {
        return view('myanmar.index');
    }
}
