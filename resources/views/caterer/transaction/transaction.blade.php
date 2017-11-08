@extends('/caterer/master')

@section('title')
	Manage Transactions
@endsection

@section('content')
	
	<a href="/caterer/transaction/view"><button class="button" style="vertical-align:middle;width: 50%;margin-left: 26%;margin-left: 26%;"><span>View all Transactions </span></button></a>
	<br>

	<a href="/caterer/transaction/add"><button class="button" style="vertical-align:middle;width: 50%;margin-left: 26%;"><span>Add a Transactions </span></button></a>
	<br>
	
	<a href="/caterer/transaction/delete"><button class="button" style="vertical-align:middle;width: 50%;margin-left: 26%;"><span>Delete a Transactions </span></button></a>
	<br>

@endsection
