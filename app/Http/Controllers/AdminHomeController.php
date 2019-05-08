<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function deshboard(){
        return view('admin.views.deshboard');
    }
}
