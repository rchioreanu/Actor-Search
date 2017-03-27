<?php
include_once 'includes.php';

function	add_field_actors($actors)
{
	while (!search_actor($actors));
}

function	add_field_movies($movies)
{
	while (!search_movie($movies));
}
?>
