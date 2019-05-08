<?php

namespace App\Http\Controllers;

use App\Models\Facultie;
use Illuminate\Http\Request;

class FacultieController extends Controller
{
   public function addFaculty(){
        return view('admin.views.add_faculty');
   }
   public function lisFtaculty(){

   }
}
