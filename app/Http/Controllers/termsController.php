<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class termsController extends Controller
{
    public function show()
    {
        return view('terms');
    }

    public function back()
    {
        return back();
    }
}
