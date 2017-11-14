@extends('/user/master')

@section('title')
	HomePage
@endsection

@section('content')
	
	<a href="/user/profile"><button class="button" style="vertical-align:middle;width: 50%;margin-left: 26%;margin-left: 26%;"><span>My Profile</span></button></a>
	<br>

	<a href="/user/opinions"><button class="button" style="vertical-align:middle;width: 50%;margin-left: 26%;"><span>My Opinions </span></button></a>
	<br>

	<a href="/user/transactions"><button class="button" style="vertical-align:middle;width: 50%;margin-left: 26%;"><span>My Transaction History </span></button></a>
	<br>

@endsection
