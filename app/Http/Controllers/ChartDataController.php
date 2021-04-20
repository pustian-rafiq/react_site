<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChartData;

class ChartDataController extends Controller
{
    function selectAllData(){
        $result = ChartData::all();
        return $result;
    }
}
