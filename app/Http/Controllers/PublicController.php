<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function rules()
    {
        return view('rules');
    }
}
