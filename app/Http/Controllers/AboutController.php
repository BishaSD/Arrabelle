<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\HTTP\Controller\About;

class AboutController extends Controller
{
    //
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('about');
    }

}
