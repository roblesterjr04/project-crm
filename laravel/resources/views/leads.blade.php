@extends('layouts.dash')

@section('class', 'dash')

@section('content')

<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Leads <small>All Leads</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <a href="/"><i class="fa fa-dashboard"></i> Dashboard</a>
                            </li>
                            <li class="active">
                            		<i class="fa fa-database"></i> Leads
                            </li>
                            <li>
                            		<a href="/leads/create"><i class="fa fa-plus"></i> Create</a>
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
			                @foreach ($leads as $lead)
			                	<tr><td class="table-text">{{ $lead->name }}</td><td>{{ $lead->created_at }}</td></tr>
			                @endforeach
			                </tbody>
		                </table>
	                </div>
                </div>
    
@endsection