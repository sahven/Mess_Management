@extends('/caterer/master')

@section('title')
	Transactions
@endsection

@section('content')

	  <h3>My Transactions</h3>

	  <table class="table table-hover">
	    
	    <thead>
	      <tr>
	        <th>UserID</th>
	        <th>Name</th>
	        <th>PlanID</th>
	        <th>Price</th>
	        <th>Time</th>
	      </tr>
	    </thead>

	    <tbody>

	    @foreach( $all as $row )
		      
		      <tr>
		        <td> {{ $row->UserID }} </td>
		        <td> {{ $row->FirstName }} {{ $row->LastName }} </td>
		        <td> {{ $row->PlanID }} </td>
		        <td> {{ $row->Price }} </td>
		        <td> {{ $row->Time }} </td>
		      </tr>

	    @endforeach

	    </tbody>
	  </table>

@endsection