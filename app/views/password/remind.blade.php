@extends('layouts.header')

@section('content')
@if (Session::has('error'))
    <p class="alert alert-danger">{{ Session::get('error') }}</p>
@elseif (Session::has('status'))
    <p>{{ Session::get('status') }}</p>
@endif
<form class="form-reset"action="{{ action('RemindersController@postRemind') }}" method="POST">
    <div class="form-group">
    	<input class="forms" type="email" name="email" placeholder="Emaill Address">
	</div>
    <input type="submit" class="btnCreate" value="Send Reset Link">
</form>
@stop