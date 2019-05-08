<?php

namespace App\Http\Controllers;

use App\Models\ClassSection;
use Illuminate\Http\Request;

class ClassSectionController extends Controller
{
    public function addSchoolSection(){
        return view('admin.views.add_section');
    }

    public function listSchoolSection(){
        echo "list  class section";
    }
}
