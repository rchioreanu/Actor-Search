<?php
include_once 'includes.php';

function	search_actor($actors, $actors_movies)
{
	$nume = readline("Introduceti numele actorului (case insensitive): ");
	$actors->citire = $nume;
	for ($i = 0; $i < $actors->id; $i++)
	{
		if (strcasecmp($nume, $actors->nume[$i]) == 0)
		{
			$k = 0;
			$ok = 1;
			$ok2 = 0;
			echo "Nume: ".$actors->nume[$i]."\n";
			echo "Prenume: ".$actors->prenume[$i]."\n";
			echo "Data Nasterii: ".$actors->data[$i]."\n";
			echo "Nationalitate: ".$actors->nationalitate[$i]."\n";
			echo "Oras: ".$actors->oras[$i]."\n";
			echo "Inaltime: ".$actors->inaltime[$i]."\n";
			echo "Greutate: ".$actors->greutate[$i]."\n";
			echo "Email: ".$actors->email[$i]."\n";
			echo "Telefon: ".$actors->telefon[$i]."\n";
			while ($actors_movies->actors[$k])
			{
				if (strcasecmp($actors_movies->actors[$k], $actors->nume[$i]) == 0)
				{
					$ok2 = 1;
					break;
				}
				$k++;
			}
			$l = 1;
			if ($ok2 == 1)
			{
				while ($actors_movies->movies[$k][$l])
				{
					echo $actors_movies->movies[$k][$l].",";
					$l++;
				}
			}
			else
				echo "Nu joaca in filme! ";
			return ($i);
		}
	}
	if ($ok == 0)
		return (-1);
}

function	search_movie($movies)
{
	$film = readline("Introduceti numele filmului (case insensitive): ");
	$movies->citire = $film;
	for ($i = 0; $i < $movies->id_m; $i++)
	{
		if (strcasecmp($film, $movies->denumire[$i]) == 0)
		{
			echo "Denumire: ".$movies->denumire[$i]."\n";
			echo "An aparitie: ".$movies->aparitie[$i]."\n";
			echo "Website: ".$movies->website[$i]."\n";
			$ok = 1;
			return ($i);
		}
	}
	if ($ok == 0)
		return (-1);
}
?>
