<?php

session_start();
if (!isset($_SESSION['page1']))
header('location:movingQuoteForm_part1.php');

unset($_SESSION['page2']);
unset(
$_SESSION['moveDate'],$_SESSION['originCity'],
$_SESSION['destCity'],$_SESSION['originCountry'],
$_SESSION['destCountry'],$_SESSION['method'],
$_SESSION['packing'],$_SESSION['unpacking'],
$_SESSION['shipBy'],$_SESSION['moveIs'],
$_SESSION['serviceReq'],$_SESSION['loadRestrict'],
$_SESSION['unloadRestrict'],$_SESSION['originAddress'],
$_SESSION['destAddress'],$_SESSION['originState'],
$_SESSION['destState'],$_SESSION['originZip'],
$_SESSION['destZip'],$_SESSION['originElevator'],
$_SESSION['destElevator'],$_SESSION['originFloor'],
$_SESSION['destFloor'],$_SESSION['supplyMaterial'],
$_SESSION['budget']
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
	$("#moveDate").datepicker();
});
</script>
<title>General Information | moving Quote Form | Regal World Transport System Ltd.</title>
</head>

<body>
<hr/>
<br/>
<form action="part2.php" method="post" onsubmit="return checkPart2(this);">
<table width="100%" border="0" cellspacing="1" cellpadding="3">
  <caption align="left" class="firstTableTitle">
    General Information
  </caption>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">This shipment is by <span class="asterisk">＊</span> </td>
    <td colspan="2" class="tableBackgroundColor">
		<input name="shipBy" type="radio" value="Sea" />Sea
      <input name="shipBy" type="radio" value="Air" />Air
	  <input name="shipBy" type="radio" value="Land" />Land
	</td>
  </tr>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">This move is... <span class="asterisk">＊</span> </td>
    <td colspan="2" class="tableBackgroundColor">
		<input name="moveIs" type="radio" id="corporate" value="Corporate" />Corporate
      <input name="moveIs" type="radio" id="personal" value="Personal" />Personal	</td>
  </tr>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">This shipment is<span class="asterisk">＊</span></td>
    <td colspan="2" class="tableBackgroundColor">
		<input name="serviceReq" type="radio" id="doorToDoor" value="Door To Door" />Door to Door
	    <input name="serviceReq" type="radio" id="doorToPort" value="Door To Port" />Door to Port	
		<input name="serviceReq" type="radio" id="portToDoor" value="Port To Door" />Port	to Door 
      <input name="serviceReq" type="radio" id="portToPort" value="Port To Port" />Port to Port	</td>
  </tr>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">Is there any restricted access for loading <br /></td>
    <td colspan="2" class="tableBackgroundColor">
		<input type="text" id="loadRestrict" name="loadRestrict"/>
	  (if no keep it blank, otherwise please specify)	</td>
  </tr>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">Is there any restricted access
      for unloading<br /></td>
    <td colspan="2" class="tableBackgroundColor">
		<input type="text" id="unloadRestrict" name="unloadRestrict"/>
	  (if no keep it blank, otherwise please specify) </td>
  </tr>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">Estimated move date:<span class="asterisk">＊</span></td>
    <td colspan="2" class="tableBackgroundColor">
