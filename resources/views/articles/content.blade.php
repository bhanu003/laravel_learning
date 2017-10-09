<div class="blog-post">
  <h2 class="blog-post-title">
  <a href="/articles/{{$article->id}}">
  {{$article->title}}
  </a>
  
  </h2>
  on
	<p class="blog-post-meta">
	{{$article->created_at->toFormattedDataString()}} 
	by 
	<a href="#">{{$article->user->name}}</a>
	</p>
	
	  <p>{{$article->body}}</p>
<hr>

</div><!-- /.blog-post -->