<?php
include_once 'includes.php';

function	get_actors_length($actors)
{
	$i = 0;
	while ($actors->nume[$i])
		$i++;
	return ($i);
}

function	get_movies_length($movies)
{
	$i = 0;
	while ($movies->denumire[$i])
		$i++;
	return ($i);
}
?>
