<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $Request )
    {
    	$data =$Request->all();

    	//dd  ($data['username']);

    	dd  ($data['username']);

    	return view('auth/welcome');
    }
}
