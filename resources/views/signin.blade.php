@extends('layouts.public')

@section('content')

	@if(isset($error))
		<div class="alert alert-danger">{{$error}}</div>
	@endif

 <form class="form-signin" method="post">
 	
 	<input type="hidden" name="_token" value="{{ csrf_token() }}">

    <h2 class="form-signin-heading">Please sign in</h2>
    <p></p>
    <p></p>
    <label for="inputEmail" class="sr-only">Email address</label>
    
    <input type="text" name="username" class="form-control" placeholder="Your username" required autofocus>
    <br/>

    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password" required>
<!--     <div class="checkbox">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div> -->

    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
  </form>
@stop