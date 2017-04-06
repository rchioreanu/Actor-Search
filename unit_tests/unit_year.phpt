--TEST--
check_year($year) function - Test year
--FILE--
<?php
include 'checkers.php';
var_dump(check_year("1234"));
var_dump(check_year("asdfads"));
var_dump(check_year("1999"));
var_dump(check_year("2017"));
var_dump(check_year("1800"));
?>
--EXPECT--
bool(false)
bool(false)
bool(true)
bool(true)
bool(false)
