<?php
// Get the product data

$name = $_POST['name'];

require_once ('database.php');
$query = "SELECT actor_name, character_name, movie_name, m.movie_id
			  FROM actors a JOIN movie_characters mc ON a.actor_id = mc.actor_id 
					JOIN movies m ON mc.movie_id = m.movie_id
			 WHERE actor_name LIKE CONCAT( '$name', '%' ) ";
$actors = $db -> query($query);

function movie_link( $id, $name ){
	return ('<a href="index.php?movie_id=' . $id . '">'.$name.'</a>');
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Spielberg Movies</title>
		<link rel="stylesheet" type="text/css" href="main.css" />
		<link rel="shortcut icon" href="images/favicon.ico" >
	</head>

	<!-- the body section -->
	<body>
		<div id="page">
			<div id="main">

				<h1>Actor Search Results</h1>

				<div id="sidebar">
					<p><a href="index.php">Retun to Main Page</a></p>

					<form id="searchbox" action="search.php" method="post">
						<input id="search" type="input" name="name" placeholder="Search For Actor:"/>

						<label>&nbsp;</label>
						<input type="submit" value="Search" />
						
					</form>
					<br />
					<div id="content">
						
						<table>
							<tr>
								<th style="color: black">Actor</th>
								<th style="color: black">Character</th>
								<th style="color: black">Movie</th>
							</tr>
							<?php foreach ($actors as $actor) : ?>
							<tr>							
								<td><?php echo $actor['actor_name']; ?></td>
								<td><?php echo $actor['character_name']; ?></td>
								<td><?php echo movie_link($actor['movie_id'], $actor['movie_name']); ?></td>
							</tr>
							<?php endforeach; ?>
						</table>
	</body>
</html>