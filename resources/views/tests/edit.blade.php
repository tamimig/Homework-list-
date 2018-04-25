@extends('layouts.app')


@section ('content')

@if (Auth::check())

  <div class="container">
    <div class="row">
      <div class="col-sm">

<div class="panel panel-default">

	<div class="panel-heading">

		Edit Homework : {{$test->title}}

	</div>

	<div class="panel-body">
		<form action="{{route('test.update', ['id' => $test->id])}}" method="post">

		{{ csrf_field()}}

			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" class="form-control" value="{{$test->title}}">

			</div>


			<div class="form-group">

				<label for="content"> Content </label>

				<textarea class="form-control" name="content" rows="5" cols="5">{{$test->content}}</textarea>

			</div>

			<div class="form-group">

				<div class="text-center">

					<button class="btn btn-success" type="submit">Update Homework</button>


				</div>

			</div>




		</form>


	</div>


</div>
</div>
</div>
</div>
@endif

@endsection
