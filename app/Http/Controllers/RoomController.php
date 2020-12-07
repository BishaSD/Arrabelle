<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    //Controller for room availability check form on Welcome Page
    function getData(Request $req){
      $req->validate([
        'region'=>'required | max:20',
        'room'=>'required | max:2',
        'guest'=>'required | max:2'
      ]);
      return $req->input();
    }
}
