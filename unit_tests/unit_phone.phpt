--TEST--
check_phone($phone) function - Test phone
--FILE--
<?php
include 'checkers.php';
var_dump(check_phone("1234"));
var_dump(check_phone("asdff"));
var_dump(check_phone("1234567890"));
var_dump(check_phone("0740325126"));
var_dump(check_phone("123456789"));
?>
--EXPECT--
bool(false)
bool(false)
bool(true)
bool(true)
bool(false)
