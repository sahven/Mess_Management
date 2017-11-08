@extends('/caterer/master')

@section('title')
	All Subscriptions
@endsection

@section('content')
	
	<div class="container">

	  <h2>Subscription Table</h2>            
	  
	  <table class="table table-hover">
	    
	    <thead>
	      <tr>
	        <th>RollNo</th>
	        <th>CatererID</th>
	        <th>PlanID</th>
	      </tr>
	    </thead>

	    <tbody>

	    @foreach($all as $row)
		      
		      <tr>
		        <td> {{ $row->RollNo }} </td>
		        <td> {{ $row->CatererID }} </td>
		        <td> {{ $row->PlanID }} </td>
		      </tr>

	    @endforeach

	    </tbody>
	  </table>
	</div>

@endsection

