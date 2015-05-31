@extends('layouts.public')

@section('content')
	<h3>My Reservation</h3>

<div class="page-content">

	
	@if(!empty($data))
	<table class="table table-striped">
  		<tr>
  			<th>Id</th>
  			<th>Car</th>
  			<th>Start Date</th>
  			<th>End Date</th>
  			<th>Price</th>
  			<th>Request Date</th>
  		</tr>

  		@foreach($data as $row)
  		<tr>
  			<th>{{ $row->id }}</th>
  			<th>{{ $row->car }} {{ $row->color }}</th>
  			<th>{{ $row->start_date }}</th>
  			<th>{{ $row->end_date }}</th>
  			<th>{{ $row->price }}</th>
  			<th>{{ $row->date }}</th>
  		</tr>
  		@endforeach
	</table>
	@else
	
  		<p class="alert alert-warning">You have no reservation</p>
  		<p class="buttons"><button class="btn">Reserve a car</button></p>
  
	@endif
</div>
@stop