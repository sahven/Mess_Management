@extends('/caterer/master')

@section('title')
	Delete a Subsciber
@endsection

@section('content')
<div style="background-color: #eee;margin-bottom: 5px;">

	<form style="width: 500px;margin-left: 30%;" method="post" action="/caterer/subscriptions/delete">

	  {{ csrf_field() }}	
			  

	  <div class="form-group">
	    
	    <label for="rollno">RollNo</label>
	    
	    <input type="number" class="form-control" id="rollno" placeholder="" name="rollno">
	    
	  </div>

	  <button type="submit" class="btn btn-primary">Delete</button>

	</form>

@endsection
</div>