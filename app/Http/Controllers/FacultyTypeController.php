<?php

namespace App\Http\Controllers;

use App\Models\FacultyType;
use Illuminate\Http\Request;

class FacultyTypeController extends Controller
{
    public function addfacultyType(){
        return view("admin.views.add_faculty_type");
    }
    public function listfacultyType(){
        echo "list faculty";
    }
}
