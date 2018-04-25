@extends('layouts.app')


@section ('content')


@foreach($errors->all() as $error)

    <ul class="list-group">

      <li class="list-group-item text-danger">

        {{$error}}
      </li>


    </ul>

    @endforeach

  @if (Auth::check())

    <div class="container">
      <div class="row">
        <div class="col-sm">

<div class="panel panel-default">

	<div class="panel-heading">

		Create new Homework

	</div>

	<div class="panel-body">
		<form action="{{route('test.store')}}" method="post">

		{{ csrf_field()}}

			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" class="form-control">

			</div>

			<div class="form-group">

				<label for="content"> Content </label>

				<textarea class="form-control" name="content" rows="5" cols="5"></textarea>

			</div>

			<div class="form-group">

				<div class="text-center">

					<button class="btn btn-success">Store Homework</button>


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
