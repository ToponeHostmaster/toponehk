<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . '/regalworld/php/securimage/securimage.php';
$securimage = new Securimage();
if ($securimage->check($_POST['captcha_code']) == false) {
  // the code was incorrect
  // handle the error accordingly with your other error checking

  // or you can do something really basic like this
  die('The verification code you entered was incorrect.  Go back and try again.');
}
?>
<?php
//enquiry@regalworld.com.hk
//
$to = "Regal World Transport System Ltd.<enquiry@regalworld.com.hk>"; 
$from = $_POST['email']; 
$subject = "Estimate Request for Sea Freight Rate"; 

$message = <<< form
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5" />
<title>Estimate Request for Sea Freight Rate</title>
</head>
<body>
<strong>To:&nbsp;&nbsp;Regal World Transport System Ltd.</strong><br/><br/>
<strong>You have below enquiry:&nbsp;&nbsp;Estimate Request for Sea Freight Rate</strong><br/><br/>
<u>General Information</u>
<br/>
<strong>Pickup Location:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
form;

$message .= $_POST['pickupLoc'];

$message .=  <<< form
<br/><br/>
<strong>Origin Loading Port*:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
form;

$message .= $_POST['loadingPort'];

$message .=  <<< form
<br/>
<strong>Country:&nbsp;&nbsp;&nbsp;&nbsp;</strong>
form;

$message .= $_POST['originCountry'];

$message .= <<<form
<br/><br/>
<strong>Destination Discharge Port*:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
form;

$message .= $_POST['dischargePort'];

$message .=  <<< form
<br/>
<strong>Country:&nbsp;&nbsp;&nbsp;&nbsp;</strong>
form;

$message .= $_POST['destCountry'];

$message .=  <<< form
<br/><br/>
form;

if (trim($_POST['placeOfDelivery'])!=null || trim($_POST['placeOfDelivery'])!=''){
$message .=  <<< form
<strong>Place of Delivery:</strong><br/>
form;

$message .= wordwrap($_POST['placeOfDelivery'],70,"<br/>\n",true);

$message .=  <<< form
<br/><br/>
form;
}

$message .=  <<< form
<strong>Commodity*:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
form;

$message .= wordwrap($_POST['commodity'],70,"<br/>\n",true);

$message .=  <<< form
<br/>
form;

$message .=  <<< form
<br/>
<strong>Cargo Type*:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
form;

$message .= $_POST['cargoType'];

$message .=  <<< form
<br/><br/>
form;

if($_POST['serviceRequest']=="FCL"){
$message .=  <<< form
<u>Service Request*<br/>FCL<br/></u>
<strong>Qty:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
form;

$message .= $_POST['Qty'];

$message .=  <<< form
<br/>
<strong>containerType:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
form;

$message .= $_POST['containerType'];

$message .=  <<< form
<br/>
form;
}
else{
$message .=  <<< form
<u>Service Request*<br/>LCL<br/></u>
form;

$message .= $_POST['KGS'];

$message .=  <<< form
&nbsp;&nbsp;&nbsp;&nbsp;
KGS<br/>
form;

$message .= $_POST['CBM'];

$message .=  <<< form
&nbsp;&nbsp;&nbsp;&nbsp;
CBM<br/>
form;
}

if ($_POST['customsClearanceAndBrokerage']=="on"||$_POST['warehouseAndDistribution']=="on"||$_POST['consolidation']=="on"||$_POST['pre-packingAndPre-lading']=="on"||$_POST['barcoding']=="on"){
$message .=  <<< form
<br/>
<strong>Value-Added services</strong><br/>
form;
if ($_POST['customsClearanceAndBrokerage']=="on")
$message .=  <<< form
<input type="checkbox" id="customsClearanceAndBrokerage" name="customsClearanceAndBrokerage" checked="checked"/>Customs clearance & Brokerage<br/>
form;
if ($_POST['warehouseAndDistribution']=="on")
$message .=  <<< form
<input type="checkbox" id="warehouseAndDistribution" name="warehouseAndDistribution" checked="checked"/>Warehouse & Distribution<br/>
form;
if ($_POST['consolidation']=="on")
$message .=  <<< form
<input type="checkbox" id="consolidation" name="consolidation" checked="checked"/>Consolidation<br/>
form;
if ($_POST['pre-packingAndPre-lading']=="on")
$message .=  <<< form
<input type="checkbox" id="pre-packingAndPre-lading" name="pre-packingAndPre-lading" checked="checked"/>Pre-packing & Pre-lading<br/>
form;
if ($_POST['barcoding']=="on")
$message .=  <<< form
<input type="checkbox" id="barcoding" name="barcoding" checked="checked"/>Bar-coding<br/>
form;
}

