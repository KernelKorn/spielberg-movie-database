<?php
require_once ('database.php');

if (!isset($movie_id)) {
	$movie_id = $_GET['movie_id'];
	if (!isset($movie_id)) {
		$movie_id = 1;
	}
}

$query = "SELECT * FROM movies
	              WHERE movie_id = $movie_id";
$movie = $db -> query($query);
$movie = $movie -> fetch();
$movie_name = $movie['movie_name'];
$release_date = $movie['release_date'];
$movie_length = $movie['movie_length'];
$movie_trailer = $movie['movie_trailer'];

$query = 'SELECT * FROM movies
	              ORDER BY release_date';
$movies = $db -> query($query);

$query = "SELECT * FROM movie_characters JOIN actors ON movie_characters.actor_id = actors.actor_id
	              WHERE movie_id = $movie_id
	              ORDER BY character_name";
$movie_characters = $db -> query($query);

function youtube($id) {
	return ('<iframe width="560" height="315" src="http://www.youtube.com/embed/' . $id . '" frameborder="0" allowfullscreen></iframe>');
}
?>
<!DOCTYPE html>
<html lang="en">
	<!-- the head section -->
	<head>
		<title>Spielberg Movies</title>
		<link rel="stylesheet" type="text/css" href="main.css" />
		<link rel="shortcut icon" href="images/favicon.ico" >
	</head>

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
							<?php foreach ($movies as $movie): ?>
							<option value="?movie_id=<?php echo $movie['movie_id']; ?>"><?php echo $movie['movie_name']; ?></option>
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
						<h2><?php echo $movie_name; ?> | Relese Date: <?php echo $release_date; ?> | Runtime: <?php echo $movie_length; ?></h2>
						<table>
							<tr>
								<th style="color: black">Character Name</th>
								<th style="color: black">Actor Name</th>
							</tr>
							<?php foreach ($movie_characters as $movie_character) : ?>
							<tr>
								<td><?php echo $movie_character['character_name']; ?></td>
								<td><?php echo $movie_character['actor_name']; ?></td>
							</tr>
							<?php endforeach; ?>
						</table>
						<br />
						<?php echo youtube($movie_trailer); ?>
					</div>
				</div><!-- end main -->
				<div id="footer"></div>
			</div><!-- end page -->
	</body>
</html>