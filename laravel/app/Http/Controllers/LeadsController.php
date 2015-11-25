<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lead;

class LeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    private $user;
    private $hash; 
     
    public function index()
    {
      $leads = Lead::orderBy('id', 'asc')->get();
	   
		return view('leads', ['leads'=>$leads, 'loggedUser' => $this->user, 'hash'=>$this->hash, 'title'=>'Dashboard - Leads']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_lead', ['loggedUser' => $this->user, 'hash'=>$this->hash, 'title'=>'Dashboard - Add New Lead']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
		        'name' => 'required|max:255',
		    ]);
        $lead = new Lead;
        $lead->name = $request->name;
        $lead->save();
        $id = $lead->id;
        return redirect('/leads/' . $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function __construct()
   {
      $this->middleware('auth');
      
      $user = Auth::user();
	   
	   if ($user) {
		   $this->user = $user;
		   $this->hash = md5($user->email);
	   }
   }
    
}
