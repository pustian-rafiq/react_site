<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicesTable;
class ServiceController extends Controller
{
     //Select footer data
     function selectServicesData(){
        $result = ServicesTable::all();
        return $result;
    }
}
