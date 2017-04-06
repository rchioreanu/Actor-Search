--TEST--
check_city($city) function - Test city
--FILE--
<?php
include 'checkers.php';
var_dump(check_city("1234"));
var_dump(check_city("BuCuresti"));
var_dump(check_city("Cluj-Napoca"));
var_dump(check_city("Bistrita Nasaud"));
var_dump(check_city("!Aasd"));
?>
--EXPECT--
bool(false)
bool(true)
bool(true)
bool(true)
bool(false)
