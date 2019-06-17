@include('inc.header')
  <div class="container">
   	<div class="row">
   		<div class="col-md-6">
   	 	  <legend>Read Form</legend>
                <div class="form-group ">
					      <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
					      <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="{{$users->name}}" readonly="">
					    </div>
					    <div class="form-group">
					      <label for="Email">Email address</label>
					      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email-id" value="{{$users->email}}" readonly="">
					    </div>
					    <div class="form-group">
					      <label for="exampleInputPassword1">Password</label>
					      <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="{{$users->password}}" readonly="">
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
        </div>
    </div>
  </div>
@include('inc.footer')