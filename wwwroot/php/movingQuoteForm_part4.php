<?php
session_start();

if (!isset($_SESSION['page1']))
header('location:movingQuoteForm_part1.php');
if (!isset($_SESSION['page2']))
header('location:movingQuoteForm_part2.php');
if (!isset($_SESSION['page3']))
header('location:movingQuoteForm_part3.php');

unset(
$_SESSION['automobile'],$_SESSION['motorcycle'],
$_SESSION['make'],$_SESSION['model'],
$_SESSION['year'],$_SESSION['carType'],
$_SESSION['specialDimension'],$_SESSION['prefMoveDate'],
$_SESSION['prefDeliveryDate'],$_SESSION['packInto'],
$_SESSION['originStroageDay'],$_SESSION['destStroageDay'],
$_SESSION['insurance'],$_SESSION['insuranceValue'],
$_SESSION['insuranceCurrency']
);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/jquery-ui.css" type="text/css" media="all" />
<link rel="stylesheet" href="../css/eform.css" type="text/css" />
<script type="text/javascript" src="../js/eformchecking.js"></script>
<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../js/ui.core.js"></script>
<script type="text/javascript" src="../js/ui.datepicker.js"></script>
<script type="text/javascript">
$(function() {
	$("#prefMoveDate").datepicker();
});
$(function() {
	$("#prefDeliveryDate").datepicker();
});
</script>
<title>General Information | moving Quote Form | Regal World Transport System Ltd.</title>
</head>

<body>
<hr/>
<br/><!-- onsubmit="return checkPart4(this);"-->
<form action="part4.php" method="post">
<table width="100%" border="0" cellspacing="1" cellpadding="3">
  <caption align="left" class="firstTableTitle">
    Car Movement
  </caption>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">Please provide the following
      information if you are shipping a car </td>
    <td class="tableBackgroundColor" width="50%">
		<input type="checkbox" id="automobile" name="automobile"/>Automobile
		<input type="checkbox" id="motorcycle" name="motorcycle"/>Motorcycle
	</td>
  </tr>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">Make</td>
    <td class="tableBackgroundColor">
		<input type="text" id="make" name="make"/>	</td>
  </tr>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">Model</td>
    <td class="tableBackgroundColor"><input type="text" id="model" name="model"/></td>
  </tr>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">Year <br /></td>
    <td class="tableBackgroundColor">
	  <input type="text" id="year" name="year" maxlength="4" onblur="if(!isNull(this.value)&&!isNum(this.value))alert('Pls enter a valid number for this field');"/></td>
  </tr>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">Type<br /></td>
    <td class="tableBackgroundColor">
		<select id="carType" name="carType">
		  <option selected="selected">Select</option>
		  <option>Brand new</option>
		  <option>Own used</option>
		</select>
	</td>
  </tr>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">Special dimensions </td>
    <td class="tableBackgroundColor">
		<input type="text" id="specialDimension" name="specialDimension"/>	</td>
  </tr>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">Pref. move date</td>
    <td class="tableBackgroundColor">
		<input type="text" id="prefMoveDate" name="prefMoveDate"/>	</td>
  </tr>
  <tr>
    <td valign="top" class="firstTableFirstColum tableFontStyle">Pref. delivery
      date</td>
    <td class="tableBackgroundColor">
		<input type="text" id="prefDeliveryDate" name="prefDeliveryDate"/>	</td>
  </tr>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">
	If Containerised, do you wish to pack other items into the car or container?	</td>
    <td class="tableBackgroundColor">
		<input type="radio" id="car" name="packInto" value="Car"/>Car
        <input type="radio" id="container" name="packInto" value="Container"/>Container	</td>
    </tr>
</table>
<br/>
<hr/>
<br/>
<table width="100%" border="0" cellspacing="1" cellpadding="3">
  <caption align="left" class="firstTableTitle">
    Storage
  </caption>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">
      Storage requested for :	</td>
    <td class="tableBackgroundColor" width="50%">
		<input type="text" id="originStroageDay" name="originStroageDay" size="6" value="0" onblur="if(!validDaysInterval(this.value))alert('You cannot keep storage more than 360 days.');if(!isNum(this.value))alert('Pls enter a number within 360.');"/>
		days at origin	</td>
  </tr>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">
      Storage requested for :	</td>
    <td class="tableBackgroundColor">
		<input type="text" id="destStroageDay" name="destStroageDay" size="6" value="0" onblur="if(!validDaysInterval(this.value))alert('You cannot keep storage more than 360 days.');if(!isNum(this.value))alert('Pls enter a number within 360.');"/>
		days at destination	</td>
  </tr>
</table>
<br/>
<hr/>
<br/>
<table width="100%" border="0" cellspacing="1" cellpadding="3">
  <caption align="left" class="firstTableTitle">
    Insurance
  </caption>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">Insurance required? </td>
    <td class="tableBackgroundColor" width="50%">
		<input type="radio" id="full" name="insurance" value="Full"/>Full
        <input type="radio" id="totalLoss" name="insurance" value="Total Loss"/>Total Loss  
        <input type="radio" id="none" name="insurance" value="None" checked="checked"/>None	</td>
  </tr>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">Insurance Value </td>
    <td class="tableBackgroundColor">
		<select name="insuranceCurrency" id="insuranceCurrency">
			<option selected="selected" value="HKD">HKD</option>
			<option value="AUD">AUD</option>
			<option value="USD">USD</option>
			<option value="GBP">GBP </option>
			<option value="EUR">EUR</option>
			<option value="JPY">JPY</option>
			<option value="Other">Other</option>
		</select>
      	<input type="text" id="insuranceValue" name="insuranceValue" onblur="if(!isNum(this.value))alert('Pls enter a valid number.');"/>
	</td>
  </tr>
</table>
<br/>
<hr/>
<br/>
<table>
  <caption align="left" class="firstTableTitle">
    Word Verification
  </caption>
	<tr>
		<td class="verification tableFontStyle">Word Verification<span class="asterisk"></span></td>
		<td class="tableBackgroundColor">
		Type the characters you see in the picture below.<br />
		<img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" />
		<a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">Reload Image</a><br/>
		<input type="text" name="captcha_code" size="10" maxlength="6" 
		onblur="if(isNull(this.value))alert('Please enter the characters.');"/>
		</td>
	</tr>
</table>
<br/>
<hr/>
<br/>
<div style="padding-bottom:20px;">
Thank you for your kind attention and please contact me as soon as possible with your estimates.
</div>
	<div style=" padding-left:5px; padding-right:10px;text-align:justify; text-justify:distribute-all-lines;">
	<input class="button" type="button" value="Back" onclick="window.location.href='movingQuoteForm_part3.php'"/>
	<input class="button" type="submit" value="Preview"/>
	</div>
</form>
</body>
</html>
