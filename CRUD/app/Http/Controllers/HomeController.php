<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function AdminDash(){
        return view('AdminPage');
    }


    public function EditorDash(){
        return view('EditorPage');
    }

}
