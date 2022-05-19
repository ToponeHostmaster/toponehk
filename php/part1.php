<?php
session_start();

unset($_SESSION['page1']);

$_SESSION['prefix']=$_POST['prefix'];
$_SESSION['name']=$_POST['name'];
$_SESSION['tel']=$_POST['tel'];
$_SESSION['telType']=$_POST['telType'];
$_SESSION['email']=$_POST['email'];

if ( trim($_POST['companyName'])!= null && trim($_POST['companyName'])!= '' )
	$_SESSION['companyName']=$_POST['companyName'];
if ( trim($_POST['jobTitle'])!= null && trim($_POST['jobTitle'])!= '' )
	$_SESSION['jobTitle']=$_POST['jobTitle'];
if ( trim($_POST['fax'])!= null && trim($_POST['fax'])!= '' )
	$_SESSION['fax']=$_POST['fax'];
if ( trim($_POST['Time'])!= null && trim($_POST['Time'])!= '' ){
	$_SESSION['Time']=$_POST['Time'];
	$_SESSION['postFix']=$_POST['postFix'];	
}	

$_SESSION['page1']='Y';

header('location:movingQuoteForm_part2.php');

?>