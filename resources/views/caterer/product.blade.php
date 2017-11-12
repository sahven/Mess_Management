@extends('/caterer/master')

@section('title')
	Add a new Product
@endsection

@section('content')
<div style="background-color: #eee;margin-bottom: 5px;">

	<form style="width: 500px;margin-left: 30%;" method="post" action="/caterer/product">

	  {{ csrf_field() }}	
			  

	  <div class="form-group">
	    
	    <label for="productname">ProductName</label>
	    
	    <input type="text" class="form-control" id="productname" placeholder="" name="productname">
	    
	  </div>

	  <button type="submit" class="btn btn-primary">Add</button>

	</form>

@endsection
</div>