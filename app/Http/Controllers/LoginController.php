<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function deconnexion()
    {
        auth()->logout();

        return redirect('/');
    }

}
