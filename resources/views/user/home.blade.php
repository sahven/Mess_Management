@extends('/user/master')

@section('title')
	HomePage
@endsection

@section('content')
	
	<a href="/user/profile"><button class="button" style="vertical-align:middle;width: 50%;margin-left: 26%;margin-left: 26%;"><span>My Profile</span></button></a>
	<br>

	<a href="/user/subscription"><button class="button" style="vertical-align:middle;width: 50%;margin-left: 26%;"><span>My Subscriptions </span></button></a>
	<br>

	<a href="/user/opinion"><button class="button" style="vertical-align:middle;width: 50%;margin-left: 26%;"><span>My Opinions </span></button></a>
	<br>

	<a href="/user/transaction"><button class="button" style="vertical-align:middle;width: 50%;margin-left: 26%;"><span>My Transaction History </span></button></a>
	<br>

@endsection
