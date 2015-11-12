<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    
   public function index() {
	   
	   $user = Auth::user();
	   
		return view('index', ['loggedUser' => $user]);
   }
   
   public function __construct()
   {
      $this->middleware('auth');
   }
    
}
