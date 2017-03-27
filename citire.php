<?php
include 'checkers.php';
include 'classes.php';
include 'add_functions.php';
$actors = new actor();
$movies = new movie();
@$file1 = fopen($argv[1], "r") or die("ERROR\n");
@$file2 = fopen($argv[2], "r") or die("ERROR\n");
if ($file1 && $file2)
{
	$i = 0;
	while (($line = fgets($file1)) != FALSE)
	{
		$map1 = explode(",", $line);
		$actors->nume[$i] = $map1[0];
		$actors->prenume[$i] = $map1[1];
		if (check_date($map1[2]))
			$actors->data[$i] = $map1[2];
		$actors->nationalitate[$i] = $map1[3];
		$actors->oras[$i] = $map1[4];
		if (check_height($map1[5]))
			$actors->inaltime[$i] = $map1[5];
		if (check_weight($map1[6]))
			$actors->greutate[$i] = $map1[6];
		if (check_email($map1[7]))
			$actors->email[$i] = $map1[7];
		if (check_phone($map1[8]))
			$actors->telefon[$i] = $map1[8];
		$actors->id = $i + 1;
		$i++;
	}
	$actors_nr = $i;
	$i = 0;
	while (($line = fgets($file2)) != FALSE)
	{
		$map2 = explode(",", $line);
		$movies->denumire[$i] = $map2[0];
		if (check_year($map2[1]))
			$movies->aparitie[$i] = $map2[1];
		else
			$movies->aparitie[$i] = "ERROR";
		$re = '/^www\.\w+\.\w+$/';
		$str = $map2[2];
		if (preg_match($re, $str, $matches))
			$movies->website[$i] = $map2[2];
		else
			$movies->website[$i] = "ERROR";
		$movies->id_m = $i + 1;
		$i++;
	}
	$movies_nr = $i;
	@fclose($file1);
	@fclose($file2);
/*	printf("\e[1;1H\e[2J");
	echo "Actor search v. 0.1"."\n";
	printf("Salut!\n\n");
	printf("Pentru a vedea detalii despre un actor apasa (1)\n");
	printf("Pentru a vedea detalii despre un film apasa (2)\n");
	printf("Pentru a introduce date despre un actor apasa (3)\n");
	printf("Pentru a introduce date despre un film apasa (4)\n\n");
	printf("EXIT : (0) \n");
	$line = readline("Introduceti numarul: ");
	while ($line != 1 && $line != 2 && $line != 3 && $line != 3 && $line != 4 && $line != 0)
		$line = readline("Introduceti numarul: ");
	if ($line == 0)
	{
		echo "exiting...\n";
		exit (0);
	}
	else if ($line == 1)
	{
		$nume = readline("Introduceti numele actorului (case insensitive): ");
		for ($i = 0; $i < $actors_nr; $i++)
		{
			if (strcasecmp($nume, $actors->nume[$i]) == 0)
			{
				$ok = 1;
				echo "Nume: ".$actors->nume[$i]."\n";
				echo "Prenume: ".$actors->prenume[$i]."\n";
				echo "Data Nasterii: ".$actors->data[$i]."\n";
				echo "Nationalitate: ".$actors->nationalitate[$i]."\n";
				echo "Oras: ".$actors->oras[$i]."\n";
				echo "Inaltime: ".$actors->inaltime[$i]."\n";
				echo "Greutate: ".$actors->greutate[$i]."\n";
				echo "Email: ".$actors->email[$i]."\n";
				echo "Telefon: ".$actors->telefon[$i]."\n";
				break ;
			}
		}
		if ($ok == 0)
			echo "Nu a fost gasit"."\n";
	}
	else if ($line == 2)
	{
		$film = readline("Introduceti numele filmului (case insensitive): ");
		for ($i = 0; $i < $movies_nr; $i++)
		{
			if (strcasecmp($film, $movies->denumire[$i]) == 0)
			{
				echo "Denumire: ".$movies->denumire[$i]."\n";
				echo "An aparitie: ".$movies->aparitie[$i]."\n";
				echo "Website: ".$movies->website[$i]."\n";
				$ok = 1;
				break ;
			}
		}
		if ($ok == 0)
			echo "Nu a fost gasit"."\n";
	}
	else if ($line == 3)
	{
		$line = readline("Introduceti numele actorului pentru care doriti sa introduceti date: ");
		for ($i = 0; $i < $actors_nr; $i++)
		{
			if (strcasecmp($nume, $actors->nume[$i]) == 0)
			{
				$ok = 1;
				echo "Nume: ".$actors->nume[$i]."\n";
				echo "Prenume: ".$actors->prenume[$i]."\n";
				echo "Data Nasterii: ".$actors->data[$i]."\n";
				echo "Nationalitate: ".$actors->nationalitate[$i]."\n";
				echo "Oras: ".$actors->oras[$i]."\n";
				echo "Inaltime: ".$actors->inaltime[$i]."\n";
				echo "Greutate: ".$actors->greutate[$i]."\n";
				echo "Email: ".$actors->email[$i]."\n";
				echo "Telefon: ".$actors->telefon[$i]."\n";
				break ;
			}
		}
		if ($ok == 1)
		{
			$camp = readline("Introduceti campul pe care doriti sa il modificati: ");
			//	if (strcasecmp($camp, "Nume") == 0)
			//	else if (str
		}
	//	$actors->put_class_to_file();
		/*
		for ($i = 0; $i < $actors_nr; $i++)
		{
			$map[$i][0] = $actors->nume[$i];
			$map[$i][1] = $actors->prenume[$i];
			$map[$i][2] = $actors->data[$i];
			$map[$i][3] = $actors->nationalitate[$i];
			$map[$i][4] = $actors->oras[$i];
			$map[$i][4] = $actors->inaltime[$i];
			$map[$i][5] = $actors->greutate[$i];
			$map[$i][6] = $actors->email[$i];
			$map[$i][7] = $actors->telefon[$i];
		}
		for ($i = 0; $i < $actors_nr; $i++)	
		{
			$str = implode(",", $map[$i]);
			$s2 = ($i == 0) ? $s2 = $s2.$str : $s2."\n".$str;
		}
		file_put_contents("./file_test.csv", $s2);
 */
//	}
}
?>
