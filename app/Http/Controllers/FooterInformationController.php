<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FooterInformation;
class FooterInformationController extends Controller
{
     //Select footer data
     function selectFooterInformation(){
        $result = FooterInformation::all();
        return $result;
    }
}
