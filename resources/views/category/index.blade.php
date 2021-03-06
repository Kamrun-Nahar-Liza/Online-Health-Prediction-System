@extends('master')

@section('content')

	<div class="weLl">
		<h2><b>Name Of Disease List</b></h2>
		@if( Auth::user()->role == "doctor")
		<p>
			<a href="{{ route('categories.create')}}" class="btn btn-success">
				Add Disease Name 
			</a>
			(**If it is not avilable in this list**)
		</p>
		@endif

		@if(session()->has('message'))
 			<div class="alert alert-danger">
   				 {{ session('message')}}
 			</div>
		@endif
		
		<table class="table table-bordered table-condensed">
			<thead>
				<tr>
				
				<th>Disease Category</th>
				
				<th>Status</th>
				<th>Action</th>
				</tr>
			</thead>

			<tbody>

				@foreach($categories as $category)
				<tr>
					
					<td>{{ $category->name }}</td>
					
					<td>{{ $category->status == 1 ? 'Active' : 'Inactive' }}</td>
					<td>
						<a href="{{ route('categories.show', $category->id)}}" class="btn btn-info">
							<i>Details</i>
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		

	</div>



@stop