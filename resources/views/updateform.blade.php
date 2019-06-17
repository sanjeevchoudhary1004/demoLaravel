@include('inc/header')
    <div class="container">
    	<div class="row">
    		<div class="col-md-6">
    			<form class="form-horizontal" method="POST"  enctype="multipart/form-data"
    			action="{{ url('/editform' ,array($users->id))}}">
    				{{csrf_field()}}
					  <fieldset>
					    <legend>Form UPDATE</legend>
					    @if(count($errors) > 0)
                            @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                            	{{$error}}
                            </div>
                            @endforeach
					    @endif
					     <div class="form-group ">
					      <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
					      <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="{{$users->name}}">
					    </div>
					    <div class="form-group">
					      <label for="Email">Email address</label>
					      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email-id" value="{{$users->email}}">
					    </div>
					    <div class="form-group">
					      <label for="exampleInputPassword1">Password</label>
					      <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="{{$users->password}}">
					    </div>
					    <div class="form-group">
					      <label for="exampleSelect1">Select Degree</label>
					      <select class="form-control" name="degree" id="degree">
					      	<option value="M.Tech">--Select Degree--</option>
					        <option value="M.Tech">M.Tech</option>
					        <option value="B.tech">B.Tech</option>
					        <option value="BCA">BCA</option>
					        <option value="MCA">MCA</option>
					        <option value="MBA">MBA</option>
					      </select>
					    </div>
					    <div class="form-group">
					      <label for="exampleInputFile">Upload Image</label>
					      <input type="file" name="image" class="form-control-file" id="image" aria-describedby="fileHelp">
					      <small id="fileHelp" class="form-text text-muted">Upload Valid Image type .jpg,.jpeg,png</small>
					    </div>
					    <fieldset class="form-group">
					      <legend>Radio buttons</legend>
					      <div class="form-check">
					        <label class="form-check-label">
					          <input type="radio" class="form-check-input" name="gender" id="male" value="male" checked="">
					          Male
					        </label>
					      </div>
					      <div class="form-check">
					      <label class="form-check-label">
					          <input type="radio" class="form-check-input" name="gender" id="female" value="female">
					          Female
					        </label>
					      </div>
					    </fieldset>    
					    <div class="form-group">
					      <div class="col-lg-10 col-lg-offset-2">
					       <a href="{{ url('/list')}}" class="btn btn-info">Back</a>
					       &nbsp;&nbsp;<button type="submit" class="btn btn-success">Update</button>
					      </div>
					    </div>
					  </fieldset>
                </form>
    		</div>
    	</div>
    </div>
@include('inc/footer')