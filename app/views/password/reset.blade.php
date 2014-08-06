@extends('layouts.header')

@section('content')
@if (Session::has('error'))
    <p class="alert alert-danger">{{ Session::get('error') }}</p>
@endif
<form class="form-reset"action="{{ action('RemindersController@postReset') }}" method="POST">
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="form-group">
    	<input class="forms" type="email" name="email" placeholder="Email Address">
    </div>
    <div class="form-group">
    	<input class="forms" type="password" name="password" placeholder="Password">
    </div>
    <div class="form-group">
    	<input class="forms" type="password" name="password_confirmation" placeholder="Confirm Password">
    </div>
    <div class="form-group">
    	<input class="btnCreate" type="submit" value="Reset Password">
    </div>
</form>
@stop