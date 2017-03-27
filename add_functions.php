<?php

function	add_name($i)
{
	$new = readline("Introduceti noul nume: ");
	$actors->nume[$i] = $new;
}

function	add_surname($i)
{
	$new = readline("Introduceti noul prenume: ");
	$actors->prenume = $new;
}

function	add_data($i)
{
	$new = readline("Introduceti data: ");
	while (!check_date($new))
		$new = readline("Introduceti data: ");
	$actors->date[$i] = $new;
}

function	add_nationality($i)
{
	$new = readline("Introduceti nationalitatea: ");
	$actors->nationalitate[$i] = $new;
}

function	add_city($i)
{
	$new = readline("Introduceti nationalitatea: ");
	$actors->oras[$i] = $new;
}

function	add_height($i)
{
	$new = readline("Introduceti inaltimea: ");
	$actors->inaltime[$i] = $new;
}

function	add_weight($i)
{
	$new = readline("Introduceti greutatea: ");
	$actors->greutate[$i] = $new;
}

function	add_email($i)
{
	$new = readline("Introduceti email-ul: ");
	$actors->email[$i] = $new;
}

function	add_phone($i)
{
	$new = readline("Introduceti numarul de telefon: ");
	$actors->telefon[$i] = $new;
}
?>
