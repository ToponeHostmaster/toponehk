<?php
session_start();

$_SESSION['moveDate']=$_POST['moveDate'];
$_SESSION['originCity']=$_POST['originCity'];
$_SESSION['destCity']=$_POST['destCity'];
$_SESSION['originCountry']=$_POST['originCountry'];
$_SESSION['destCountry']=$_POST['destCountry'];
$_SESSION['method']=$_POST['method'];
$_SESSION['shipBy']=$_POST['shipBy'];
$_SESSION['moveIs']=$_POST['moveIs'];
$_SESSION['serviceReq']=$_POST['serviceReq'];

if ( $_POST['packing'] == 'on' )
	$_SESSION['packing']="Yes";
else 
	$_SESSION['packing']="No";
	
if ( $_POST['originFloor'] == 'on' )
	$_SESSION['unpacking']='Yes';
else 
	$_SESSION['unpacking']="No";



if ( trim($_POST['loadRestrict'])!= null && trim($_POST['loadRestrict'])!= '' )
	$_SESSION['loadRestrict']=$_POST['loadRestrict'];
if ( trim($_POST['unloadRestrict'])!= null && trim($_POST['unloadRestrict'])!= '' )
	$_SESSION['unloadRestrict']=$_POST['unloadRestrict'];

if ( trim($_POST['originAddress'])!= null && trim($_POST['originAddress'])!= '' )
	$_SESSION['originAddress']=$_POST['originAddress'];	
if ( trim($_POST['destAddress'])!= null && trim($_POST['destAddress'])!= '' )
	$_SESSION['destAddress']=$_POST['destAddress'];	

if ( trim($_POST['originState'])!= null && trim($_POST['originState'])!= '' && $_POST['originState']!=='N/A' )
	$_SESSION['originState']=$_POST['originState'];	
if ( trim($_POST['destState'])!= null && trim($_POST['destState'])!= '' && $_POST['originState']!=='N/A')
	$_SESSION['destState']=$_POST['destState'];	

if ( trim($_POST['originZip'])!= null && trim($_POST['originZip'])!= '' )
	$_SESSION['originZip']=$_POST['originZip'];	
if ( trim($_POST['destZip'])!= null && trim($_POST['destZip'])!= '' )
	$_SESSION['destZip']=$_POST['destZip'];	
	
if ( trim($_POST['originElevator'])!= null && trim($_POST['originElevator'])!= '' )
	$_SESSION['originElevator']=$_POST['originElevator'];	
if ( trim($_POST['destElevator'])!= null && trim($_POST['destElevator'])!= '' )
	$_SESSION['destElevator']=$_POST['destElevator'];	

if ( trim($_POST['originFloor'])!= null && trim($_POST['originFloor'])!= '' )
	$_SESSION['originFloor']=$_POST['originFloor'];	
if ( trim($_POST['destFloor'])!= null && trim($_POST['destFloor'])!= '' )
	$_SESSION['destFloor']=$_POST['destFloor'];	

if ( trim($_POST['supplyMaterial'])!= null && trim($_POST['supplyMaterial'])!= '' )
	$_SESSION['supplyMaterial']=$_POST['supplyMaterial'];

if ( trim($_POST['budget'])!= null && trim($_POST['budget'])!= '' ){
	$_SESSION['budget']=$_POST['budget'];
	$_SESSION['budgetCurrency']=$_POST['budgetCurrency'];
}

$_SESSION['page2']='Y';

header('location:movingQuoteForm_part3.php');


?>