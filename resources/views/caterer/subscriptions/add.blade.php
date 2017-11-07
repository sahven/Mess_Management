@extends('/caterer/master')

@section('title')
	Add a Subsciber
@endsection

@section('content')
<div style="background-color: #eee;margin-bottom: 5px;">

	<form style="width: 500px;margin-left: 30%;" method="post" action="/caterer/subscriptions/add">

	  {{ csrf_field() }}	
			  

	  <div class="form-group">
	    
	    <label for="rollno">RollNo</label>
	    
	    <input type="number" class="form-control" id="rollno" placeholder="" name="rollno">
	    
	  </div>

	  <div class="form-group">
	    
	    <label for="plan">PlanID</label>
	    
	    <input type="number" class="form-control" id="plan" placeholder="" name="planid">
	    
	  </div>

	  <button type="submit" class="btn btn-primary">Add</button>
	</form>

@endsection
</div>