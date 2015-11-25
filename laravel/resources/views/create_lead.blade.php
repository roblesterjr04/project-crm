@extends('layouts.dash')

@section('class', 'dash')

@section('content')

<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Leads <small>Create</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <a href="/"><i class="fa fa-dashboard"></i> Dashboard</a>
                            </li>
                            <li>
                            		<a href="/leads"><i class="fa fa-database"></i> Leads</a>
                            </li>
                        </ol>
                    </div>
                </div>
                
                <div class="row">
	                <div class="col-md-6">
		                @include('common.errors')
		                <form method="POST" role="form" action="/leads/store">
			                {{ csrf_field() }}
								<div class="form-group input-group">
									<div class="input-group-addon"><i class="fa fa-user"></i></div>
									<input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}">
								</div>
								<button type="submit" class="btn btn-primary">Save Lead</button>
		                </form>
	                </div>
                </div>
    
@endsection