<input type="text" id="moveDate" name="moveDate"/> 
(DD/MM/YYYY)	</td>
    </tr>
  <tr>
    <td class="firstTableFirstColum">&nbsp;</td>
    <td class="tableBackgroundColor">Origin Address </td>
    <td class="tableBackgroundColor">Destination Address </td>
  </tr>
  <tr>
    <td valign="top" class="firstTableFirstColum tableFontStyle">Address:</td>
    <td class="tableBackgroundColor"><textarea wrap="virtual" id="originAddress" name="originAddress" rows="4" cols="40"></textarea></td>
    <td class="tableBackgroundColor">
	  <textarea wrap="virtual" rows="4" cols="40" id="destAddress" name="destAddress"></textarea>	</td>
  </tr>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">City:<span class="asterisk">＊</span></td>
    <td class="tableBackgroundColor"><input type="text" id="originCity" name="originCity" 
	onblur="if(isNull(this.value))alert('Please specify the origin city.');"/></td>
    <td class="tableBackgroundColor"><input type="text" id="destCity" name="destCity" 
	onblur="if(isNull(this.value))alert('Please specify the destination city.');"/></td>
  </tr>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">State:</td>
    <td class="tableBackgroundColor">
		<select id="originState" name="originState">
			<option selected="selected">N/A</option>
			<option>Alaska</option>
			<option>Alabama</option>
			<option>Arkansas</option>
			<option>Arizona</option>
			<option>California</option>
			<option>Colorado</option>
			<option>Connecticut</option>
			<option>D.C. Washington</option>
			<option>Delaware</option>
			<option>Florida</option>
			<option>Georgia</option>
			<option>Guam</option>
			<option>Hawaii</option>
			<option>Idaho</option>
			<option>Illinois</option>
			<option>Indiana</option>
			<option>Iowa</option>
			<option>Kansas</option>
			<option>Kentucky</option>
			<option>Louisiana</option>
			<option>Maine</option>
			<option>Maryland</option>
			<option>Massachusetts</option>
			<option>Michigan</option>
			<option>Minnesota</option>
			<option>Mississippi</option>
			<option>Missouri</option>
			<option>Montana</option>
			<option>Nebraska</option>
			<option>Nevada</option>
			<option>New Hampshire</option>
			<option>New Jersey</option>
			<option>New Mexico</option>
			<option>New York</option>
			<option>North Carolina</option>
			<option>North Dakota</option>
			<option>Ohio</option>
			<option>Oklahoma</option>
			<option>Oregon</option>
			<option>Pennsylvania</option>
			<option>Rhode Island</option>
			<option>South Carolina</option>
			<option>South Dakota</option>
			<option>Tennessee</option>
			<option>Texas</option>
			<option>Utah</option>
			<option>Vermont</option>
			<option>Virginia</option>
			<option>Washington</option>
			<option>West Virginia</option>
			<option>Wisconsin</option>
			<option>Wyoming</option>
	  </select>	</td>
	<td class="tableBackgroundColor">
		<select id="destState" name="destState">
			<option selected="selected">N/A</option>
			<option>Alaska</option>
			<option>Alabama</option>
			<option>Arkansas</option>
			<option>Arizona</option>
			<option>California</option>
			<option>Colorado</option>
			<option>Connecticut</option>
			<option>D.C. Washington</option>
			<option>Delaware</option>
			<option>Florida</option>
			<option>Georgia</option>
			<option>Guam</option>
			<option>Hawaii</option>
			<option>Idaho</option>
			<option>Illinois</option>
			<option>Indiana</option>
			<option>Iowa</option>
			<option>Kansas</option>
			<option>Kentucky</option>
			<option>Louisiana</option>
			<option>Maine</option>
			<option>Maryland</option>
			<option>Massachusetts</option>
			<option>Michigan</option>
			<option>Minnesota</option>
			<option>Mississippi</option>
			<option>Missouri</option>
			<option>Montana</option>
			<option>Nebraska</option>
			<option>Nevada</option>
			<option>New Hampshire</option>
			<option>New Jersey</option>
			<option>New Mexico</option>
			<option>New York</option>
			<option>North Carolina</option>
			<option>North Dakota</option>
			<option>Ohio</option>
			<option>Oklahoma</option>
			<option>Oregon</option>
			<option>Pennsylvania</option>
			<option>Rhode Island</option>
			<option>South Carolina</option>
			<option>South Dakota</option>
			<option>Tennessee</option>
			<option>Texas</option>
			<option>Utah</option>
			<option>Vermont</option>
			<option>Virginia</option>
			<option>Washington</option>
			<option>West Virginia</option>
			<option>Wisconsin</option>
			<option>Wyoming</option>
	  </select>	</td>
  </tr>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">Country:<span class="asterisk">＊</span></td>
    <td class="tableBackgroundColor">
		<select id="originCountry" name="originCountry">
			<option>USA</option>
			<option>Afghanistan</option>
			<option>Albania</option>
			<option>Algeria</option>
			<option>American Samoa</option>
			<option>Andorra</option>
			<option>Angola</option>
			<option>Anguilla</option>
			<option>Antarctica</option>
			<option>Antigua And Barbuda</option>
			<option>Argentina</option>
			<option>Armenia</option>
			<option>Aruba</option>
			<option>Australia</option>
			<option>Austria</option>
			<option>Azerbaijan</option>
			<option>Bahamas</option>
			<option>Bahrain</option>
			<option>Bangladesh</option>
			<option>Barbados</option>
			<option>Belarus</option>
			<option>Belgium</option>
			<option>Belize</option>
			<option>Benin</option>
			<option>Bermuda</option>
			<option>Bhutan</option>
			<option>Bolivia</option>
			<option>Bosnia and Herzegovina</option>
			<option>Botswana</option>
			<option>Bouvet Island</option>
			<option>Brazil</option>
			<option>Brunei</option>
			<option>Bulgaria</option>
			<option>Burkina Faso</option>
			<option>Burundi</option>
			<option>Cambodia</option>
			<option>Cameroon</option>
			<option>Canada</option>
			<option>Cape Verde</option>
			<option>Cayman Islands</option>
			<option>Central African Republic</option>
			<option>Chad</option>
			<option>Chile</option>
			<option>China</option>
			<option>Christmas Island</option>
			<option>Cocos (Keeling) Islands</option>
			<option>Colombia</option>
			<option>Comoros</option>
			<option>Congo</option>
			<option>Congo</option>
			<option>Cook Islands</option>
			<option>Costa Rica</option>
			<option>Cote D'Ivoire (Ivory Coast)</option>
			<option>Croatia (Hrvatska)</option>
			<option>Cuba</option>
			<option>Cyprus</option>
			<option>Czech Republic</option>
			<option>Denmark</option>
			<option>Djibouti</option>
			<option>Dominica</option>
			<option>Dominican Republic</option>
			<option>East Timor</option>
			<option>Ecuador</option>
			<option>Egypt</option>
			<option>El Salvador</option>
			<option>Equatorial Guinea</option>
			<option>Eritrea</option>
			<option>Estonia</option>
			<option>Ethiopia</option>
			<option>Falkland Islands</option>
			<option>Faroe Islands</option>
			<option>Fiji Islands</option>
			<option>Finland</option>
			<option>France</option>
			<option>French Guiana</option>
			<option>French Polynesia</option>
			<option>Gabon</option>
			<option>Gambia</option>
			<option>Georgia</option>
			<option>Germany</option>
			<option>Ghana</option>
			<option>Gibraltar</option>
			<option>Greece</option>
			<option>Greenland</option>
			<option>Grenada</option>
			<option>Guadeloupe</option>
			<option>Guam</option>
			<option>Guatemala</option>
			<option>Guinea</option>
			<option>Guinea-Bissau</option>
			<option>Guyana</option>
			<option>Haiti</option>
			<option>Honduras</option>
			<option selected="selected">Hong Kong S.A.R.</option>
			<option>Hungary</option>
			<option>Iceland</option>
			<option>India</option>
			<option>Indonesia</option>
			<option>Iran</option>
			<option>Iraq</option>
			<option>Ireland</option>
			<option>Israel</option>
			<option>Italy</option>
			<option>Jamaica</option>
			<option>Japan</option>
			<option>Jordan</option>
			<option>Kazakhstan</option>
			<option>Kenya</option>
			<option>Kiribati</option>
			<option>Korea</option>
			<option>Korea, North</option>
			<option>Kuwait</option>
			<option>Kyrgyzstan</option>
			<option>Laos</option>
			<option>Latvia</option>
			<option>Lebanon</option>
			<option>Lesotho</option>
			<option>Liberia</option>
			<option>Libya</option>
			<option>Liechtenstein</option>
			<option>Lithuania</option>
			<option>Luxembourg</option>
			<option>Macau S.A.R.</option>
			<option>Macedonia</option>
			<option>Madagascar</option>
			<option>Malawi</option>
			<option>Malaysia</option>
			<option>Maldives</option>
			<option>Mali</option>
			<option>Malta</option>
			<option>Marshall Islands</option>
			<option>Martinique</option>
			<option>Mauritania</option>
			<option>Mauritius</option>
			<option>Mayotte</option>
			<option>Mexico</option>
			<option>Micronesia</option>
			<option>Moldova</option>
			<option>Monaco</option>
			<option>Mongolia</option>
			<option>Montserrat</option>
			<option>Morocco</option>
			<option>Mozambique</option>
			<option>Myanmar</option>
			<option>Namibia</option>
			<option>Nauru</option>
			<option>Nepal</option>
			<option>Netherlands Antilles</option>
			<option>Netherlands</option>
			<option>New Caledonia</option>
			<option>New Zealand</option>
			<option>Nicaragua</option>
			<option>Niger</option>
			<option>Nigeria</option>
			<option>Niue</option>
			<option>Norfolk Island</option>
			<option>Northern Mariana Islands</option>
			<option>Norway</option>
			<option>Oman</option>
			<option>Pakistan</option>
			<option>Palau</option>
			<option>Panama</option>
			<option>Papua new Guinea</option>
			<option>Paraguay</option>
			<option>Peru</option>
			<option>Philippines</option>
			<option>Pitcairn Island</option>
			<option>Poland</option>
			<option>Portugal</option>
			<option>Puerto Rico</option>
			<option>Qatar</option>
			<option>Reunion</option>
			<option>Romania</option>
			<option>Russia</option>
			<option>Rwanda</option>
			<option>Saint Helena</option>
			<option>Saint Kitts And Nevis</option>
			<option>Saint Lucia</option>
			<option>Samoa</option>
			<option>San Marino</option>
			<option>Sao Tome and Principe</option>
			<option>Saudi Arabia</option>
			<option>Senegal</option>
			<option>Seychelles</option>
			<option>Sierra Leone</option>
			<option>Singapore</option>
			<option>Slovakia</option>
			<option>Slovenia</option>
			<option>Solomon Islands</option>
			<option>Somalia</option>
			<option>South Africa</option>
			<option>Spain</option>
			<option>Sri Lanka</option>
			<option>Sudan</option>
			<option>Suriname</option>
			<option>Swaziland</option>
			<option>Sweden</option>
			<option>Switzerland</option>
			<option>Syria</option>
			<option>Taiwan</option>
			<option>Tajikistan</option>
			<option>Tanzania</option>
			<option>Thailand</option>
			<option>Togo</option>
			<option>Tokelau</option>
			<option>Tonga</option>
			<option>Trinidad And Tobago</option>
			<option>Tunisia</option>
			<option>Turkey</option>
			<option>Turkmenistan</option>
			<option>Turks And Caicos Islands</option>
			<option>Tuvalu</option>
			<option>Uganda</option>
			<option>Ukraine</option>
			<option>United Arab Emirates</option>
			<option>United Kingdom</option>
			<option>United States</option>
			<option>Uruguay</option>
			<option>Uzbekistan</option>
			<option>Vanuatu</option>
			<option>Vatican City State</option>
			<option>Venezuela</option>
			<option>Vietnam</option>
			<option>Virgin Islands (British)</option>
			<option>Virgin Islands (US)</option>
			<option>Wallis And Futuna Islands</option>
			<option>Yemen</option>
			<option>Yugoslavia</option>
			<option>Zambia</option>
			<option>Zimbabwe</option>
	  </select>	</td>
    <td class="tableBackgroundColor">
		<select id="destCountry" name="destCountry">
			<option>USA</option>
			<option>Afghanistan</option>
			<option>Albania</option>
			<option>Algeria</option>
			<option>American Samoa</option>
			<option>Andorra</option>
			<option>Angola</option>
			<option>Anguilla</option>
			<option>Antarctica</option>
			<option>Antigua And Barbuda</option>
			<option>Argentina</option>
			<option>Armenia</option>
			<option>Aruba</option>
			<option>Australia</option>
			<option>Austria</option>
			<option>Azerbaijan</option>
			<option>Bahamas</option>
			<option>Bahrain</option>
			<option>Bangladesh</option>
			<option>Barbados</option>
			<option>Belarus</option>
			<option>Belgium</option>
			<option>Belize</option>
			<option>Benin</option>
			<option>Bermuda</option>
			<option>Bhutan</option>
			<option>Bolivia</option>
			<option>Bosnia and Herzegovina</option>
			<option>Botswana</option>
			<option>Bouvet Island</option>
			<option>Brazil</option>
			<option>Brunei</option>
			<option>Bulgaria</option>
			<option>Burkina Faso</option>
			<option>Burundi</option>
			<option>Cambodia</option>
			<option>Cameroon</option>
			<option>Canada</option>
			<option>Cape Verde</option>
			<option>Cayman Islands</option>
			<option>Central African Republic</option>
			<option>Chad</option>
			<option>Chile</option>
			<option>China</option>
			<option>Christmas Island</option>
			<option>Cocos (Keeling) Islands</option>
			<option>Colombia</option>
			<option>Comoros</option>
			<option>Congo</option>
			<option>Congo</option>
			<option>Cook Islands</option>
			<option>Costa Rica</option>
			<option>Cote D'Ivoire (Ivory Coast)</option>
			<option>Croatia (Hrvatska)</option>
			<option>Cuba</option>
			<option>Cyprus</option>
			<option>Czech Republic</option>
			<option>Denmark</option>
			<option>Djibouti</option>
			<option>Dominica</option>
			<option>Dominican Republic</option>
			<option>East Timor</option>
			<option>Ecuador</option>
			<option>Egypt</option>
			<option>El Salvador</option>
			<option>Equatorial Guinea</option>
			<option>Eritrea</option>
			<option>Estonia</option>
			<option>Ethiopia</option>
			<option>Falkland Islands</option>
			<option>Faroe Islands</option>
			<option>Fiji Islands</option>
			<option>Finland</option>
			<option>France</option>
			<option>French Guiana</option>
			<option>French Polynesia</option>
			<option>Gabon</option>
			<option>Gambia</option>
			<option>Georgia</option>
			<option>Germany</option>
			<option>Ghana</option>
			<option>Gibraltar</option>
			<option>Greece</option>
			<option>Greenland</option>
			<option>Grenada</option>
			<option>Guadeloupe</option>
			<option>Guam</option>
			<option>Guatemala</option>
			<option>Guinea</option>
			<option>Guinea-Bissau</option>
			<option>Guyana</option>
			<option>Haiti</option>
			<option>Honduras</option>
			<option selected="selected">Hong Kong S.A.R.</option>
			<option>Hungary</option>
			<option>Iceland</option>
			<option>India</option>
			<option>Indonesia</option>
			<option>Iran</option>
			<option>Iraq</option>
			<option>Ireland</option>
			<option>Israel</option>
			<option>Italy</option>
			<option>Jamaica</option>
			<option>Japan</option>
			<option>Jordan</option>
			<option>Kazakhstan</option>
			<option>Kenya</option>
			<option>Kiribati</option>
			<option>Korea</option>
			<option>Korea, North</option>
			<option>Kuwait</option>
			<option>Kyrgyzstan</option>
			<option>Laos</option>
			<option>Latvia</option>
			<option>Lebanon</option>
			<option>Lesotho</option>
			<option>Liberia</option>
			<option>Libya</option>
			<option>Liechtenstein</option>
			<option>Lithuania</option>
			<option>Luxembourg</option>
			<option>Macau S.A.R.</option>
			<option>Macedonia</option>
			<option>Madagascar</option>
			<option>Malawi</option>
			<option>Malaysia</option>
			<option>Maldives</option>
			<option>Mali</option>
			<option>Malta</option>
			<option>Marshall Islands</option>
			<option>Martinique</option>
			<option>Mauritania</option>
			<option>Mauritius</option>
			<option>Mayotte</option>
			<option>Mexico</option>
			<option>Micronesia</option>
			<option>Moldova</option>
			<option>Monaco</option>
			<option>Mongolia</option>
			<option>Montserrat</option>
			<option>Morocco</option>
			<option>Mozambique</option>
			<option>Myanmar</option>
			<option>Namibia</option>
			<option>Nauru</option>
			<option>Nepal</option>
			<option>Netherlands Antilles</option>
			<option>Netherlands</option>
			<option>New Caledonia</option>
			<option>New Zealand</option>
			<option>Nicaragua</option>
			<option>Niger</option>
			<option>Nigeria</option>
			<option>Niue</option>
			<option>Norfolk Island</option>
			<option>Northern Mariana Islands</option>
			<option>Norway</option>
			<option>Oman</option>
			<option>Pakistan</option>
			<option>Palau</option>
			<option>Panama</option>
			<option>Papua new Guinea</option>
			<option>Paraguay</option>
			<option>Peru</option>
			<option>Philippines</option>
			<option>Pitcairn Island</option>
			<option>Poland</option>
			<option>Portugal</option>
			<option>Puerto Rico</option>
			<option>Qatar</option>
			<option>Reunion</option>
			<option>Romania</option>
			<option>Russia</option>
			<option>Rwanda</option>
			<option>Saint Helena</option>
			<option>Saint Kitts And Nevis</option>
			<option>Saint Lucia</option>
			<option>Samoa</option>
			<option>San Marino</option>
			<option>Sao Tome and Principe</option>
			<option>Saudi Arabia</option>
			<option>Senegal</option>
			<option>Seychelles</option>
			<option>Sierra Leone</option>
			<option>Singapore</option>
			<option>Slovakia</option>
			<option>Slovenia</option>
			<option>Solomon Islands</option>
			<option>Somalia</option>
			<option>South Africa</option>
			<option>Spain</option>
			<option>Sri Lanka</option>
			<option>Sudan</option>
			<option>Suriname</option>
			<option>Swaziland</option>
			<option>Sweden</option>
			<option>Switzerland</option>
			<option>Syria</option>
			<option>Taiwan</option>
			<option>Tajikistan</option>
			<option>Tanzania</option>
			<option>Thailand</option>
			<option>Togo</option>
			<option>Tokelau</option>
			<option>Tonga</option>
			<option>Trinidad And Tobago</option>
			<option>Tunisia</option>
			<option>Turkey</option>
			<option>Turkmenistan</option>
			<option>Turks And Caicos Islands</option>
			<option>Tuvalu</option>
			<option>Uganda</option>
			<option>Ukraine</option>
			<option>United Arab Emirates</option>
			<option>United Kingdom</option>
			<option>United States</option>
			<option>Uruguay</option>
			<option>Uzbekistan</option>
			<option>Vanuatu</option>
			<option>Vatican City State</option>
			<option>Venezuela</option>
			<option>Vietnam</option>
			<option>Virgin Islands (British)</option>
			<option>Virgin Islands (US)</option>
			<option>Wallis And Futuna Islands</option>
			<option>Yemen</option>
			<option>Yugoslavia</option>
			<option>Zambia</option>
			<option>Zimbabwe</option>
	  </select>	</td>
  </tr>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">Zip Code: </td>
    <td class="tableBackgroundColor"><input type="text" size="10" id="originZip" name="originZip"/></td>
    <td class="tableBackgroundColor"><input type="text" size="10" id="destZip" name="destZip"/></td>
  </tr>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">Elevator:</td>
    <td class="tableBackgroundColor">
		<input type="radio" id="yes" name="originElevator" value="Yes"/>
		Yes
		<input type="radio" id="no" name="originElevator" value="No"/>
	  No	</td>
    <td class="tableBackgroundColor">
		<input type="radio" id="yes" name="destElevator" value="Yes"/>
		Yes
		<input type="radio" id="no" name="destElevator" value="No"/>
	  No	</td>
  </tr>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">No. of floors: </td>
    <td class="tableBackgroundColor"><input type="text" size="6" id="originFloor" name="originFloor"/></td>
    <td class="tableBackgroundColor"><input type="text" size="6" id="destFloor" name="destFloor"/></td>
  </tr>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">Will you need: </td>
    <td colspan="2" class="tableBackgroundColor">
		<input type="checkbox" id="packing" name="packing"/>
		Packing
		<input type="checkbox" id="unpacking" name="unpacking"/>
	  Unpacking		</td>
    </tr>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">Supply of packing materials and boxes required? </td>
    <td colspan="2" class="tableBackgroundColor">
		<input type="radio" id="yes" name="supplyMaterial" value="Yes"/>Yes
		<input type="radio" id="no" name="supplyMaterial" value="No"/>No	</td>
  </tr>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">My budget for this shipment is no more than </td>
    <td colspan="2" class="tableBackgroundColor">
		<select name="budgetCurrency" id="budgetCurrency">
			<option selected="selected" value="HKD">HKD</option>
			<option value="AUD">AUD</option>
			<option value="USD">USD</option>
			<option value="GBP">GBP </option>
			<option value="EUR">EUR</option>
			<option value="JPY">JPY</option>
			<option value="Other">Other</option>
      	</select>
      	<input type="text" id="budget" name="budget" onblur="if(!isNum(this.value))alert('Pls enter a valid number.');"/>
	</td>
  </tr>
  <tr>
    <td class="firstTableFirstColum tableFontStyle">Where Did You Find Us? </td>
    <td colspan="2" class="tableBackgroundColor">
		<select id="method" name="method">
			<option>Recommendation from friend</option>
			<option>Google</option>
			<option>HKTDC</option>
			<option>Internet</option>
			<option>MoversPOE</option>
			<option>Shipping Gazette</option>
			<option>US Trade Department</option>
			<option>Yahoo</option>
			<option>Yellow page</option>
			<option>Others</option>
	  </select>	</td>
   </tr>
</table>
<br/>
<hr/>
<br/>
	<div style=" padding-left:5px; padding-right:10px;text-align:justify; text-justify:distribute-all-lines;">
	<input class="button" onclick="window.location.href='movingQuoteForm_part1.php'" type="button" value="Back"/>
	<input class="button" type="submit" value="Next"/>
	</div>
</form>
</body>
</html>
