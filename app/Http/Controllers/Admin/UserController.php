<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile() 
    {
        return view('admin.user.profile', [
            'title' => env('APP_NAME'). ' | Meu perfil'
        ]);
    }
}
