<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2 align="center">Create A Product</h2><br  />
		@if($errors->any()) 
			<div class="alert alert-danger">
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</div>
		@endif
      <form method="post" action="{{url('products')}}">
        <div class="row">
		      {{csrf_field()}}
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{ old( 'name' ) }}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="description">Description:</label>
              <input type="text" class="form-control" name="description" value="{{ old( 'description' ) }}" >
            </div>
          </div> 
		  <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="price">Price:</label>
              <input type="text" class="form-control" name="price" value="{{ old( 'price' ) }}" >
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Add Product</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>