<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function en()
    {
        session()->forget('key');
        return redirect()->back();
    }

    public function jp()
    {
        session(['key' => 'jp']);
        return redirect()->back();
    }
}
