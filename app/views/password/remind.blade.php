@extends('layouts.header')

@section('content')
<form class="form-reset"action="{{ action('RemindersController@postRemind') }}" method="POST">
    <div class="form-group">
    	<input class="forms" type="email" name="email" placeholder="Emaill Address">
	</div>
    <input type="submit" class="btnCreate" value="Send Reset Link">
</form>
@stop