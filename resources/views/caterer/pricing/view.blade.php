@extends('/caterer/master')

@section('title')

	Pricing Scheme
@endsection

@section('content')
	
	<div style="background-color: #eee;margin-bottom: 5px;">

		<form style="width: 500px;margin-left: 30%;" method="post" action="/caterer/pricing/view">

		  {{ csrf_field() }}	
				  

		  <div class="form-group">
		    
		    <label for="planid">PlanID</label>
		    
		    <input type="number" class="form-control" id="planid" placeholder="" name="planid">
		    
		  </div>

		  <button type="submit" class="btn btn-primary">View</button>

		</form>

@endsection
</div>

