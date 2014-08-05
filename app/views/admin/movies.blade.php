@extends('layouts.header')

@section('content')
	<div id="content">
		<div class="jumbotron text-center">
			<h2>Movies Table</h2>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th>Movie</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($Movies as $movie)
					<tr data-id='{{ $movie->id }}'>
						<td>{{ $movie->name }}</td>
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

@section('js')
	<script src="/js/movie.js" type="text/javascript"></script>
@stop