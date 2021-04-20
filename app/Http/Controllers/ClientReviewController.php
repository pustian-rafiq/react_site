<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientReview;
class ClientReviewController extends Controller
{
    function selectAllReview(){
        $result = ClientReview::all();
        return $result;
    }
}
