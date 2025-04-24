<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class PublicController extends Controller implements HasMiddleware
{
    public static function middleware() 
    {
        return [
            new Middleware('auth', except: ['index', 'rules']),
        ];
    }

    public function index()
    {
        return view('index');
    }

    public function rules()
    {
        return view('rules');
    }

    public function profile()
    {
        return view('profile');
    }
}
