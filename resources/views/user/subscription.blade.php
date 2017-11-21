@extends('/caterer/master')

@section('title')
	Subscriptions
@endsection

@section('content')

	  <h3>My Subscriptions</h3>

	  <table class="table table-hover">
	    
	    <thead>
	      <tr>
	        <th>CatererID</th>
	        <th>CatererName</th>
	        <th>PlanID</th>
	        <th>SubscribedOn</th>
	      </tr>
	    </thead>

	    <tbody>

	    @foreach( $all as $row )
		      
		      <tr>
		        <td> {{ $row->CatererID }} </td>
		        <td> {{ $row->CatererName }} </td>
		        <td> {{ $row->PlanID }} </td>
		        <td> {{ $row->SubscribedOn }} </td>
		      </tr>

	    @endforeach

	    </tbody>
	  </table>

@endsection