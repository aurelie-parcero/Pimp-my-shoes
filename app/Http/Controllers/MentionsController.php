<?php

namespace App\Http\Controllers;

use App\Http\Controllers;

class MentionsController extends Controller
{
    public function viewMentionsLegales() {
        return view('page/mentions-legales');
    }
}
