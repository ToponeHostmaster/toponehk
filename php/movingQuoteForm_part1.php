<?php
session_start();

unset($_SESSION['prefix'],$_SESSION['name'],$_SESSION['tel'],$_SESSION['telType'],$_SESSION['email'],$_SESSION['companyName'],$_SESSION['jobTitle'],$_SESSION['fax'],$_SESSION['Time'],$_SESSION['postFix']);

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
	$("#moveDate").datepicker();
});
</script>
<title>Contact Information | moving Quote Form | Regal World Transport System Ltd.</title>
</head>

<body>

<form method="post" action="part1.php" onsubmit="return checkPart1(this);">
  <hr/>
  <div align="center"><img src="../img/regal_logo.jpg" alt="Regal World Transport System Ltd." width="700" height="151"/></div>
  <h2 class="formTitle">Moving Quote Form</h2>
  <h3 class="formInstruction">Free On Line Estimate</h3>
  <p class="formInstruction">We are Regal World Transport System Ltd. always strive to offer you the
    best customer service. To do that we require some information about your
    upcoming move. Please take the time to go over this form and complete it
    at your leisure. Your information will be received by our shipping consultant.
    They will evaluate your needs and contact you promptly with a detailed personalized
      estimate of your shipping quote. If at any point you find that you
      need some assistance please feel free to contact us at +852 25116688.<br/>
  Thank You</p>
  <hr/>
  <table class="tableStyle">
    <caption class="boldEnlarge redFont">
    Contact Information
  </caption>
  <tbody><tr>
    <td class="secondTablebgcolor tableFontStyle">
	Company Name	</td>
    <td class="tableBackgroundColor">
		<input id="companyName" name="companyName" type="text" />	</td>
  </tr>
  <tr>
    <td class="secondTablebgcolor tableFontStyle">
	Name <span class="asterisk">＊</span>	</td>
    <td class="tableBackgroundColor">
		<select id="prefix" name="prefix">
			<option value="Mr.">Mr.</option>
			<option value="Ms.">Ms.</option>
			<option value="Miss">Miss</option>
		</select>
	  <input id="name" name="name" type="text"
	   onblur="if(isNull(this.value))alert('Please fill in the Name field.');" />	  </td>
  </tr>
  <tr>
    <td class="secondTablebgcolor tableFontStyle">Job Title</td>
    <td class="tableBackgroundColor">
		<input id="jobTitle" name="jobTitle" type="text" >	</td>
  </tr>
  <tr>
    <td class="secondTablebgcolor tableFontStyle">
	Contact phone No. <span class="asterisk">＊</span>	</td>
    <td class="tableBackgroundColor">
		<input id="tel" name="tel" type="text" 
		onblur="if(isNull(this.value)||!isNum(this.value))alert('Please fill in a valid Telephone No.');">
		<input name="telType" type="radio" value="mobile" id="mobile" />mobile
		<input name="telType" type="radio" value="home" id="home" />home
		<input name="telType" type="radio" value="work" id="work" />work		</td>
  </tr>
  <tr>
    <td class="secondTablebgcolor tableFontStyle">Fax No.</td>
    <td class="tableBackgroundColor">
		<input type="text" id="fax" name="fax"
		onblur="if(!isNull(this.value)&&!isNum(this.value))alert('Please fill in a valid fax No.');"/></td>
  </tr>
  <tr>
    <td class="secondTablebgcolor tableFontStyle">
	E-mail Address <span class="asterisk">＊</span>	</td>
    <td class="tableBackgroundColor">
		<input id="email" name="email" onblur="validEmailAddress(this.value);" type="text"/>	</td>
  </tr>
    <tr>
      <td class="secondTablebgcolor tableFontStyle">Best time to contact you</td>
      <td class="tableBackgroundColor"><input type="text" id="Time" name="Time" size="6"/>
        <select id="postFix" name="postFix">
          <option>am</option>
          <option>pm</option>
        </select>
(hh:mm) </td>
    </tr>
</tbody>
</table>
<br/>
<hr/>
<br/>
	<div style=" padding-left:5px; padding-right:10px;text-align:justify; text-justify:distribute-all-lines;">
	<input class="button" type="button" disabled="disabled" value="Back"/>
	<input class="button" type="submit" value="Next"/>
	</div>
</form>
</body>
</html>