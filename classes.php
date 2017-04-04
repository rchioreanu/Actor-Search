<?php
include_once 'includes.php';
class	actor
{
	public	$nume;
	public	$prenume;
	public	$data;
	public	$nationalitate;
	public	$oras;
	public	$inaltine;
	public	$greutate;
	public	$email;
	public	$telefon;
	public	$id;
	public	$citire;
	public	$filename;
}

class	movie
{
	public	$denumire;
	public	$aparitie;
	public	$website;
	public	$id_m;
	public	$citire;
	public	$filename;
}

class	actor_movie
{
	public	$movie;
	public	$actors;
}

class	movie_actor 
{
	public	$actor;
	public	$movies;
}
?>
