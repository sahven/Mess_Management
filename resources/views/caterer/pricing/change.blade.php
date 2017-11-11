@extends('/caterer/master')

@section('title')
	Change the Prices
@endsection

@section('content')
<div style="background-color: #eee;margin-bottom: 5px;">

	<form style="width: 500px;margin-left: 30%;" method="post" action="/caterer/pricing/change">

	  {{ csrf_field() }}	
			  

	  <div class="form-group">
	    
	    <label for="timingid">TimingID</label>
	    
	    <input type="number" class="form-control" id="timingid" placeholder="" name="timingid">
	    
	  </div>

	  <div class="form-group">
	    
	    <label for="planid">PlanID</label>
	    
	    <input type="number" class="form-control" id="planid" placeholder="" name="planid">
	    
	  </div>

	  <div class="form-group">
	    
	    <label for="price">Price</label>
	    
	    <input type="number" class="form-control" id="price" placeholder="" name="price">
	    
	  </div>

	  <button type="submit" class="btn btn-primary">Change</button>
	  
	</form>

@endsection
</div>