@extends('layouts.dash')

@section('class', 'dash')

@section('content')

<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Contacts <small>All Contacts</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <a href="/"><i class="fa fa-dashboard"></i> Dashboard</a>
                            </li>
                            <li class="active">
                            		<i class="fa fa-users"></i> Contacts
                            </li>
                        </ol>
                    </div>
                </div>
                
                <div class="row">
	                <div class="col-sm-6">
		                <table class="table">
			                <thead>
			                	<th>Name</th>
			                	<th>Created</th>
			                </thead>
			                <tbody>
			                @foreach ($contacts as $contact)
			                	<tr><td class="table-text">{{ $contact->name }}</td><td>{{ $contact->created_at }}</td></tr>
			                @endforeach
			                </tbody>
		                </table>
	                </div>
                </div>
    
@endsection