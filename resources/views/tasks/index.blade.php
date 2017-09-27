<html>
    <body>
		   
	   <div>
	   
		   <h1>

			<ul>
			   @foreach($tasks_data as $tasks_new)
				 
				 <li>
				 
					<a href="/tasks/{{$tasks_new->id}}">
					
						{{$tasks_new->body}}

					</a>
				
				 
				 </li>
			   @endforeach
			</ul>
			
		  </h1>
		
	  </div>

	   

    </body>
</html>