<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactTable;
class ContactController extends Controller
{
    function addContactData(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        $result = ContactTable::insert(['name' => $name, 'email' => $email, 'message' => $message]);
        if($result){
            return "Data insert successfully";
        }else{
            return "Data not inserted";
        }
    }
}
