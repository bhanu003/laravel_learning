<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
	<form method="post" action="{{action('ProductController@update', $id)}}">
	<div class="form-group row">
	  {{csrf_field()}}
	   <input name="_method" type="hidden" value="PATCH">
	  <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
	  <div class="col-sm-10">
		<input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="name" name="name" value="{{$products_list->name}}">
	  </div>
	</div>
	<div class="form-group row">
	  <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Description</label>
	  <div class="col-sm-10">
		<textarea name="description" rows="8" cols="80">{{$products_list->description}}</textarea>
	  </div>
	</div>
	<div class="form-group row">
	  <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Price</label>
	  <div class="col-sm-10">
		<input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="price" name="price" value="{{$products_list->price}}">
	  </div>
	</div>
	<div class="form-group row">
	  <div class="col-md-2"></div>
	  <button type="submit" class="btn btn-primary">Update</button>
	</div>
	</form>
    
	</div>
  </body>
</html>