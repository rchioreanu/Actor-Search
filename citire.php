<?php
include 'classes.php';
include_once 'includes.php';
$actors = new actor();
$movies = new movie();
$actors_movies = new actor_movie();
$movies_actors = new movie_actor();
@$file1 = fopen($argv[1], "r") or die("Usage: ./menu.php actors.csv movies.csv\n");
@$file2 = fopen($argv[2], "r") or die("Usage: ./menu.php actors.csv movies.csv\n");
@$file3 = fopen("tmp.csv", "r");
@$file4 = fopen("tmp2.csv", "r");
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
		else
			$actors->data[$i] = "wrong format";
		$actors->nationalitate[$i] = $map1[3];
		if (check_city($map1[4]))
			$actors->oras[$i] = $map1[4];
		else
			$actors->oras[$i] = "wrong format";
		if (check_height($map1[5]))
			$actors->inaltime[$i] = $map1[5];
		else
			$actors->inaltime[$i] = "wrong format";
		if (check_weight($map1[6]))
			$actors->greutate[$i] = $map1[6];
		else
			$actors->greutate[$i] = "wrong format";
		if (check_email($map1[7]))
			$actors->email[$i] = $map1[7];
		else
			$actors->email[$i] = "wrong format";
		if (check_phone($map1[8]))
			$actors->telefon[$i] = $map1[8];
		else
			$actors->telefon[$i] = "wrong format";
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
			$movies->aparitie[$i] = "wrong format";
		$re = '/^www\.\w+\.\w+$/';
		$str = $map2[2];
		if (preg_match($re, $str, $matches))
			$movies->website[$i] = $map2[2];
		else
			$movies->website[$i] = "wrong format";
		$movies->id_m = $i + 1;
		$i++;
	}
	$movies_nr = $i;
	@fclose($file1);
	@fclose($file2);
}

if ($file3)
{
	$i = 0;
	while (($line = fgets($file3)) != FALSE)
	{
		$tmp = explode(",", trim($line, "\n"));
		$ok = 1;
		$l = 0;
		while ($actors_movies->actors[$l])
		{
			if ($tmp[0] == $actors_movies->actors[$l])
				$ok = 0;
			$l++;
		}
		if ($ok == 1)
		{
			$actors_movies->actors[$i] = $tmp[0];
			$j = 0;
			$k = 1;
			while ($tmp[$k])
			{
				$actors_movies->movie[$i][$j] = $tmp[$k];
				$k++;
				$j++;
			}
			$i++;
		}
	}
}

if ($file4)
{
	$i = 0;
	while (($line = fgets($file4)) != FALSE)
	{
		$tmp = explode(",", trim($line, "\n"));
		$ok = 1;
		$l = 0;
		while ($movies_actors->movies[$l])
		{
			if ($tmp[0] == $movies_actors->movies[$l])
				$ok = 0;
			$l++;
		}
		if ($ok == 1)
		{
			$movies_actors->movies[$i] = $tmp[0];
			$j = 0;
			$k = 1;
			while ($tmp[$k])
			{
				$movies_actors->actor[$i][$j] = $tmp[$k];
				$k++;
				$j++;
			}
			$i++;
		}
	}
}

?>
