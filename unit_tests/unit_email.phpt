--TEST--
check_email($email) function
--FILE--
<?php
include 'checkers.php';
var_dump(check_email("darian_stelistul@yahoo.com"));
var_dump(check_email("deyuxtreme69@yahoo.com"));
var_dump(check_email("mailcorect"));
var_dump(check_email("nuam mail@gmail.com"));
?>
--EXPECT--
bool(true)
bool(true)
bool(false)
bool(false)
