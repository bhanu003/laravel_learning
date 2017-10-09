@extends('layouts.articlesmaster')

@section('content')
<div class="col-sm-8">
<h1>Sign In:</h1>
@include('layouts.articleserrors')
      <form method="post" action="/login">
	   {{csrf_field()}}
        <div class="row">
			<div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" value="{{ old( 'email' ) }}" required>
          </div>
         </div>
		<div class="row">
		   <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" name="password" required>
            </div>
		</div>
		<div class="row">
          <div class="form-group">
            <button type="submit" class="btn btn-success" style="margin-left:160px">Sign In</button>
          </div>
        </div>
	  </form>
	
</div>
 @endsection