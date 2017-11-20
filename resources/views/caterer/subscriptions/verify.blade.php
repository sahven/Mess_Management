@extends('/caterer/master')

@section('title')
	Verfiy a Subsciber
@endsection

@section('content')
<div style="background-color: #eee;margin-bottom: 5px;">

	<form style="width: 500px;margin-left: 30%;" method="post" action="/caterer/subscriptions/verify">

	  {{ csrf_field() }}	
			  

	  <div class="form-group">
	    
	    <label for="rollno">RollNo</label>
	    
	    <input type="number" class="form-control" id="rollno" placeholder="" name="rollno">
	    
	  </div>

	  <div class="form-group">
	    
	    <label for="date">Date</label>
	    
	    <input type="date" class="form-control" id="date" placeholder="" name="date">
	    
	  </div>

	  <button type="submit" class="btn btn-primary">Verify</button>

	</form>

@endsection
</div>