if($_POST['shipmentType']=="singleShipment"){
$message .=  <<< form
<br/>
<u>Shipment Type<br/></u>
<u>Single Shipment<br/></u>
<strong>Cargo Ready Date:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
form;

$message .=  $_POST['cargoReadyDate'];

$message .=  <<< form
&nbsp;&nbsp;(DD/MM/YYYY)<br/>
form;
}
else if($_POST['shipmentType']=="regularShipment"){
$message .=  <<< form
<u>Shipment Type<br/></u>
<u>Regular Shipment<br/></u>
<strong>Annual Volume:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
form;

$message .=  $_POST['annualVolume']."  ".$_POST['s_CBM'];

$message .=  <<< form
<br/>
form;
}

if (trim($_POST['additionalDetails'])!=null||trim($_POST['additionalDetails'])!=''){
$message .=  <<< form
<br/><strong>Additional details of the shipment:</strong><br/>
form;

$message .=  wordwrap($_POST['additionalDetails'],70,"<br/>\n",true);

$message .=  <<< form
<br/>
form;
}

$message .=  <<< form
<br/>
<u>Contact Information</u><br/>
<strong>Company Name*:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
form;

$message .=  $_POST['companyName'];

$message .=  <<< form
<br/>
<strong>Name*:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
form;

$message .=  "(".$_POST['prefix'].")".$_POST['name'];

$message .=  <<< form
<br/><strong>Job Title:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
form;

$message .=  $_POST['jobTitle'];

$message .=  <<< form
<br/><strong>Address:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
form;

$message .=  $_POST['address'];

$message .=  <<< form
<br/><strong>Postal Code:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
form;

$message .=  $_POST['postalCode'];

$message .=  <<< form
<br/><strong>City*:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
form;

$message .=  $_POST['city'];

$message .=  <<< form
<br/><strong>Country*:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
form;

$message .=  $_POST['country'];

$message .=  <<< form
<br/><strong>Area code:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
form;

$message .=  $_POST['areaCode'];

$message .=  <<< form
<br/><strong>Telephone No.*:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
form;

$message .=  $_POST['tel'];

$message .=  <<< form
<br/><strong>Fax No.:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
form;

$message .=  $_POST['fax'];

$message .=  <<< form
<br/><strong>Email Address*:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
form;

$message .=  $_POST['email'];

$message .=  <<< form
<br/>
</body>
</html>
form;

//end of message 
$headers  = "From: ".$_POST['email']."\r\n"; 
$headers .= "Content-type: text/html\r\n"; 


if(@mail($to,$subject,$message,$headers)){
	echo "<table border='0'><tr><td width='33%'>&nbsp;</td>";
	echo "<td width='33%'><img src='../img/photo_regalworld.png' alt='' align='center'/></td>";
	echo "<td>&nbsp;</td></tr></table><br/>";
	echo "<h1>Thank you for using our online quote system, your enquiry was sent to Regal World sales office and we will reply to your request as soon as possible.</h1>"; 
	echo "<a href='http://www.regalworld.hk/e/default_home.asp'>Back to Homepage</a>";
}
else{
	echo('<h1>Information could not be sent.</h1>');
	echo "<a href='http://www.regalworld.hk/e/default_home.asp'>Back to Homepage</a>";
}

?>
