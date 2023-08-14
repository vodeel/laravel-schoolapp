<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //


    public function allStudentList(){
        try {
            /*code..

         $allStudents=DB::table('students')
         ->join('cities','students.city','=','cities.id')
         ->select('students.*','cities.city')
         ->paginate(5);*/
        // $students=DB::table('students')->orderBy('id')->lazy();
         $students=DB::table('students')->orderBy('id')->lazy();

         //return $students;

         return view('welcome',['data'=>$students]);
        } catch (\Throwable $th) {
            throw $th;
        }

    }

    public function studentById(string $id){
        try {
            //code..
         $student=DB::table('students')->where('id','=',$id)->select(['id','name','email','city','age','status'])->get();
         return view('dataviewpage',['data'=>$student]);
        } catch (\Throwable $th) {
            throw $th;
        }

    }

    public function showAddUserView(){
        return view('addStudent');
    }

    public function addstudentNewData(Request $request){
    try {
        //code...
       // dd(DB::table('students')->whereColumn('name','email')->get());

       /* $student=DB::table('students')->insertOrIgnore([
         'name' => 'student1',
         'email' => 'student@gmail.com',
         'city' => 'jhelum',
         'age' => 23,
        'status' => 1,
        'created_at' => now(),
        'updated_at' => now()

        ]);


        $student=DB::table('students')->upsert([
            'name' => 'student2',
            'email' => 'student@gmail.com',
            'city' => 'jhelum',
            'age' => 23,
           'status' => 1,
           'created_at' => now(),
           'updated_at' => now()

        ],['email'],['name']

        );

        */
        $student=DB::table('students')->insertOrIgnore(
            [
                'name' => $request->username,
                'email' => $request->useremail,
                'city' => $request->usercity,
                'age' => $request->userage,
               'created_at' => now(),
               'updated_at' => now()

            ]

        );

        if($student){
            return redirect()->route('view.allstudents')->with('success', 'User Add successfully.');
                }
        else{
            return redirect()->route('view.allstudents')->with('error', 'User Not Add successfully.');

        }
    } catch (\Throwable $th) {
        throw $th;
    }
    }


    public function deleteStudent(string $id){
        try {
            //code...
        $student=DB::table('students')->where('id',$id)->delete();
        if($student){
            echo "<h1>Student with id $id is deleted</h1>";
        return redirect()->route('view.allstudents');

        }
        else{
            echo "<h1>Student with id $id is not  deleted</h1>";
            return redirect()->route('view.allstudents');

        }
        } catch (\Throwable $th) {
            throw $th;
        }

    }
}
