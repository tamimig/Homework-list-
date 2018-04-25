@extends('layouts.app')



@section('content')
@if (Auth::check())
<div class="container">
  <div class="row">
    <div class="col-sm">
	<div class="panel panel-default">

		<div class="panel-heading">

			Delete Homework


		</div>

			<div class="panel-body">


				<table class="table table-hover">


					<thead>

						<th>Title</th>

						<th>Content</th>

            <th>Edit</th>

						<th>Delete</th>

					</thead>

					<tbody>

					@if($tests->count()>0)


						@foreach($tests as $test)





						<tr>

								<td>{{$test->title}}</td>



								<td>{{$test->content}}</td>

								<td>Edit</td>

								<td><a href="{{route('test.delete' , ['id' => $test->id])}}" class="btn btn-xs btn-danger">Delete</a></td>



							@endforeach


						</tr>

					@else
						<tr>
							<th colspan="5" class="text-center"> No Homework Deleted</th>

						</tr>


					@endif




					</tbody>







				</table>









			</div>




	</div>





@endif
@endsection
