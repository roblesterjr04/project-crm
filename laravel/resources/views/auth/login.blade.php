@extends('layouts.app')

@section('body')

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		@include('common.errors')
		<form class="form" action="/auth/login" method="POST">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="email">Email address</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Email">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Password">
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
			<a href="/auth/register" class="btn btn-default">Register</a>
		</form>
	</div>
</div>

@endsection