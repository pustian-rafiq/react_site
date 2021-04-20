<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectsTable;
class ProjectController extends Controller
{
    //Select 4 data for home page
    function selectThreeCourse(){
        $result = ProjectsTable::limit(3)->get();
        return $result;
    }
    //Select all data for the all courses page
    function selectAllProjects(){
        $result = ProjectsTable::all();
        return $result;
    }
    //Select details information for a course
    function selectProjectDetails(Request $request){
        $id = $request->input('id');
        $result = ProjectsTable::where(['id' => $id])->get();
        return $result;
    }
}
