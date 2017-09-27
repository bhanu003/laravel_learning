<!-- create.blade.php -->
<!-- create.blade.php -->

@extends('master')
@section('content')
<div class="container">
  <form method="post" action="{{url('crud')}}">
    <div class="form-group row">
	{{csrf_field()}}
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg"> <b>Title</b></label>
      <div class="col-sm-6">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Title" name="title">
      </div>
	  <div class="col-sm-4">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm"> <b>Post</b> </label>
      <div class="col-sm-10">
        <textarea name="post" rows="8" cols="80"></textarea>
      </div>
    </div>
    <div class="form-group row">
	<center>
      <input type="submit" class="btn btn-primary">
      <input type="reset" class="btn btn-primary">
	  </center>
    </div>
  </form>
</div>
@endsection