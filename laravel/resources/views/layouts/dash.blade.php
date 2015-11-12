@extends('layouts.app')

@section('body')

<div id="wrapper">
		   @include('common.nav')
		   <div id="page-wrapper">
			   <div class="container-fluid">
					@yield('content')
			   </div>
		   </div>
	   </div>
	   
	  @endsection