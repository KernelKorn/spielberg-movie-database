@extends('layouts.header')

@section('content')
	<div id="page">
		<h1>Actor Search Results</h1>
			<br />
			<div id="content">

				<table class="table">
					<thead>
						<tr>
							<th>Actor</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($Actors as $actor)
							<tr>
								<td> <a href="/actor/{{ $actor->id }}">{{ $actor->name }}</a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
@stop