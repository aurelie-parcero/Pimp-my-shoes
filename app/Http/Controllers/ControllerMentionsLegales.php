<?php

namespace App\Http\Controllers;

use App\Http\Controllers;

class ControllerMentionsLegales extends Controller
{
    public function viewMentionsLegales() {
        return view('page/mentions-legales');
    }
}