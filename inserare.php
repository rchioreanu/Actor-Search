<?php
include_once 'includes.php';

function	add_field_actors($actors)
{
	while (($pos = search_actor($actors)) == -1);
	echo "\nPentru a schimba numele apasati (1)\n";	
	echo "Pentru a schimba prenumele apasati (2)\n";
	echo "Pentru a schimba data nasterii apasati (3)\n";
	echo "Pentru a schimba nationalitatea apasati (4)\n";
	echo "Pentru a schimba orasul apasati (5)\n";
	echo "Pentru a schimba inaltimea apasati (6)\n";
	echo "Pentru a schimba greutatea apasati (7)\n";
	echo "Pentru a schimba email-ul apasati (8)\n";
	echo "Pentru a schimba telefonul apasati (9)\n";
	echo "Pentru a iesi apasati (0)\n";
	$choice = readline("Introduceti optiunea dumneavoastra: ");
	if ($choice == 0)
	{
		echo "exiting...\n";
		exit (0);
	}
}

function	add_field_movies($movies)
{
	while (($pos = search_movie($movies)) == -1);
}
?>
