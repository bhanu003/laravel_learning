<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2 align="center">Create An Account</h2><br  />
		@include('layouts.articleserrors')
      <form method="post" action="/register">
	  {{csrf_field()}}
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{ old( 'name' ) }}" required >
          </div>
        </div> 
		<div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" value="{{ old( 'email' ) }}" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="password">Password:</label>
              <input type="password" class="form-control" name="password" required>
            </div>
          </div> 
		 <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="password_confirmation">Re-Password:</label>
              <input type="password" class="form-control" name="password_confirmation" required>
            </div>
          </div> 
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:160px">Register</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>