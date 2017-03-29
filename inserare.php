<?php
include_once 'includes.php';

function	add_field_actors($actors)
{
	while (($pos = search_actor($actors)) != -1)
	{
		echo "\nDoriti sa stergeti aceasta intrare?(Y/N)\n";
		$choice = readline("Introduceti optiunea: ");
		if ($choice == 'Y' || $choice == 'y')
		{
			echo "stergere...\n";
			delete_actor($actors, $pos);
			return ;
		}
		else
			echo "anulare...\n";
	}
	$i = get_actors_length($actors);
	$actors->nume[$i] = $actors->citire;
	$actors->prenume[$i] = readline("Introduceti prenumele: ");
	$data = readline("Introduceti data sub forma dd/mm/yyyy: ");
	while (!check_date($data))
		$data = readline("Introduceti data sub forma dd/mm/yyyy: ");
	$actors->data[$i] = $data;
	$actors->nationalitatei[$i] = readline("Introduceti nationalitatea: ");
	$actors->oras[$i] = readline("Introduceti orasul: ");
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
		$mail = readline("Introduceti email-ul: ");
	$actors->email[$i] = $email;
	$telefon = readline("Introduceti numarul de telefon: ");
	while (!check_phone($telefon))
		$telefon = readline("Introduceti numarul de telefon: ");
	$actors->telefon[$i] = $telefon;
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

function	add_field_movies($movies)
{
	while (($pos = search_movie($movies)) != -1)
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
