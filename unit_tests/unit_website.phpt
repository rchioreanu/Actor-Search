--TEST--
check_website($website) function
--FILE--
<?php
include 'checkers.php';
var_dump(check_website("www.google.com"));
var_dump(check_website("www.sdas."));
var_dump(check_website("sdadgfas"));
var_dump(check_website("www.anaarepere.ro"));
?>
--EXPECT--
bool(true)
bool(false)
bool(false)
bool(true)
