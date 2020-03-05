<?php

namespace App\Http\Controllers;

use App\Http\Controllers;

class ContactController extends Controller
{
    public function viewContact() {
        return view('page/contact');
    }
}
