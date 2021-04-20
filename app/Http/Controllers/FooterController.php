<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FooterTable;
class FooterController extends Controller
{
    //Select footer data
    function selectFooterData(){
        $result = FooterTable::all();
        return $result;
    }
}
