--TEST--
check_weight($weight) function - Test weight
--FILE--
<?php
include 'checkers.php';
var_dump(check_weight("1234"));
var_dump(check_weight("asti"));
var_dump(check_weight("-123"));
var_dump(check_weight("123"));
var_dump(check_weight("123.31"));
?>
--EXPECT--
bool(false)
bool(false)
bool(false)
bool(true)
bool(true)
