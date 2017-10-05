@extends('layouts.articlesmaster')

@section('content')
<div class="col-sm-8 blog-main">
      <h2>Create An Article</h2><br  />
	@include('layouts.articleserrors')
      <form method="post" action="{{url('/articles')}}">
        <div class="row">
		      {{csrf_field()}}
          <div class="form-group col-md-8">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" value="{{ old( 'title' ) }}">
          </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8">
              <label for="body">Body:</label>
              <input type="text" class="form-control" name="body" value="{{ old( 'body' ) }}" >
          </div>
        </div> 
        
        <div class="row">
          <div class="form-group col-md-8">
            <button type="submit" class="btn btn-primary" >Add Article</button>
          </div>
        </div>
      </form>
</div>
 @endsection