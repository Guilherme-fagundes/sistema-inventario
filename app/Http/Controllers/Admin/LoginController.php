<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function home()
    {
        return view('admin.home', [
            'title' => env('APP_NAME') . ' | Home'
        ]);
    }
}
