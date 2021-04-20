<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeEtc;
class HomeEtcController extends Controller
{
     //Select home video section data
     function selectVideosData(){
        $result = HomeEtc::select('video_url','video_description')->get();
        return $result;
     }

     //Select home video section data
     function selectTotalProjectClient(){
        $result = HomeEtc::select('total_project','total_client')->get();
        return $result;
     }

      //Select tech_description of chart section data
      function selectTechDescription(){
        $result = HomeEtc::select('tech_description')->get();
        return $result;
     }
      //Select home video section data
      function selectHomeTitleSubTitle(){
        $result = HomeEtc::select('home_title','home_subtitle')->get();
        return $result;
     }
}
