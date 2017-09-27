<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
	<table class="table table-striped">
	<thead>
	  <tr>
		<th>ID</th>
		<th>Name</th>
		<th>Description</th>
		<th>Price</th>
	  </tr>
	</thead>
	<tbody>
	  @foreach($products_list as $list)
	  <tr>
		<td>{{$list['id']}}</td>
		<td>{{$list['name']}}</td>
		<td>{{$list['description']}}</td>
		<td>{{$list['price']}}</td>
		<td>
		<a href="{{action('ProductController@edit', $list['id'])}}" class="btn btn-warning">Edit</a>
		</td>
		<td>
          <form action="{{action('ProductController@destroy', $list['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
	  </tr>
	  @endforeach
	</tbody>
	</table>
    
	</div>
  </body>
</html>