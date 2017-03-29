<?php
include_once 'includes.php';

function	delete_actor($actors, $pos)
{
	$size = get_actors_length($actors);
	for ($i = $pos; $i < ($size - 1); $i++)
	{
		$actors->nume[$i] = $actors->nume[$i + 1];
		$actors->prenume[$i] = $actors->prenume[$i + 1];
		$actors->data[$i] = $actors->data[$i + 1];
		$actors->nationalitate[$i] = $actors->nationalitate[$i + 1];
		$actors->oras[$i] = $actors->oras[$i + 1];
		$actors->inaltime[$i] = $actors->inaltime[$i + 1];
		$actors->greutate[$i] = $actors->greutate[$i + 1];
		$actors->email[$i] = $actors->email[$i + 1];
		$actors->telefon[$i] = $actors->telefon[$i + 1];
	}
	$file = fopen($actors->filename, 'w');
	for ($i = 0; $i < ($size - 1); $i++)
	{
		$data = $actors->nume[$i].",".$actors->prenume[$i].",".$actors->data[$i].",".$actors->nationalitate[$i].",".$actors->oras[$i].",".$actors->inaltime[$i].",".$actors->greutate[$i].",".$actors->email[$i].",".$actors->telefon[$i].","."\n";
		fwrite($file, $data);
	}
	fclose($file);
}

function	delete_movie($movies, $pos)
{
	$size = get_movies_length($movies);
	for ($i = $pos; $i < ($size - 1); $i++)
	{
		$movies->denumire[$i] = $movies->denumire[$i + 1];
		$movies->aparitie[$i] = $movies->aparitie[$i + 1];
		$movies->website[$i] = $movies->website[$i + 1];
	}
	$file = fopen($movies->filename, 'w');
	for ($i = 0; $i < ($size - 1); $i++)
	{
		$data = $movies->denumire[$i].",".$movies->aparitie[$i].",".$movies->website[$i].","."\n";
		fwrite($file, $data);
	}
	fclose($file);
}
?>
