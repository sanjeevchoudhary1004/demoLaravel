@include('inc/header')
    <div class="container">
    	<div class="row">
    		<div class="col-md-6">
    			<form class="form-horizontal" method="POST" 
    			action="{{ url('/edit' ,array($users->id))}}">
    				{{csrf_field()}}
					  <fieldset>
					    <legend>LARAVEL CRUD</legend>
					    @if(count($errors) > 0)
                            @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                            	{{$error}}
                            </div>
                            @endforeach
					    @endif
					    <div class="form-group">
					      <label for="inputEmail" class="col-lg-2 control-label">Title</label>
					      <div class="col-lg-10">
					        <input type="text" name="title" value="<?php echo $articles->title;?>" class="form-control" id="inputTitle" placeholder=" Enter Title">
					      </div>
					    </div>
					    <div class="form-group">
					      <label for="inputDescription" class="col-lg-2 control-label">Desciption</label>
					      <div class="col-lg-10">
					      <textarea class="form-control" name ="description" id="description" placeholder="Enter Description"><?php echo $articles->description?></textarea><br>
					      </div>
					     </div>		    
					    <div class="form-group">
					      <div class="col-lg-10 col-lg-offset-2">
					       <a href="{{ url('/')}}" class="btn btn-info">Back</a>
					       &nbsp;&nbsp;<button type="submit" class="btn btn-success">Update</button>
					      </div>
					    </div>
					  </fieldset>
                </form>
    		</div>
    	</div>
    </div>
@include('inc/footer')