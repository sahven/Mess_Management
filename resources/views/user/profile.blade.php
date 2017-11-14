@extends('/user/master')

@section('title')
	My Profile
@endsection

@section('content')
	
		<h2 style="margin-left: 44%;">Welcome, {{ $all[0]->FirstName }} </h2>
		<hr>
		<br>
		<br>
		<div class="container" style="font-size: 140%;line-height: 150%;">
			Name : {{ $all[0]->FirstName }} {{ $all[0]->LastName }}
			<br>
			RollNo. : {{ $all[0]->RollNo }}
			<br>
			Email-Address : {{ $all[0]->EmailID }}
			<br>
			Phone No. : {{ $all[0]->PhoneNo }}
			<br>
			Date Of Birth : {{ $all[0]->DOB }}
			<br>
			Year Of Study : {{ $all[0]->YearOfStudy }}
			<br>
			Course : {{ $all[0]->Course }}
			<br>
			Card Details : {{ $all[0]->CardDetails }}	
		</div>


@endsection
