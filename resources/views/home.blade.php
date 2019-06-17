@include('inc/header')
   <div class="container">
   	 <div class="row">
   	 	<legend>LARAVEL CRUD</legend>
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
			      <th>Title</th>
			      <th>Description</th>
			      <th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@if(count($articles) > 0)
			  	   @foreach($articles->all() as $article)
				    <tr>
				      <td>{{ $article->id }}</td>
				      <td>{{ $article->title }}</td>
				      <td>{{ $article->description }}</td>
				      <td>
				      	<a href='{{ url("/read/{$article->id}")}}' class="btn btn-primary">Read </a> |
				      	<a href='{{ url("/update/{$article->id}")}}' class="btn btn-success">Update </a> |
				      	<a href='{{ url("/delete/{$article->id}")}}' class="btn btn-danger">Delete </a>
				      </td>
				    </tr>
			        @endforeach
			  	@endif
			  </tbody>
			</table>
			<div class="pagination">
			{{ $articles->links() }}
			</div> 
   	   </div>
   </div>
@include('inc/footer')