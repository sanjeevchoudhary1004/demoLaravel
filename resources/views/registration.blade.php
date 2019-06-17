@include('inc/header')
   <div class="container">
   	 <div class="row">
   	 	<legend>Students Details</legend>
   	 	<div class="row">
   	 		<div class="col-md-10 ">
   	 			@if(session('info'))
   	 			<div class="alert alert-success">
   	 				{{session('info')}}
   	 			</div>
   	 			@endif
   	 		</div>
   	 	</div>
   	 	 <table class="table table-striped table-hover ">
			  <thead>
			    <tr>
			      <th>ID</th>
			      <th>Name</th>
			      <th>Email-ID</th>
			      <th>Degree</th>
			      <th>Gender</th>
			      <th>Image</th>
			      <th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@if(count($users) > 0)
			  	   @foreach($users->all() as $user)
				    <tr>
				      <td>{{ $user->id }}</td>
				      <td>{{ $user->name }}</td>
				      <td>{{ $user->email }}</td>
				      <td>{{ $user->degree }}</td>
				      <td>{{ $user->gender }}</td>
				      <td>
				      	<!--<img src="public/uploads/{{ $user->image}}" height="50" width="50"/>
				      	<a target="__blank" href='public/uploads/{{ $user->image}}'>View </a>-->
				      	<a href="public/uploads/{{ $user->image}}" download>
                         <img src="public/uploads/{{ $user->image}}" width="50" height="50">
                        Download</a>
                        <a target="__blank" href='public/uploads/{{ $user->image}}'>View </a>
				      <td>
				      	<a href='{{ url("/read/base64_encode({$user->id})")}}' class="btn btn-primary">Read </a> |
				      	<a href='{{ url("/update/{$user->id}")}}' class="btn btn-success">Update </a> |
				      	<a href='{{ url("/destroy/{$user->id}")}}' class="btn btn-danger" onclick="return window.confirm('Are you sure to Delete');">Delete </a>
				      </td>
				    </tr>
			        @endforeach
			  	@endif
			  </tbody>
			</table>
			<div class="pagination">
			{{ $users->links() }}
			</div> 
   	   </div>
   </div>
@include('inc/footer')