@extends('/caterer/master')

@section('title')
	Add a Product to Menu
@endsection

@section('content')
<div style="background-color: #eee;margin-bottom: 5px;">
p
	<form style="width: 500px;margin-left: 30%;" method="post" action="/caterer/menu/add">

	  {{ csrf_field() }}	
			  

	  <div class="form-group">
	    
	    <label for="productid">ProductID</label>
	    
	    <input type="number" class="form-control" id="productid" placeholder="" name="productid">
	    
	  </div>

	  <div class="form-group">
	    
	    <label for="timingid">TimingID</label>
	    
	    <input type="number" class="form-control" id="timingid" placeholder="" name="timingid">
	    
	  </div>

	  
	  <button type="submit" class="btn btn-primary">Add</button>

	</form>

@endsection
</div>
