@extends('layouts.header')

@section('content')
<?php
	function youtube($id)
	{
		return ('<iframe src="http://www.youtube.com/embed/' . $id . '" frameborder="0" allowfullscreen></iframe>');
	}
?>
<div id="page">
	<div id="main">
		<div id="sidebar">
			<h4>Movie Selector</h4>
			<form  method="get" action="javascript.action">
				<select class="selectMovie" name="URL" onchange="window.location.href=this.form.URL.options[this.form.URL.selectedIndex].value">
					<option value>Select a movie:</option>
					<?php foreach ($Movies as $movie): ?>
					<option value="/movie/{{ $movie->id }}">{{ $movie->name }}</option>
					<?php endforeach; ?>
				</select>
			</form>
			<br>
			<div id="content">
				<div class="jumbotron text-center">
					<h2>{{ $Movie->name }}</h2>
					<p>
						 <strong>Relese Date:</strong> {{ $Movie->release_date }}<br>
						 <strong>Runtime:</strong> {{ $Movie->length }}
					<p>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th>Actor Name</th>
							<th>Character Name</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($Movie->actors as $actor) : ?>
						<tr>
							<td>{{ $actor->name }}</td>
							<td>{{ $actor->pivot->character_name }}</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<br />
				{{ youtube($Movie->trailer) }}
			</div>
		</div><!-- end main -->
		<div id="footer"></div>
	</div><!-- end page -->
</div>
@stop