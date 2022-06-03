<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseTable;
class CourseController extends Controller
{
    //Select 4 data for home page
    function selectFourseCourse(){
        $result = CourseTable::limit(4)->get();
        return $result;
    }
    //Select all data for the all courses page
    function selectAllCourse(){
        $result = CourseTable::all();
        return $result;
    }
    //Select details information for a course
    function selectCourseDetails($id){
       // $id = $request->input('id');
        $result = CourseTable::where(['id' => $id])->get();
        return $result;
    }
}
