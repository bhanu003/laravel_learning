@extends('layouts.articlesmaster')

@section('content')
<div class="col-sm-8 blog-main">
  <h1>{{$article->title}}</h1>
	<p>
	{{$article->body}}
	</p>
</div>

<div class="comments">
  <ul class="list-group">
	@foreach($article->comments as comment)
	  
	  <li class="list-group-item">
	  
	  <strong>
	  
	  {{$comment->created_at->diffForHumans()}} : &nbsp;
	  
	  </strong>
	  
		{{$comment->body}}
		
	  </li>

	@endforeach

  </ul>
</div>

<!-- Add a Comment -->
<hr>
<div class="card">
	<div class="card-block">
		<form method="post" action="/articles/{{article->id)}/comments}">
			{{ csrf_field() }}
		  <div class="form-group">
			<textarea name="body" placeholder="Your comment here."class="form-control">
			</textarea>
		  </div>
		  
		   <div class="form-group">
            <button type="submit" class="btn btn-primary" >Add Comment</button>
          </div> 
		</form>
		@include('layouts.articleserrors')
	</div>
</div>

@endsection