#!/usr/bin/php
<?php
include_once 'includes.php';
printf("\e[1;1H\e[2J");
echo "Actor search v. 0.3"."\n";
printf("Salut!\n\n");
printf("Pentru a vedea detalii despre un actor apasa (1)\n");
printf("Pentru a vedea detalii despre un film apasa (2)\n");
printf("Pentru a insera/sterge date despre un actor apasa (3)\n");
printf("Pentru a insera/sterge date despre un film apasa (4)\n");
printf("Pentru a rula unit-testele apasati (5)\n\n");
printf("EXIT : (0) \n");
$line = readline("Introduceti numarul: ");
while ($line != 1 && $line != 2 && $line != 3 && $line != 3 && $line != 4 && $line != 5 && $line != 0)
	$line = readline("Introduceti numarul: ");
if ($line == 0)
{
	echo "Exiting...\n";
	exit (0);
}

else if ($line == 1)
	search_actor($actors, $actors_movies);

else if ($line == 2)
	search_movie($movies, $movies_actors);

else if ($line == 3)
{
	$actors->filename = $argv[1];
	add_field_actors($actors, $actors_movies);
}

else if ($line == 4)
{
	$movies->filename = $argv[2];
	add_field_movies($movies, $movies_actors);
}

else if ($line == 5)
	shell_exec("sh unit_tests.sh");
?>
