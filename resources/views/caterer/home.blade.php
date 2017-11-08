@extends('/caterer/master')

@section('title')
	HomePage
@endsection

@section('content')
	
	<a href="/caterer/subscriptions/subscriptions"><button class="button" style="vertical-align:middle;width: 50%;margin-left: 26%;margin-left: 26%;"><span>Manage Subscriptions </span></button></a>
	<br>

	<a href="/caterer/transaction/transaction"><button class="button" style="vertical-align:middle;width: 50%;margin-left: 26%;"><span>Manage Transactions </span></button></a>
	<br>
	
	<a href="/caterer/pricing/pricing"><button class="button" style="vertical-align:middle;width: 50%;margin-left: 26%;"><span>Manage Pricing </span></button></a>
	<br>
	
	<a href="/caterer/menu/menu"><button class="button" style="vertical-align:middle;width: 50%;margin-left: 26%;"><span>Manage Menu </span></button></a>
	<br>

@endsection
