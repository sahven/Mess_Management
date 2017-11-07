@extends('/caterer/master')

@section('title')
	Verification Result
@endsection

@section('content')

	@if($num->number >= 1)
		<h4>Verification Successful.
		<br>User Permitted.</h4>
	@else
		<h4>User Denied.</h4>
	@endif

@endsection
