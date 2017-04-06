--TEST--
check_date($date) function
--FILE--
<?php
include 'checkers.php';
var_dump(check_date("01/01/2000"));
var_dump(check_date("23/04/1995"));
var_dump(check_date("30/09/2014"));
var_dump(check_date("31/02/1990"));
var_dump(check_date("10.10.2010"));
var_dump(check_date("2/4/2000"));
var_dump(check_date("01/01/1000"));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
bool(false)
bool(false)
bool(true)
bool(false)
