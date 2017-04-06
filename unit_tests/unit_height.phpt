--TEST--
check_height($height) function - Test height
--FILE--
<?php
include 'checkers.php'; 
$bar = "1.5";
var_dump(check_height($bar));
var_dump(check_height("-1.0"));
var_dump(check_height("2.85"));
var_dump(check_height("3.0"));
?>
--EXPECT--
bool(true)
bool(false)
bool(true)
bool(false)
