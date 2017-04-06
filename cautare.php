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
			$l = 0;
			if ($ok2 == 1)
			{
				echo "Filmele in care joaca actorul: ";
				while ($actors_movies->movie[$k][$l])
				{
					$tmp .= $actors_movies->movie[$k][$l].", ";
					$l++;
				}
				$tmp = rtrim($tmp,", ");
				echo $tmp."\n";
			}
			else
				echo "Nu joaca in filme!\n";
			return ($i);
		}
	}
	if ($ok == 0)
		return (-1);
}

function	search_movie($movies, $movies_actors)
{
	$film = readline("Introduceti numele filmului (case insensitive): ");
	$movies->citire = $film;
	for ($i = 0; $i < $movies->id_m; $i++)
	{
		if (strcasecmp($film, $movies->denumire[$i]) == 0)
		{
			$ok = 1;
			echo "Denumire: ".$movies->denumire[$i]."\n";
			echo "An aparitie: ".$movies->aparitie[$i]."\n";
			echo "Website: ".$movies->website[$i]."\n";
			$ok2 = 0;
			$k = 0;
			while ($movies_actors->movies[$k])
			{
				if (strcasecmp($movies_actors->movies[$k], $movies->denumire[$i]) == 0)
				{
					$ok2 = 1;
					break;
				}
				$k++;
			}
			$l = 0;
			if ($ok2 == 1)
			{
				echo "Actorii care joaca in film: ";
				while ($movies_actors->actor[$k][$l])
				{
					$tmp .= $movies_actors->actor[$k][$l].", ";
					$l++;
				}
				$tmp = rtrim($tmp,", ");
				echo $tmp."\n";
			}
			else
				echo "Nu sunt actori!\n";
			return ($i);
		}
	}
	if ($ok == 0)
	return (-1);
}
?>
