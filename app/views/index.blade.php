<!DOCTYPE html>
<html lang="en">
	<!-- the head section -->
	<!-- <head>
		<title>Spielberg Movies</title>
		<link rel="stylesheet" type="text/css" href="main.css" />
		<link rel="shortcut icon" href="images/favicon.ico" >
	</head> -->

	<!-- the body section -->
	<body>
		<div id="page">
			<div id="main">

				<h1>Spielberg's Movies</h1>

				<div id="sidebar">
					<h2>Movie Selector</h2>
					<form method="get" action="javascript.action">
						<select name="URL" style="width:120px" onchange="window.location.href=this.form.URL.options[this.form.URL.selectedIndex].value">
							<option>Select a movie:</option>
							<?php foreach ($Movies as $movie): ?>
							<option value="/movie/{{ $movie->id }}">{{ $movie->name }}</option>
							<?php endforeach; ?>
						</select>
					</form>
					<br />

					<form id="searchbox" action="search.php" method="post">
						<input type="input" name="name" placeholder="Search For Actor:"/>

						<label>&nbsp;</label>
						<input type="submit" value="Search" />
					</form>

					<div id="content">
						<h2>{{ $movie->name }} | Relese Date: {{ $movie->release_date }} | Runtime: {{ $movie->length }}</h2>
						<table>
							<tr>
								<th style="color: black">Character Name</th>
								<th style="color: black">Actor Name</th>
							</tr>
							<?php foreach ($movie->actors as $actor) : ?>
							<tr>
								<td>{{ $actor->pivot->character_name }}</td>
								<td>{{ $actor->name }}</td>
							</tr>
							<?php endforeach; ?>
						</table>
						<br />

					</div>
				</div><!-- end main -->
				<div id="footer"></div>
			</div><!-- end page -->
	</body>
</html>