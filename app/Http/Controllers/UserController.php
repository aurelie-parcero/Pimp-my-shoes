<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function deconnexion()
    {
        auth()->logout();

        return redirect('/');
    }
}
