@extends('/caterer/master')

@section('title')
	Pricing Scheme
@endsection

@section('content')
	
	<div class="container">

	  <h2>Pricing Scheme</h2>            
	  
	  <table class="table table-hover">
	    
	    <thead>
	      <tr>
	        <th>Day</th>
	        <th>Time</th>
	        <th>Price</th>
	      </tr>
	    </thead>

	    <tbody>

	    @foreach($all as $row)
		      
		      <tr>
		        <td> {{ $row->Day }} </td>
		        <td> 
					@if($row->StartTime == '08:00:00')
						Breakfast
					@elseif($row->StartTime == '12:00:00')
						Lunch 
					@elseif($row->StartTime == '17:00:00')
						HighTea
					@elseif($row->StartTime == '20:00:00')
						Dinner
					@endif
		        </td>
		        <td> {{ $row->Price }} </td>
		      </tr>

	    @endforeach

	    </tbody>
	  </table>
	</div>

@endsection

