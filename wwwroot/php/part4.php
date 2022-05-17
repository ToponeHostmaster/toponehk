<?php
session_start();
unset($_SESSION['page4']);
include_once $_SERVER['DOCUMENT_ROOT'] . '/regalworld/php/securimage/securimage.php';
$securimage = new Securimage();
if ($securimage->check($_POST['captcha_code']) == false) {
  // the code was incorrect
  // handle the error accordingly with your other error checking

  // or you can do something really basic like this
session_destroy();
die('The verification code you entered was incorrect. <a href="movingQuoteForm_part1.php">Go back</a> and try again.');
}

/*
foreach ($_POST as $var){
echo 'POST['.array_search($var,$_POST).'] = '.$var."<br/>";
}
*/


//start car movement

if (isset($_POST['automobile']))
	$_SESSION['automobile']="Yes";
	
if (isset($_POST['motorcycle']))
	$_SESSION['motorcycle']='Yes';

if ( isset($_POST['make']) && trim($_POST['make'])!= null && trim($_POST['make'])!= '' )
	$_SESSION['make']=$_POST['make'];

if ( isset($_POST['model']) && trim($_POST['model'])!= null && trim($_POST['model'])!= '' )
	$_SESSION['model']=$_POST['model'];

if ( isset($_POST['year']) && trim($_POST['year'])!= null && trim($_POST['year'])!= '' )
	$_SESSION['year']=$_POST['year'];

if ( isset($_POST['carType']) && $_POST['carType']!= "Select" )
	$_SESSION['carType']=$_POST['carType'];
	
if ( isset($_POST['specialDimension']) && trim($_POST['specialDimension'])!= null && trim($_POST['specialDimension'])!= '' )
	$_SESSION['specialDimension']=$_POST['specialDimension'];

if ( isset($_POST['prefMoveDate']) && $_POST['prefMoveDate']!= null && $_POST['prefMoveDate']!= '' )
	$_SESSION['prefMoveDate']=$_POST['prefMoveDate'];	
	
if ( isset($_POST['prefDeliveryDate']) && $_POST['prefDeliveryDate']!= null && $_POST['prefDeliveryDate']!= '' )
	$_SESSION['prefDeliveryDate']=$_POST['prefDeliveryDate'];	

if ( isset($_POST['packInto']) && $_POST['packInto']== 'Car' )
	$_SESSION['packInto']=$_POST['packInto'];

if ( isset($_POST['packInto']) && $_POST['packInto']== 'Container' )
	$_SESSION['packInto']=$_POST['packInto'];	

//end car movement


/* storage */
if ( $_POST['originStroageDay'] !=='0' && trim($_POST['originStroageDay'])!= null && trim($_POST['originStroageDay'])!= '')
	$_SESSION['originStroageDay']=$_POST['originStroageDay']; 

if ( $_POST['destStroageDay']!=='0' && trim($_POST['destStroageDay'])!= null && trim($_POST['destStroageDay'])!= '')
	$_SESSION['destStroageDay']=$_POST['destStroageDay'];
/* storage */

/* insurance */
if ( isset($_POST['insurance']) && $_POST['insurance'] != "None" ){
	$_SESSION['insurance']=$_POST['insurance'];	

if ( isset($_POST['insuranceValue']) && trim($_POST['insuranceValue'])!= null && trim($_POST['insuranceValue'])!= '' ){
	$_SESSION['insuranceValue']=$_POST['insuranceValue'];
	$_SESSION['insuranceCurrency']=$_POST['insuranceCurrency'];
}
}
/* end insurance */

/*
foreach ($_SESSION as $a){
echo "Session[ ";
$b = "'".array_search($a,$_SESSION)."'";
echo $b;
echo " ] = ".$a."<br/>";
}
*/

$_SESSION['page4']='Y';

header('location:movingQuoteForm_preview.php');


?>