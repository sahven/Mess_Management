@extends('/user/master')

@section('title')
	My Opinions
@endsection

@section('content')
	
	<div class="container">

	  <h2>Opinions</h2>            
	  
	  <table class="table table-hover">
	    
	    <thead>
	      <tr>
	        <th>CatererID</th>
	        <th>ProductName</th>
	        <th>Rating</th>
	        <th>Description</th>
	      </tr>
	    </thead>

	    <tbody>

	    @foreach($all as $row)
		      
		      <tr>
		        <td> {{ $row->CatererID }} </td>
		        <td> {{ $row->ProductName }} </td>
		        <td> {{ $row->Rating }} </td>
		        <td> {{ $row->Description }} </td>
		      </tr>

	    @endforeach

	    </tbody>
	  </table>
	  <hr>
	  <br>
	  <br>
	  <h3>Add a new Opinion</h3>
	  <form style="width: 500px;" method="post" action="/user/opinion">

	    {{ csrf_field() }}	
	  		  

	    <div class="form-group">
	      
	      <label for="catererid">CatererID</label>
	      
	      <input type="number" class="form-control" id="catererid" placeholder="" name="catererid">
	      
	    </div>

	    <div class="form-group">
	      
	      <label for="productid">ProductID</label>
	      
	      <input type="number" class="form-control" id="productid" placeholder="" name="productid">
	      
	    </div>

	    <div class="form-group">
	      
	      <label for="rating">Rating</label>
	      
	      <input type="number" class="form-control" id="rating" placeholder="" name="rating">
	      
	    </div>

	    <div class="form-group">
	      
	      <label for="description">Description</label>
	      
	      <input type="text" class="form-control" id="description" placeholder="" name="description">
	      
	    </div>

	    <button type="submit" class="btn btn-primary">Add</button>
	  
	  </form>


	</div>

@endsection