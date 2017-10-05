@extends('layouts.articlesmaster')

@section('content')
      <h2 align="center">Create An Article</h2><br  />
	@include('layouts.articleserrors')
        <body>
  <br>
  <br>
    <div class="container">
	<form method="post" action="{{action('ArticlesController@update', $id)}}">
	<div class="form-group row">
	  {{csrf_field()}}
	   <input name="_method" type="hidden" value="PATCH">
	  <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Title</label>
	  <div class="col-sm-10">
		<input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="title" value="{{$articles_list->title}}">
	  </div>
	</div>
	<div class="form-group row">
	  <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Body</label>
	  <div class="col-sm-10">
		<textarea name="body" rows="8" cols="80">{{$articles_list->body}}</textarea>
	  </div>
	</div>
	<div class="form-group row">
	  <div class="col-md-2"></div>
	  <button type="submit" class="btn btn-primary">Update</button>
	</div>
	</form>
    
	</div>
  </body>
 @endsection