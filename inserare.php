<?php
include_once 'includes.php';

function	add_field_actors($actors, $actors_movies)
{
	while (($pos = search_actor($actors,$actors_movies)) != -1)
	{
		echo "\nDoriti sa stergeti aceasta intrare?(Y/N)\n";
		$choice = readline("Introduceti optiunea: ");
		if ($choice == 'Y' || $choice == 'y')
		{
			echo "Stergere...\n";
			delete_actor($actors, $pos);
			return ;
		}
		else if($choice == 'N' || $choice == 'n')
			echo "Anulare...\n";
	}
	$i = get_actors_length($actors);
	$actors->nume[$i] = $actors->citire;
	$actors->prenume[$i] = readline("Introduceti prenumele: ");
	$data = readline("Introduceti data sub forma dd/mm/yyyy: ");
	while (!check_date($data))
		$data = readline("Introduceti data sub forma dd/mm/yyyy: ");
	$actors->data[$i] = $data;
	$actors->nationalitate[$i] = readline("Introduceti nationalitatea: ");
	$oras = readline("Introduceti orasul: ");
	while (!check_city($oras))
		$oras = readline("Introduceti orasul: ");
	$actors->oras[$i] = $oras;
	$inaltime = readline("Introduceti inaltimea: ");
	while(!check_height($inaltime))
		$inaltime = readline("Introduceti inaltimea in metri: ");	
	$actors->inaltime[$i] = $inaltime;
	$greutate = readline("Introduceti greutatea in kg: ");
	while(!check_weight($greutate))
		$greutate = readline("Introduceti greutatea in kg: ");
	$actors->greutate[$i] = $greutate;
	$email = readline("Introduceti email-ul: ");
	while(!check_email($email))
		$email = readline("Introduceti email-ul: ");
	$actors->email[$i] = $email;
	$telefon = readline("Introduceti numarul de telefon: ");
	while (!check_phone($telefon))
		$telefon = readline("Introduceti numarul de telefon: ");
	$actors->telefon[$i] = $telefon;
	$j = 0;
	@$file = fopen("tmp.csv", "a");
	fwrite($file, $actors->nume[$i].",");
	while ($tmp = readline("Introduceti filmul/filmele in care a jucat separate de enter: "))
	{
		$actors_movies->movie[$i][$j] = $tmp;
		$data =  $actors_movies->movie[$i][$j].",";
		fwrite($file, $data);
		$j++;
	}
	fwrite($file, "\n");
	fclose($file);
	echo "\nDoriti sa salvati in fisier?(y/n)\n";
	$choice = readline("Introduceti optiunea dumneavoastra: ");
	if ($choice == "N" || $choice == "n")
	{
		echo "Exiting...\n";
		exit (0);
	}
	if ($choice == "Y" || $choice == "y")
	{
		$file = fopen($actors->filename, "a");
		$data =  $actors->nume[$i].",".$actors->prenume[$i].",".$actors->data[$i].",".$actors->nationalitate[$i].",".$actors->oras[$i].",".$actors->inaltime[$i].",".$actors->greutate[$i].",".$actors->email[$i].",".$actors->telefon[$i].","."\n";
		fwrite($file, $data);
	}
}

function	add_field_movies($movies, $movies_actors)
{
	while (($pos = search_movie($movies, $movies_actors)) != -1)
	{
		echo "\nDoriti sa stergeti aceasta intrare?(Y/N)\n";
		$choice = readline("Introduceti optiunea: ");
		if ($choice == 'Y' || $choice == 'y')
		{
			echo "stergere...\n";
			delete_movie($movies, $pos);
			return ;
		}
		else
			echo "anulare...\n";
	}
	$i = get_movies_length($movies);
	$movies->denumire[$i] = $movies->citire;
	$aparitie = readline("Introduceti anul aparitiei: ");
	while (!check_year($aparitie))
		$aparitie = readline("Introduceti anul aparitiei: ");
	$movies->aparitie[$i] = $aparitie;
	$website = readline("Introduceti website-ul: ");
	while (!check_website($website))
		$website = readline("Introduceti website-ul: ");
	$movies->website[$i] = $website;
	$j = 0;
	@$file = fopen("tmp2.csv", "a");
	fwrite($file, $movies->denumire[$i].",");
	while ($tmp = readline("Introduceti actorul/actorii care joaca in film separati de enter: "))
	{
		$movies_actors->actor[$i][$j] = $tmp;
		$data =  $movies_actors->actor[$i][$j].",";
		fwrite($file, $data);
		$j++;
	}
	fwrite($file, "\n");
	fclose($file);
	echo "\nDoriti sa salvati in fisier?(y/n)\n";
	$choice = readline("Introduceti optiunea dumneavoastra: ");
	if ($choice == "N" || $choice == "n")
	{
		echo "Exiting...\n";
		exit (0);
	}
	if ($choice == "Y" || $choice == "y")
	{
		$file = fopen($movies->filename, 'a');
		$data = $movies->denumire[$i].",".$movies->aparitie[$i].",".$movies->website[$i].","."\n";
		fwrite($file, $data);
	}
}

?>
