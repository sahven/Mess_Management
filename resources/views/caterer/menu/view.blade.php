@extends('/caterer/master')

@section('title')
	Menu
@endsection

@section('content')
	
	<div class="container">

	  <h2>Menu</h2>            
	  
	  <table class="table table-hover">
	
	    <thead>
		  
	      <tr>
	        <th>Day</th>
	        <th>Time</th>
	        <th>Product</th>
	      </tr>
		  
	    </thead>

	    <tbody>

	    @for($i = 0; $i < sizeof($all); $i++)
	    	  
		    	  <tr>
			        
			        <td> {{ $all[$i]->Day }} </td>
			        
			        <td> 
						@if($all[$i]->StartTime == '08:00:00')
							Breakfast
						@elseif($all[$i]->StartTime == '12:00:00')
							Lunch 
						@elseif($all[$i]->StartTime == '17:00:00')
							HighTea
						@elseif($all[$i]->StartTime == '20:00:00')
							Dinner
						@endif
			        </td>

			        <td>
					{{ $all[$i]->ProductName }}
			        
			        @for($j = $i+1; $j< sizeof($all); $j++)
							
							@if($all[$i]->Day == $all[$j]->Day && $all[$i]->StartTime == $all[$j]->StartTime)

								, {{ $all[$j]->ProductName }}
								<?php $i = $j; ?>

							@else
								<?php $i = $j-1;
									  break;
								?>
							@endif

					@endfor

			        </td>

			      </tr>

		@endfor

	    </tbody>
	  </table>
	</div>

@endsection

