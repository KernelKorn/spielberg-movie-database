@extends('layouts.header')

@section('content')
	<div id="content">
				<div class="jumbotron text-center">
					<h2>{{ $Actor->name }}</h2>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th>Movie</th>
							<th>Character Name</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($Actor->movies as $movie)
							<tr>
								<td>{{ $movie->pivot->character_name }}</td>
								<td><a href="/movie/{{ $movie->id }}">{{ $movie->name }}</a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
				<br />

			</div>
@stop