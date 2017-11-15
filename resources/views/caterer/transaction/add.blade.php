@extends('/caterer/master')

@section('title')
	Add a Transaction
@endsection

@section('content')
<div style="background-color: #eee;margin-bottom: 5px;">

	<form style="width: 500px;margin-left: 30%;" method="post" action="/caterer/transaction/add">

	  {{ csrf_field() }}	
			  

	  <div class="form-group">
	    
	    <label for="userid">UserID</label>
	    
	    <input type="number" class="form-control" id="userid" placeholder="" name="userid">
	    
	  </div>

	  <div class="form-group">
	    
	    <label for="time">Time</label>
	    
	    <input type="time" class="form-control" id="time" placeholder="" name="time">
	    
	  </div>

	  
	  <button type="submit" class="btn btn-primary">Add</button>

	</form>

@endsection
</div>
