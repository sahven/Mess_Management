@extends('/caterer/master')

@section('title')
	All Subscriptions
@endsection

@section('content')
	
	
	@foreach($all as $row)
		<h4>UserID: {{ $row->UserID }} </h4> 
		<h4>CatererID: {{ $row->CatererID }} </h4>
		<h4>PlanID: {{ $row->PlanID }} </h4>
		<hr>
	@endforeach
	

@endsection

