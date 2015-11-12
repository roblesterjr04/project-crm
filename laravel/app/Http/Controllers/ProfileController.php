<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
   public function profile() {
	   $user = Auth::user();
	   
		return view('profile', ['loggedUser' => $user]);
   }
   
   public function __construct()
   {
      $this->middleware('auth');
   }
}
