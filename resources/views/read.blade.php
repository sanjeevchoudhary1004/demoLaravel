@include('inc.header')
  <div class="container">
   	<div class="row">
   		<div class="col-md-6">
   	 	  <legend>Read Article</legend>
                <div class="form-group">
					<label for="inputTitle" class="col-lg-2 control-label">Title</label>
					    <div class="col-lg-10">
					     <input type="text" name="title" value="{{$articles->title}}" class="form-control" id="inputTitle" placeholder=" Enter Title" readonly>
					     </div>
					    </div>
					    <div class="form-group">
					     <label for="inputDescription" class="col-lg-2 control-label">Desciption</label>
					     <div class="col-lg-10">
					     <textarea class="form-control" name ="description" id="description" placeholder="Enter Description" readonly>{{$articles->description}}</textarea><br>
					     </div>
					    </div>	
        </div>
    </div>
  </div>
@include('inc.footer')