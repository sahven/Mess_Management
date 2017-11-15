@if(count($errors))
	<div>
		<div>
			<ul>@foreach($errors->all() as $error)
					<li style="color: #fff;">{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	</div>
@endif