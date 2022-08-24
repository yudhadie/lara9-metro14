<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function active()
    {
        return view('errors.login',[
            'title' => 'LOGIN ERROR',
            'desc' => 'User anda sudah tidak aktif',
        ]);
    }

    public function admin()
    {
        return view('errors.login',[
            'title' => 'LOGIN ERROR',
            'desc' => 'Anda bukan administrator',
        ]);
    }
}
