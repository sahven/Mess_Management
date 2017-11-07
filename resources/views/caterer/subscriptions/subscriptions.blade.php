@extends('/caterer/master')

@section('title')
	Manage Subscriptions
@endsection

@section('content')
	
	<a href="/caterer/subscriptions/view"><button class="button" style="vertical-align:middle;width: 50%;margin-left: 26%;margin-left: 26%;"><span>View all Subscriptions </span></button></a>
	<br>

	<a href="/caterer/subscriptions/add"><button class="button" style="vertical-align:middle;width: 50%;margin-left: 26%;"><span>Add a subscriber </span></button></a>
	<br>
	
	<a href="/caterer/subscriptions/delete"><button class="button" style="vertical-align:middle;width: 50%;margin-left: 26%;"><span>Delete a subscriber </span></button></a>
	<br>
	
	<a href="/caterer/subscriptions/verify"><button class="button" style="vertical-align:middle;width: 50%;margin-left: 26%;"><span>Verify a subscriber </span></button></a>
	<br>

@endsection
