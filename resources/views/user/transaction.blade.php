@extends('/user/master')

@section('title')
	Transactions
@endsection

@section('content')

	  <h3>My Transactions</h3>

	  <table class="table table-hover">
	    
	    <thead>
	      <tr>
	        <th>CatererID</th>
	        <th>Time</th>
	        <th>PlanID</th>
	        <th>Price</th>
	      </tr>
	    </thead>

	    <tbody>

	    @foreach($all as $row)
		      
		      <tr>
		        <td> {{ $row->CatererID }} </td>
		        <td> {{ $row->Time }} </td>
		        <td> {{ $row->PlanID }} </td>
		        <td> {{ $row->Price }} </td>
		      </tr>

	    @endforeach

	    </tbody>
	  </table>

@endsection