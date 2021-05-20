<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $Request )
    {
    	$data =$Request->all();
<<<<<<< HEAD
    	//dd  ($data['username']);
=======
    	dd  ($data['username']);
>>>>>>> 5da83be948d99752fedcf00e1d1bf0725a93e506
    	return view('auth/welcome');
    }
}
