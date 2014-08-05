@extends('layouts.header')

@section('content')
	<div id="content">
		<div class="jumbotron text-center">
			<h2>Actors Table</h2>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th>Actor Name</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($Actors as $actor)
					<tr data-id='{{ $actor->id }}'>
						<td>{{ $actor->name }}</td>
						<td>
							<button class="btnDelete" type="button">X</button>
							<button class="btnEdit" type="button">Edit</button>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<br />
		<div id="edit">

		</div>
	</div>
@stop