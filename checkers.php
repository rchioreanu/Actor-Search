<?php
function	check_height($height)
{
	if (!preg_match('/^[0-2]\.([0-9]?[0-9]?[0-9])$/', $height, $matches))
		return (FALSE);
	return (TRUE);
}

function	check_weight($weight)
{
	if (!preg_match('/^\d{1,3}$|(\d{1,3}\.\d{1,3})$/', $weight, $matches))
		return (FALSE);
	return (TRUE);
}

function	check_email($email)
{
	if (!preg_match('/^\w+\@\w+$/', $email, $matches))
		return (FALSE);
	return (TRUE);
}

function	check_phone($phone)
{
	if (!preg_match('/^\d{10}$/', $phone, $matches))
		return (FALSE);
	return (TRUE);
}

function	check_year($year)
{
	$re = '/^\d{4}$/';
	$str = $year;
	if (!preg_match($re, $str, $matches))
		return (FALSE);
	if ($year > 2017 || $year < 1878)
		return (FALSE);
	return (TRUE);
}

function	check_date($ddmmyy)
{

	$re = '/^(\d|([0-2]\d)|3[0-1])\/(0\d|\d|1[0-2])\/((18[7-9][8-9])|(19\d\d)|200\d|201[0-7])$/';
	$str = $ddmmyy;
	if (!preg_match($re, $str))
		return (FALSE);
	$date = explode("/", $ddmmyy);
	if ($date[2] % 4 != 0 && $date[1] == 2 && $date[0] > 28)
		return (FALSE);
	if ($date[2] % 4 == 0 && $date[1] == 2 && $date[0] > 29)
		return (FALSE);
	if (($date[1] == 1 || $date[1] == 3 || $date[1] == 5
		|| $date[1] == 7 || $date[1] == 8 || $date[1] == 10
		|| $date[1] == 12) && $date[0] > 31)
		return (FALSE);
	if (($date[1] == 4 || $date[1] == 6 || $date[1] == 9
		|| $date[1] == 11 || $date[1]) && $date[0] > 30)
		return (FALSE);
	return (TRUE);
}
?>
