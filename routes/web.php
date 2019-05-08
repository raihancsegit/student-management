<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','AdminHomeController@deshboard');

//class route

Route::get('/add-section','ClassSectionController@addSchoolSection')->name('addclasssection');
Route::get('/list-section','ClassSectionController@listSchoolSection')->name('listclasssection');
Route::get('/add-class','SchoolClassController@addSchoolClass')->name('addschoolclass');
Route::get('/list-classes','SchoolClassController@listSchoolClass')->name('listschoolclass');

//faculty route
Route::get('/add-faculty-type','FacultyTypeController@addfacultyType')->name('addfacultytype');
Route::get('/list-faculty-type','FacultyTypeController@listfacultyType')->name('listfacultytype');
Route::get('/add-faculty','FacultieController@addFaculty')->name('addfaculty');
Route::get('/list-faculty','FacultieController@lisFtaculty')->name('listfaculty');
//student route
Route::get('/add-student','StudentController@addStudent')->name('addstudent');
Route::get('/list-student','StudentController@listStudent')->name('liststudent');
