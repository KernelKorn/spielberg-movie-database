@extends('layouts.header')

@section('content')
{{ Form::open(array('url' => 'login', 'class'=>'form-signin')) }}
	<h2 class="form-sigin-heading">Please Login</h2>

	<div class="form-group">
		{{ Form::text('email', null, array('class' => 'forms' , 'placeholder' => 'Email Address' )) }}
	</div>
	<div class="form-group">
		{{ Form::password('password', array('class' => 'forms' , 'placeholder' => 'Password' )) }}
	</div>
	<div class="form-group">
		{{ Form::submit('Login', array('class' => 'btnCreate')) }}
	</div>

	<a href="/password/remind">Reset Password</a>

{{ Form::close() }}
@stop