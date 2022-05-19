<?php
session_start();

unset($_SESSION['page3']);

foreach ($_POST as $var){
if( trim($var)!=='0' && trim($var)!==null && trim($var)!=='' )
$_SESSION[key($_POST)]=$var;
next($_POST);
}

$_SESSION['page3']='Y';

header('location:movingQuoteForm_part4.php');

?>
