<?php

namespace App\Http\Controllers;
use App\Models\SchoolClass;
use Illuminate\Http\Request;

class SchoolClassController extends Controller
{
   public function addSchoolClass(){
       return view('admin.views.add_class');
   }
   public function listSchoolClass(){
    echo "list class";
   }
}
