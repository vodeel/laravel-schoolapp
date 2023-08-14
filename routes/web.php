<?php

use App\Http\Controllers\StudentController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', function () {
    return view('welcome');
});*/

Route::controller(StudentController::class)->group(function(){
    Route::get('/','allStudentList')->name('view.allstudents');
    Route::get('/student/{id}','studentById')->name('view.student');
    Route::post('/addstudent','addstudentNewData')->name('add.newstudent');
    Route::get('/addstudent','showAddUserView')->name('view.addnewstudent');
    Route::get('/deletestudent/{id}','deleteStudent')->name('delete.student');

});
