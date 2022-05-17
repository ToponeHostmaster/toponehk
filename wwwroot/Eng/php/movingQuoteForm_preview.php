<?php
session_start();
/*
$msg =  <<< form
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Moving Quote Form | Preview</title>
<link rel="stylesheet" href="../css/eform.css" type="text/css" />
<script type="text/javascript" src="../js/eformchecking.js"></script>

<style type="text/css">
<!--
td{
text-align:left;
vertical-align:middle;
}
-->
</style>
</head>

<body>
form;
*/
/**********  part1  *************/

$msg = '<h3><u>Contact Information</u></h3>';

if (isset($_SESSION['companyName']))
$msg .= '<strong>Company Name:&nbsp;&nbsp;</strong>'.wordwrap($_SESSION['companyName'],70,"<br/>\n",true).'<br/><br/>';

$msg .= '<strong>Name*:&nbsp;&nbsp;</strong>'.$_SESSION['prefix'].wordwrap($_SESSION['name'],70,"<br/>\n",true).'<br/><br/>';

if (isset($_SESSION['jobTitle']))
$msg .= '<strong>Job Title:&nbsp;&nbsp;</strong>'.wordwrap($_SESSION['jobTitle'],70,"<br/>\n",true).'<br/><br/>';

$msg .= '<strong>Contact phone No.*:&nbsp;&nbsp;</strong>'.$_SESSION['tel'].' ('.$_SESSION['telType'].')<br/><br/>';

if (isset($_SESSION['fax']))
$msg .= '<strong>Fax No.:&nbsp;&nbsp;</strong>'.$_SESSION['fax'].'<br/><br/>';

$msg .= '<strong>E-mail Address*:&nbsp;&nbsp;</strong>'.$_SESSION['email'].'<br/><br/>';

if (isset($_SESSION['Time']))
$msg .= '<strong>Best time to contact you:&nbsp;&nbsp;</strong>'.$_SESSION['Time'].$_SESSION['postFix'].'<br/><br/>';

/**********  end part1  *************/

/**********  part2  *************/

$msg .= "<h3><u>General Information</u></h3>";

$msg .= '<strong>This shipment is by:&nbsp;&nbsp;</strong>'.$_SESSION['shipBy'].'<br/><br/>';

$msg .= '<strong>This move is:&nbsp;&nbsp;</strong>'.$_SESSION['moveIs'].'<br/><br/>';

$msg .= '<strong>This shipment is:&nbsp;&nbsp;</strong>'.$_SESSION['serviceReq'].'<br/><br/>';

if (isset($_SESSION['loadRestrict']))
$msg .= '<strong>Restricted access for loading:&nbsp;&nbsp;</strong><br/>'.wordwrap($_SESSION['loadRestrict'],70,"<br/>\n",true).'<br/><br/>';

if (isset($_SESSION['unloadRestrict']))
$msg .= '<strong>Restricted access for unloading:&nbsp;&nbsp;</strong><br/>'.wordwrap($_SESSION['unloadRestrict'],70,"<br/>\n",true).'<br/><br/>';

$msg .= '<strong>Estimated move date*:</strong>&nbsp;&nbsp;'.$_SESSION['moveDate'].'&nbsp;&nbsp;(DD/MM/YYYY)<br/><br/>';

if (isset($_SESSION['originAddress']))
$msg .= '<strong>Origin Addrress:</strong>&nbsp;&nbsp;<br/>'.wordwrap($_SESSION['originAddress'],70,"<br/>\n",true).'<br/><br/>';

$msg .= '<strong>Origin city*:&nbsp;&nbsp;</strong>'.wordwrap($_SESSION['originCity'],70,"<br/>\n",true).'<br/><br/>';

if (isset($_SESSION['originState']))
$msg .= '<strong>Origin state:</strong>&nbsp;&nbsp;'.$_SESSION['originState'].'<br/><br/>';

$msg .= '<strong>Origin country*:</strong>&nbsp;&nbsp;'.$_SESSION['originCountry'].'<br/><br/>';

if (isset($_SESSION['originZip']))
$msg .= '<strong>Origin zip code:</strong>&nbsp;&nbsp;'.$_SESSION['originZip'].'<br/><br/>';

if (isset($_SESSION['originElevator']))
$msg .= '<strong>Elecator (Origin):</strong>&nbsp;&nbsp;'.$_SESSION['originElevator'].'<br/><br/>';

if (isset($_SESSION['originFloor']))
$msg .= '<strong>No. of floors (Origin):</strong>&nbsp;&nbsp;'.$_SESSION['originFloor'].'<br/><br/>';



if (isset($_SESSION['destAddress']))
$msg .= '<strong>Destination Address:</strong>&nbsp;&nbsp;<br/>'.wordwrap($_SESSION['destAddress'],70,"<br/>\n",true).'<br/><br/>';

$msg .= '<strong>Destination city*:</strong>&nbsp;&nbsp;'.wordwrap($_SESSION['destCity'],70,"<br/>\n",true).'<br/><br/>';

if (isset($_SESSION['destState']))
$msg .= '<strong>Destination state:</strong>&nbsp;&nbsp;'.$_SESSION['destState'].'<br/><br/>';

$msg .= '<strong>Destination country*:</strong>&nbsp;&nbsp;'.$_SESSION['destCountry'].'<br/><br/>';

if (isset($_SESSION['destZip']))
$msg .= '<strong>Destination zip code:</strong>&nbsp;&nbsp;'.$_SESSION['destZip'].'<br/><br/>';

if (isset($_SESSION['destElevator']))
$msg .= '<strong>Elecator (Destination):</strong>&nbsp;&nbsp;'.$_SESSION['destElevator'].'<br/><br/>';

if (isset($_SESSION['destFloor']))
$msg .= '<strong>No. of floors (Destination):</strong>&nbsp;&nbsp;'.$_SESSION['destFloor'].'<br/><br/>';

if (isset($_SESSION['packing']))
$msg .= '<strong>Need packing:</strong>&nbsp;&nbsp;'.$_SESSION['packing'].'<br/><br/>';

if (isset($_SESSION['unpacking']))
$msg .= '<strong>Need unpacking:</strong>&nbsp;&nbsp;'.$_SESSION['unpacking'].'<br/><br/>';

if (isset($_SESSION['supplyMaterial']))
$msg .= '<strong>packing materials needed to be supplied:&nbsp;&nbsp;</strong>'.$_SESSION['supplyMaterial'].'<br/><br/>';

if (isset($_SESSION['budget']))
$msg .= '<strong>Budget for this shipment is:</strong>&nbsp;&nbsp;'.$_SESSION['budgetCurrency'].'&nbsp;&nbsp;'.$_SESSION['budget'].'<br/><br/>';

if (isset($_SESSION['method']))
$msg .= '<strong>Where did you find us:</strong>&nbsp;&nbsp;'.$_SESSION['method'].'<br/><br/>';

/**********  end part2  *************/

/**********  part3  *************/
$msg .= '<h3><u>Item List</u></h3>';

$msg .= '<i>Master Room Furniture | 主人房間傢具</i><br/><table cellpadding="3">';

if(isset($_SESSION['m_bed_super_king_size']))
$msg.='<tr><td>Bed (super King size)雙人床:&nbsp;&nbsp;'.$_SESSION['m_bed_super_king_size'].'</td></tr>';

if(isset($_SESSION['m_mattress_super_king']))
$msg.='<tr><td>Mattress (Super king )雙人床褥:&nbsp;&nbsp;'.$_SESSION['m_mattress_super_king'].'</td></tr>';

if(isset($_SESSION['m_bedstand']))
$msg.='<tr><td>Bedstand床頭櫃:&nbsp;&nbsp;'.$_SESSION['m_bedstand'].'</td></tr>';

if(isset($_SESSION['m_book_cabinet']))
$msg.='<tr><td>Book Cabinet 書櫃:&nbsp;&nbsp;'.$_SESSION['m_book_cabinet'].'</td></tr>';

if(isset($_SESSION['m_sofa_1_seator']))
$msg.='<tr><td>Sofa (1 seator)沙發一座位:&nbsp;&nbsp;'.$_SESSION['m_sofa_1_seator'].'</td></tr>';

if(isset($_SESSION['m_sofa_2_seator']))
$msg.='<tr><td>Sofa (2 seators)沙發二座位:&nbsp;&nbsp;'.$_SESSION['m_sofa_2_seator'].'</td></tr>';

if(isset($_SESSION['m_sofa_3_seator']))
$msg.='<tr><td>Sofa (3 seators)沙發三座位:&nbsp;&nbsp;'.$_SESSION['m_sofa_3_seator'].'</td></tr>';

if(isset($_SESSION['m_standing_lcd_tv']))
$msg.='<tr><td>Standing LCD TVLCD 電視機 :&nbsp;&nbsp;'.$_SESSION['m_standing_lcd_tv'].'</td></tr>';

if(isset($_SESSION['m_lower_cabinet']))
$msg.='<tr><td>Lower Cabinet 地櫃:&nbsp;&nbsp;'.$_SESSION['m_lower_cabinet'].'</td></tr>';

if(isset($_SESSION['m_ornaments_cabinet']))
$msg.='<tr><td>Ornaments Cabinet飾物櫃:&nbsp;&nbsp;'.$_SESSION['m_ornaments_cabinet'].'</td></tr>';

if(isset($_SESSION['m_shoes_cabinet']))
$msg.='<tr><td>Shoes Cabinet鞋櫃:&nbsp;&nbsp;'.$_SESSION['m_shoes_cabinet'].'</td></tr>';

if(isset($_SESSION['m_tv_cabinet']))
$msg.='<tr><td>TV Cabinet 電視櫃:&nbsp;&nbsp;'.$_SESSION['m_tv_cabinet'].'</td></tr>';

if(isset($_SESSION['m_wall_cupboard']))
$msg.='<tr><td>Wall Cupboard吊櫃:&nbsp;&nbsp;'.$_SESSION['m_wall_cupboard'].'</td></tr>';

if(isset($_SESSION['m_wall_unit']))
$msg.='<tr><td>Wall Unit組合櫃:&nbsp;&nbsp;'.$_SESSION['m_wall_unit'].'</td></tr>';

if(isset($_SESSION['m_wardrobe']))
$msg.='<tr><td>Wardrobe衣廚:&nbsp;&nbsp;'.$_SESSION['m_wardrobe'].'</td></tr>';

if(isset($_SESSION['m_celling_lamp']))
$msg.='<tr><td>Celling Lamp吊燈:&nbsp;&nbsp;'.$_SESSION['m_celling_lamp'].'</td></tr>';

if(isset($_SESSION['m_dressing_table']))
$msg.='<tr><td>Dressing Table梳粧桌:&nbsp;&nbsp;'.$_SESSION['m_dressing_table'].'</td></tr>';

if(isset($_SESSION['m_dressing_chair']))
$msg.='<tr><td>Dressing Chair梳粧椅:&nbsp;&nbsp;'.$_SESSION['m_dressing_chair'].'</td></tr>';

if(isset($_SESSION['m_clothings']))
$msg.='<tr><td>Clothings衣服:&nbsp;&nbsp;'.$_SESSION['m_clothings'].'</td></tr>';

if(isset($_SESSION['m_pillow']))
$msg.='<tr><td>Pillow枕頭:&nbsp;&nbsp;'.$_SESSION['m_pillow'].'</td></tr>';

if(isset($_SESSION['m_quilts']))
$msg.='<tr><td>Quilts棉被:&nbsp;&nbsp;'.$_SESSION['m_quilts'].'</td></tr>';

if(isset($_SESSION['m_shoes']))
$msg.='<tr><td>Shoes鞋:&nbsp;&nbsp;'.$_SESSION['m_shoes'].'</td></tr>';

if(isset($_SESSION['m_window_curtain']))
$msg.='<tr><td>Window Curtain窗簾:&nbsp;&nbsp;'.$_SESSION['m_window_curtain'].'</td></tr>';

if(isset($_SESSION['m_table_lamp']))
$msg.='<tr><td>Table Lamp 座桌燈:&nbsp;&nbsp;'.$_SESSION['m_table_lamp'].'</td></tr>';

if(isset($_SESSION['m_mirror']))
$msg.='<tr><td>Mirror鏡:&nbsp;&nbsp;'.$_SESSION['m_mirror'].'</td></tr>';

if(isset($_SESSION['m_room_box']))
$msg.='<tr><td>Master Room box request to pack主人房雜物箱:&nbsp;&nbsp;'.$_SESSION['m_room_box'].'</td></tr>';

$msg .= '</table><br/><br/>';

$msg .= '<i>Bed Room (A) Furniture | 睡房 (A)</i><br/><table cellpadding="3">';

if(isset($_SESSION['a_bed_single']))
$msg.='<tr><td>Bed (Single)單人床:&nbsp;&nbsp;'.$_SESSION['a_bed_single'].'</td></tr>';

if(isset($_SESSION['a_mattress_single']))
$msg.='<tr><td>Mattress (Single)單人床褥:&nbsp;&nbsp;'.$_SESSION['a_mattress_single'].'</td></tr>';

if(isset($_SESSION['a_bedstand']))
$msg.='<tr><td>Bedstand床頭櫃:&nbsp;&nbsp;'.$_SESSION['a_bedstand'].'</td></tr>';

if(isset($_SESSION['a_book_cabinet']))
$msg.='<tr><td>Book Cabinet 書櫃:&nbsp;&nbsp;'.$_SESSION['a_book_cabinet'].'</td></tr>';

if(isset($_SESSION['a_deck_chair']))
$msg.='<tr><td>Deck Chair書椅:&nbsp;&nbsp;'.$_SESSION['a_deck_chair'].'</td></tr>';

if(isset($_SESSION['a_desk']))
$msg.='<tr><td>Desk書桌:&nbsp;&nbsp;'.$_SESSION['a_desk'].'</td></tr>';

if(isset($_SESSION['a_celling_lamp']))
$msg.='<tr><td>Celling Lamp吊燈:&nbsp;&nbsp;'.$_SESSION['a_celling_lamp'].'</td></tr>';

if(isset($_SESSION['a_clothings']))
$msg.='<tr><td>Clothings衣服:&nbsp;&nbsp;'.$_SESSION['a_clothings'].'</td></tr>';

if(isset($_SESSION['a_pillow']))
$msg.='<tr><td>Pillow枕頭:&nbsp;&nbsp;'.$_SESSION['a_pillow'].'</td></tr>';

if(isset($_SESSION['a_quilts']))
$msg.='<tr><td>Quilts棉被:&nbsp;&nbsp;'.$_SESSION['a_quilts'].'</td></tr>';

if(isset($_SESSION['a_shoes']))
$msg.='<tr><td>Shoes鞋:&nbsp;&nbsp;'.$_SESSION['a_shoes'].'</td></tr>';

if(isset($_SESSION['a_window_curtain']))
$msg.='<tr><td>Window Curtain窗簾:&nbsp;&nbsp;'.$_SESSION['a_window_curtain'].'</td></tr>';

if(isset($_SESSION['a_table_lamp']))
$msg.='<tr><td>Table Lamp 座桌燈:&nbsp;&nbsp;'.$_SESSION['a_table_lamp'].'</td></tr>';

if(isset($_SESSION['a_mirror']))
$msg.='<tr><td>Mirror鏡:&nbsp;&nbsp;'.$_SESSION['a_mirror'].'</td></tr>';

if(isset($_SESSION['a_bed_room_box']))
$msg.='<tr><td>Bed Room (A) box request to pack睡房 (A) 雜物箱:&nbsp;&nbsp;'.$_SESSION['a_bed_room_box'].'</td></tr>';

$msg .= '</table><br/><br/>';

$msg .= '<i>Bed Room (B) Furniture | 睡房 (B)</i><br/><table cellpadding="3">';

if(isset($_SESSION['b_cot']))
$msg.='<tr><td>Cot幼兒床:&nbsp;&nbsp;'.$_SESSION['b_cot'].'</td></tr>';

if(isset($_SESSION['b_lower_cabinet']))
$msg.='<tr><td>Lower Cabinet 地櫃:&nbsp;&nbsp;'.$_SESSION['b_lower_cabinet'].'</td></tr>';

if(isset($_SESSION['b_book_cabinet']))
$msg.='<tr><td>Book Cabinet 書櫃:&nbsp;&nbsp;'.$_SESSION['b_book_cabinet'].'</td></tr>';

if(isset($_SESSION['b_deck_chair']))
$msg.='<tr><td>Deck-chair書椅:&nbsp;&nbsp;'.$_SESSION['b_deck_chair'].'</td></tr>';

if(isset($_SESSION['b_desk']))
$msg.='<tr><td>Desk書桌:&nbsp;&nbsp;'.$_SESSION['b_desk'].'</td></tr>';

if(isset($_SESSION['b_celling_lamp']))
$msg.='<tr><td>Celling Lamp吊燈:&nbsp;&nbsp;'.$_SESSION['b_celling_lamp'].'</td></tr>';

if(isset($_SESSION['b_baby_stuffs']))
$msg.='<tr><td>Baby stuffs嬰兒用品:&nbsp;&nbsp;'.$_SESSION['b_baby_stuffs'].'</td></tr>';

if(isset($_SESSION['b_clothings']))
$msg.='<tr><td>Clothings衣服:&nbsp;&nbsp;'.$_SESSION['b_clothings'].'</td></tr>';

if(isset($_SESSION['b_pillow']))
$msg.='<tr><td>Pillow枕頭:&nbsp;&nbsp;'.$_SESSION['b_pillow'].'</td></tr>';

if(isset($_SESSION['b_quilts']))
$msg.='<tr><td>Quilts棉被:&nbsp;&nbsp;'.$_SESSION['b_quilts'].'</td></tr>';

if(isset($_SESSION['b_window_curtain']))
$msg.='<tr><td>Window Curtain窗簾:&nbsp;&nbsp;'.$_SESSION['b_window_curtain'].'</td></tr>';

if(isset($_SESSION['b_bed_room_box']))
$msg.='<tr><td>Bed Room (B) box request to pack睡房 (B) 雜物箱:&nbsp;&nbsp;'.$_SESSION['b_bed_room_box'].'</td></tr>';

$msg .= '</table><br/><br/>';

$msg .= '<i>Living Room | 客廳</i><br/><table cellpadding="3">';

if(isset($_SESSION['fabric_guest_chair']))
$msg.='<tr><td>Fabric guest chair單座大椅:&nbsp;&nbsp;'.$_SESSION['fabric_guest_chair'].'</td></tr>';

if(isset($_SESSION['table_che_bre']))
$msg.='<tr><td>Table (ChE/BrE)中式/英式餐桌:&nbsp;&nbsp;'.$_SESSION['table_che_bre'].'</td></tr>';

if(isset($_SESSION['chair_che_bre']))
$msg.='<tr><td>Chair (ChE/BrE)中式/英式餐椅:&nbsp;&nbsp;'.$_SESSION['chair_che_bre'].'</td></tr>';

if(isset($_SESSION['living_room_coffee_table']))
$msg.='<tr><td>Coffee Table茶几:&nbsp;&nbsp;'.$_SESSION['living_room_coffee_table'].'</td></tr>';

if(isset($_SESSION['living_room_coffee_table_stool']))
$msg.='<tr><td>Coffee Table Stool茶几矮凳:&nbsp;&nbsp;'.$_SESSION['living_room_coffee_table_stool'].'</td></tr>';

if(isset($_SESSION['living_room_deck_chair']))
$msg.='<tr><td>Deck Chair書椅:&nbsp;&nbsp;'.$_SESSION['living_room_deck_chair'].'</td></tr>';

if(isset($_SESSION['living_room_desk']))
$msg.='<tr><td>Desk書桌:&nbsp;&nbsp;'.$_SESSION['living_room_desk'].'</td></tr>';

if(isset($_SESSION['wooden_wine_cabinet']))
$msg.='<tr><td>Wooden wine cabinet木酒櫃:&nbsp;&nbsp;'.$_SESSION['wooden_wine_cabinet'].'</td></tr>';

if(isset($_SESSION['partitions']))
$msg.='<tr><td>Partitions屏風:&nbsp;&nbsp;'.$_SESSION['partitions'].'</td></tr>';

if(isset($_SESSION['metal_bridcage_with_stand']))
$msg.='<tr><td>Metal Bridcage with stand 大鳥籠:&nbsp;&nbsp;'.$_SESSION['metal_bridcage_with_stand'].'</td></tr>';

if(isset($_SESSION['side_table_glass_top']))
$msg.='<tr><td>Side Table (glass top)角几:&nbsp;&nbsp;'.$_SESSION['side_table_glass_top'].'</td></tr>';

if(isset($_SESSION['living_room_sofa_1_seator']))
$msg.='<tr><td>Sofa (1 seator)沙發一座位:&nbsp;&nbsp;'.$_SESSION['living_room_sofa_1_seator'].'</td></tr>';

if(isset($_SESSION['living_room_sofa_2_seator']))
$msg.='<tr><td>Sofa (2 seators)沙發二座位:&nbsp;&nbsp;'.$_SESSION['living_room_sofa_2_seator'].'</td></tr>';

if(isset($_SESSION['living_room_sofa_3_seator']))
$msg.='<tr><td>Sofa (3 seators)沙發三座位:&nbsp;&nbsp;'.$_SESSION['living_room_sofa_3_seator'].'</td></tr>';

if(isset($_SESSION['hi_fi']))
$msg.='<tr><td>Hi Fi音響:&nbsp;&nbsp;'.$_SESSION['hi_fi'].'</td></tr>';

if(isset($_SESSION['chandelier']))
$msg.='<tr><td>Chandelier吊燈:&nbsp;&nbsp;'.$_SESSION['chandelier'].'</td></tr>';

if(isset($_SESSION['l_standing_lamp']))
$msg.='<tr><td>Standing Lamp企燈:&nbsp;&nbsp;'.$_SESSION['l_standing_lamp'].'</td></tr>';

if(isset($_SESSION['thirty_seven_inches_lcd_tv']))
$msg.='<tr><td>37(inches) LCD TV37" LCD 電視機 :&nbsp;&nbsp;'.$_SESSION['thirty_seven_inches_lcd_tv'].'</td></tr>';

if(isset($_SESSION['massage_chair']))
$msg.='<tr><td>Living Room box request to pack客廳雜物箱:&nbsp;&nbsp;'.$_SESSION['massage_chair'].'</td></tr>';

if(isset($_SESSION['Vase']))
$msg.='<tr><td>Massage Chair按摩椅:&nbsp;&nbsp;'.$_SESSION['Vase'].'</td></tr>';

if(isset($_SESSION['chinaware']))
$msg.='<tr><td>Vase花瓶:&nbsp;&nbsp;'.$_SESSION['chinaware'].'</td></tr>';

if(isset($_SESSION['living_room_box']))
$msg.='<tr><td>Chinaware瓷器:&nbsp;&nbsp;'.$_SESSION['living_room_box'].'</td></tr>';

$msg .= '</table><br/><br/>';

$msg .= '<i>MISC | 其它物件</i><br/><table cellpadding="3">';

if(isset($_SESSION['pictures']))
$msg.='<tr><td>Pictures油畫:&nbsp;&nbsp;'.$_SESSION['pictures'].'</td></tr>';

if(isset($_SESSION['safe_box']))
$msg.='<tr><td>Safe box保險箱:&nbsp;&nbsp;'.$_SESSION['safe_box'].'</td></tr>';

if(isset($_SESSION['camphor_chest']))
$msg.='<tr><td>Camphor Chest樟木箱:&nbsp;&nbsp;'.$_SESSION['camphor_chest'].'</td></tr>';

if(isset($_SESSION['bean_bags']))
$msg.='<tr><td>Bean Bags沙袋:&nbsp;&nbsp;'.$_SESSION['bean_bags'].'</td></tr>';

if(isset($_SESSION['air_cleaner']))
$msg.='<tr><td>Air cleaner空氣淨化機:&nbsp;&nbsp;'.$_SESSION['air_cleaner'].'</td></tr>';

if(isset($_SESSION['forty_seven_inches_lcd_tv']))
$msg.='<tr><td>47(inches) LCD TV47" LCD 電視機 :&nbsp;&nbsp;'.$_SESSION['forty_seven_inches_lcd_tv'].'</td></tr>';

if(isset($_SESSION['big_size_lcd_tv']))
$msg.='<tr><td>Big size LCD TV超大形 LCD 電視機 :&nbsp;&nbsp;'.$_SESSION['big_size_lcd_tv'].'</td></tr>';

if(isset($_SESSION['kid_furniture']))
$msg.='<tr><td>Kid furniture兒童家具:&nbsp;&nbsp;'.$_SESSION['kid_furniture'].'</td></tr>';

if(isset($_SESSION['baby_trolley']))
$msg.='<tr><td>Baby Trolley嬰兒車:&nbsp;&nbsp;'.$_SESSION['baby_trolley'].'</td></tr>';

if(isset($_SESSION['wine_or_liquor']))
$msg.='<tr><td>MISC box request to pack雜物箱:&nbsp;&nbsp;'.$_SESSION['wine_or_liquor'].'</td></tr>';

if(isset($_SESSION['electric_iron']))
$msg.='<tr><td>Wine or Liquor酒類:&nbsp;&nbsp;'.$_SESSION['electric_iron'].'</td></tr>';

if(isset($_SESSION['ironing_board']))
$msg.='<tr><td>Electric Iron熨斗:&nbsp;&nbsp;'.$_SESSION['ironing_board'].'</td></tr>';

if(isset($_SESSION['ornaments']))
$msg.='<tr><td>Ironing board熨衫板:&nbsp;&nbsp;'.$_SESSION['ornaments'].'</td></tr>';

if(isset($_SESSION['misc_box']))
$msg.='<tr><td>Ornaments 飾物:&nbsp;&nbsp;'.$_SESSION['misc_box'].'</td></tr>';

$msg .= '</table><br/><br/>';

$msg .= '<i>Dinning room  | 飯廳</i><br/><table cellpadding="3">';

if(isset($_SESSION['up_right_piano']))
$msg.='<tr><td>Up right Piano鋼琴:&nbsp;&nbsp;'.$_SESSION['up_right_piano'].'</td></tr>';

if(isset($_SESSION['dinning_room_coffee_table']))
$msg.='<tr><td>Coffee Table茶几:&nbsp;&nbsp;'.$_SESSION['dinning_room_coffee_table'].'</td></tr>';

if(isset($_SESSION['dinning_room_coffee_table_stool']))
$msg.='<tr><td>Coffee Table Stool茶几矮凳:&nbsp;&nbsp;'.$_SESSION['dinning_room_coffee_table_stool'].'</td></tr>';

if(isset($_SESSION['dinning_room_deck_chair']))
$msg.='<tr><td>Deck Chair書椅:&nbsp;&nbsp;'.$_SESSION['dinning_room_deck_chair'].'</td></tr>';

if(isset($_SESSION['dinning_room_desk']))
$msg.='<tr><td>Desk書桌:&nbsp;&nbsp;'.$_SESSION['dinning_room_desk'].'</td></tr>';

if(isset($_SESSION['dining_chair']))
$msg.='<tr><td>Dining Chair餐椅:&nbsp;&nbsp;'.$_SESSION['dining_chair'].'</td></tr>';

if(isset($_SESSION['dining_table']))
$msg.='<tr><td>Dining Table 餐桌:&nbsp;&nbsp;'.$_SESSION['dining_table'].'</td></tr>';

if(isset($_SESSION['big_foot_stool']))
$msg.='<tr><td>Big foot stool矮凳:&nbsp;&nbsp;'.$_SESSION['big_foot_stool'].'</td></tr>';

if(isset($_SESSION['lazy_susan']))
$msg.='<tr><td>Lazy Susan餐桌轉盤:&nbsp;&nbsp;'.$_SESSION['lazy_susan'].'</td></tr>';

if(isset($_SESSION['dinning_room_celling_lamp']))
$msg.='<tr><td>Celling lamp吊燈:&nbsp;&nbsp;'.$_SESSION['dinning_room_celling_lamp'].'</td></tr>';

if(isset($_SESSION['side_table']))
$msg.='<tr><td>Side Table角几:&nbsp;&nbsp;'.$_SESSION['side_table'].'</td></tr>';

if(isset($_SESSION['dining_room_box']))
$msg.='<tr><td>Dining Room box request to pack飯廳雜物箱:&nbsp;&nbsp;'.$_SESSION['dining_room_box'].'</td></tr>';

$msg .= '</table><br/><br/>';

$msg .= '<i>Kitchenware | 廚房用具</i><br/><table cellpadding="3">';

if(isset($_SESSION['chopping_block']))
$msg.='<tr><td>Chopping Block砧板:&nbsp;&nbsp;'.$_SESSION['chopping_block'].'</td></tr>';

if(isset($_SESSION['plate_rack']))
$msg.='<tr><td>Plate Rack盤碟架:&nbsp;&nbsp;'.$_SESSION['plate_rack'].'</td></tr>';

if(isset($_SESSION['toast_rack']))
$msg.='<tr><td>Toast Rack麵包片架:&nbsp;&nbsp;'.$_SESSION['toast_rack'].'</td></tr>';

if(isset($_SESSION['wine_rack']))
$msg.='<tr><td>Wine Rack酒瓶架:&nbsp;&nbsp;'.$_SESSION['wine_rack'].'</td></tr>';

if(isset($_SESSION['washing_machine']))
$msg.='<tr><td>Washing Machine洗衣機:&nbsp;&nbsp;'.$_SESSION['washing_machine'].'</td></tr>';

if(isset($_SESSION['refrigerator']))
$msg.='<tr><td>Refrigerator雪櫃:&nbsp;&nbsp;'.$_SESSION['refrigerator'].'</td></tr>';

if(isset($_SESSION['spin_drier']))
$msg.='<tr><td>Spin Drier乾衣機:&nbsp;&nbsp;'.$_SESSION['spin_drier'].'</td></tr>';

if(isset($_SESSION['toaster']))
$msg.='<tr><td>Kitchenware box request to pack廚房雜物箱:&nbsp;&nbsp;'.$_SESSION['toaster'].'</td></tr>';

if(isset($_SESSION['oven']))
$msg.='<tr><td>Toaster多士爐:&nbsp;&nbsp;'.$_SESSION['oven'].'</td></tr>';

if(isset($_SESSION['rice_cooker']))
$msg.='<tr><td>Oven焗爐:&nbsp;&nbsp;'.$_SESSION['rice_cooker'].'</td></tr>';

if(isset($_SESSION['kitchenware_box']))
$msg.='<tr><td>Rice Cooker電飯煲:&nbsp;&nbsp;'.$_SESSION['kitchenware_box'].'</td></tr>';

$msg .= '</table><br/><br/>';

$msg .= '<i>Study Room | 書房</i><br/><table cellpadding="3">';

if(isset($_SESSION['cassette_deck']))
$msg.='<tr><td>Cassette Deck錄音座:&nbsp;&nbsp;'.$_SESSION['cassette_deck'].'</td></tr>';

if(isset($_SESSION['s_standing_lamp']))
$msg.='<tr><td>Standing Lamp企燈:&nbsp;&nbsp;'.$_SESSION['s_standing_lamp'].'</td></tr>';

if(isset($_SESSION['computer']))
$msg.='<tr><td>Computer電腦:&nbsp;&nbsp;'.$_SESSION['computer'].'</td></tr>';

if(isset($_SESSION['monitor']))
$msg.='<tr><td>Monitor顯示屏:&nbsp;&nbsp;'.$_SESSION['monitor'].'</td></tr>';

if(isset($_SESSION['printer']))
$msg.='<tr><td>Printer打印機:&nbsp;&nbsp;'.$_SESSION['printer'].'</td></tr>';

if(isset($_SESSION['dvd_recorder']))
$msg.='<tr><td>DVD RecordDVD 機:&nbsp;&nbsp;'.$_SESSION['dvd_recorder'].'</td></tr>';

if(isset($_SESSION['amplifier']))
$msg.='<tr><td>Amplifier擴音器:&nbsp;&nbsp;'.$_SESSION['amplifier'].'</td></tr>';

if(isset($_SESSION['ipod_speaker']))
$msg.='<tr><td>Ipod Speaker唱機:&nbsp;&nbsp;'.$_SESSION['ipod_speaker'].'</td></tr>';

if(isset($_SESSION['speaker']))
$msg.='<tr><td>Speaker喇叭:&nbsp;&nbsp;'.$_SESSION['speaker'].'</td></tr>';

if(isset($_SESSION['woofer']))
$msg.='<tr><td>Woofer低音擴聲器:&nbsp;&nbsp;'.$_SESSION['woofer'].'</td></tr>';

if(isset($_SESSION['study_room_deck_chair']))
$msg.='<tr><td>Deck Chair書椅:&nbsp;&nbsp;'.$_SESSION['study_room_deck_chair'].'</td></tr>';

if(isset($_SESSION['study_room_desk']))
$msg.='<tr><td>Desk書桌:&nbsp;&nbsp;'.$_SESSION['study_room_desk'].'</td></tr>';

if(isset($_SESSION['file_cabinet']))
$msg.='<tr><td>File Cabinet文件地櫃:&nbsp;&nbsp;'.$_SESSION['file_cabinet'].'</td></tr>';

if(isset($_SESSION['study_room_box']))
$msg.='<tr><td>Study Room box request to pack書房雜物箱:&nbsp;&nbsp;'.$_SESSION['study_room_box'].'</td></tr>';

$msg .= '</table><br/><br/>';

$msg .= '<i>Store Room | 儲物房</i><br/><table cellpadding="3">';

if(isset($_SESSION['medcial']))
$msg.='<tr><td>Medcial 醫藥用品:&nbsp;&nbsp;'.$_SESSION['medcial'].'</td></tr>';

if(isset($_SESSION['clothings']))
$msg.='<tr><td>Clothings衣服:&nbsp;&nbsp;'.$_SESSION['clothings'].'</td></tr>';

if(isset($_SESSION['toys']))
$msg.='<tr><td>Toys玩具:&nbsp;&nbsp;'.$_SESSION['toys'].'</td></tr>';

if(isset($_SESSION['books']))
$msg.='<tr><td>Books書籍:&nbsp;&nbsp;'.$_SESSION['books'].'</td></tr>';

if(isset($_SESSION['photo_album']))
$msg.='<tr><td>Photo Album相簿:&nbsp;&nbsp;'.$_SESSION['photo_album'].'</td></tr>';

if(isset($_SESSION['vacuum_cleaner']))
$msg.='<tr><td>Vacuum Cleaner吸塵機:&nbsp;&nbsp;'.$_SESSION['vacuum_cleaner'].'</td></tr>';

if(isset($_SESSION['store_room_box']))
$msg.='<tr><td>Store Room box request to pack儲物房雜物箱:&nbsp;&nbsp;'.$_SESSION['store_room_box'].'</td></tr>';

$msg .= '</table><br/><br/>';

$msg .= '<i>Outdoor Furniture | 戶外傢具</i><br/><table cellpadding="3">';

if(isset($_SESSION['outdoor_table']))
$msg.='<tr><td>Outdoor Table戶外桌:&nbsp;&nbsp;'.$_SESSION['outdoor_table'].'</td></tr>';

if(isset($_SESSION['outdoor_chair']))
$msg.='<tr><td>Outdoor Chair戶外椅:&nbsp;&nbsp;'.$_SESSION['outdoor_chair'].'</td></tr>';

if(isset($_SESSION['outdoor_chirdren_slide']))
$msg.='<tr><td>Chirdren Slide滑梯:&nbsp;&nbsp;'.$_SESSION['outdoor_chirdren_slide'].'</td></tr>';

if(isset($_SESSION['outdoor_misc']))
$msg.='<tr><td>Outdoor MISC其它戶外物件:&nbsp;&nbsp;'.$_SESSION['outdoor_misc'].'</td></tr>';

$msg .= '</table><br/><br/>';

/*$msg .= '<u>Master Room Furniture | DHжè</u><table cellpadding="3">';

if(isset($_SESSION['m_bed_super_king_size']))
$msg.='<tr><td>Bed (super King size)H</td><td>'.$_SESSION['m_bed_super_king_size'].'</td></tr>';

if(isset($_SESSION['m_mattress_super_king']))
$msg.='<tr><td>Mattress (Super king )Hɿ</td><td>'.$_SESSION['m_mattress_super_king'].'</td></tr>';

if(isset($_SESSION['m_bedstand']))
$msg.='<tr><td>BedstandYd</td><td>'.$_SESSION['m_bedstand'].'</td></tr>';

if(isset($_SESSION['m_book_cabinet']))
$msg.='<tr><td>Book Cabinet d</td><td>'.$_SESSION['m_book_cabinet'].'</td></tr>';

if(isset($_SESSION['m_sofa_1_seator']))
$msg.='<tr><td>Sofa (1 seator)Fo@y</td><td>'.$_SESSION['m_sofa_1_seator'].'</td></tr>';

if(isset($_SESSION['m_sofa_2_seator']))
$msg.='<tr><td>Sofa (2 seators)FoGy</td><td>'.$_SESSION['m_sofa_2_seator'].'</td></tr>';

if(isset($_SESSION['m_sofa_3_seator']))
$msg.='<tr><td>Sofa (3 seators)FoTy</td><td>'.$_SESSION['m_sofa_3_seator'].'</td></tr>';

if(isset($_SESSION['m_standing_lcd_tv']))
$msg.='<tr><td>Standing LCD TVLCD q </td><td>'.$_SESSION['m_standing_lcd_tv'].'</td></tr>';

if(isset($_SESSION['m_lower_cabinet']))
$msg.='<tr><td>Lower Cabinet ad</td><td>'.$_SESSION['m_lower_cabinet'].'</td></tr>';

if(isset($_SESSION['m_ornaments_cabinet']))
$msg.='<tr><td>Ornaments Cabinetd</td><td>'.$_SESSION['m_ornaments_cabinet'].'</td></tr>';

if(isset($_SESSION['m_shoes_cabinet']))
$msg.='<tr><td>Shoes Cabinetcd</td><td>'.$_SESSION['m_shoes_cabinet'].'</td></tr>';

if(isset($_SESSION['m_tv_cabinet']))
$msg.='<tr><td>TV Cabinet qd</td><td>'.$_SESSION['m_tv_cabinet'].'</td></tr>';

if(isset($_SESSION['m_wall_cupboard']))
$msg.='<tr><td>Wall CupboardQd</td><td>'.$_SESSION['m_wall_cupboard'].'</td></tr>';

if(isset($_SESSION['m_wall_unit']))
$msg.='<tr><td>Wall UnitզXd</td><td>'.$_SESSION['m_wall_unit'].'</td></tr>';

if(isset($_SESSION['m_wardrobe']))
$msg.='<tr><td>Wardrobep</td><td>'.$_SESSION['m_wardrobe'].'</td></tr>';

if(isset($_SESSION['m_celling_lamp']))
$msg.='<tr><td>Celling LampQO</td><td>'.$_SESSION['m_celling_lamp'].'</td></tr>';

if(isset($_SESSION['m_dressing_table']))
$msg.='<tr><td>Dressing Tableۮ</td><td>'.$_SESSION['m_dressing_table'].'</td></tr>';

if(isset($_SESSION['m_dressing_chair']))
$msg.='<tr><td>Dressing Chair۴</td><td>'.$_SESSION['m_dressing_chair'].'</td></tr>';

if(isset($_SESSION['m_clothings']))
$msg.='<tr><td>ClothingsA</td><td>'.$_SESSION['m_clothings'].'</td></tr>';

if(isset($_SESSION['m_pillow']))
$msg.='<tr><td>PillowEY</td><td>'.$_SESSION['m_pillow'].'</td></tr>';

if(isset($_SESSION['m_quilts']))
$msg.='<tr><td>QuiltsֳQ</td><td>'.$_SESSION['m_quilts'].'</td></tr>';

if(isset($_SESSION['m_shoes']))
$msg.='<tr><td>Shoesc</td><td>'.$_SESSION['m_shoes'].'</td></tr>';

if(isset($_SESSION['m_window_curtain']))
$msg.='<tr><td>Window Curtainî</td><td>'.$_SESSION['m_window_curtain'].'</td></tr>';

if(isset($_SESSION['m_table_lamp']))
$msg.='<tr><td>Table Lamp yO</td><td>'.$_SESSION['m_table_lamp'].'</td></tr>';

if(isset($_SESSION['m_mirror']))
$msg.='<tr><td>Mirror</td><td>'.$_SESSION['m_mirror'].'</td></tr>';

if(isset($_SESSION['m_room_box']))
$msg.='<tr><td>Master Room box request to packDHc</td><td>'.$_SESSION['m_room_box'].'</td></tr>';

$msg .= '</table><br/><br/>';



$msg .= '<u>Bed Room (A) Furniture | Ω (A)</u><table cellpadding="3">';

if(isset($_SESSION['a_bed_single']))
$msg.='<tr><td>Bed (Single)H</td><td>'.$_SESSION['a_bed_single'].'</td></tr>';

if(isset($_SESSION['a_mattress_single']))
$msg.='<tr><td>Mattress (Single)Hɿ</td><td>'.$_SESSION['a_mattress_single'].'</td></tr>';

if(isset($_SESSION['a_bedstand']))
$msg.='<tr><td>BedstandYd</td><td>'.$_SESSION['a_bedstand'].'</td></tr>';

if(isset($_SESSION['a_book_cabinet']))
$msg.='<tr><td>Book Cabinet d</td><td>'.$_SESSION['a_book_cabinet'].'</td></tr>';

if(isset($_SESSION['a_deck_chair']))
$msg.='<tr><td>Deck ChairѴ</td><td>'.$_SESSION['a_deck_chair'].'</td></tr>';

if(isset($_SESSION['a_desk']))
$msg.='<tr><td>DeskѮ</td><td>'.$_SESSION['a_desk'].'</td></tr>';

if(isset($_SESSION['a_celling_lamp']))
$msg.='<tr><td>Celling LampQO</td><td>'.$_SESSION['a_celling_lamp'].'</td></tr>';

if(isset($_SESSION['a_clothings']))
$msg.='<tr><td>ClothingsA</td><td>'.$_SESSION['a_clothings'].'</td></tr>';

if(isset($_SESSION['a_pillow']))
$msg.='<tr><td>PillowEY</td><td>'.$_SESSION['a_pillow'].'</td></tr>';

if(isset($_SESSION['a_quilts']))
$msg.='<tr><td>QuiltsֳQ</td><td>'.$_SESSION['a_quilts'].'</td></tr>';

if(isset($_SESSION['a_shoes']))
$msg.='<tr><td>Shoesc</td><td>'.$_SESSION['a_shoes'].'</td></tr>';

if(isset($_SESSION['a_window_curtain']))
$msg.='<tr><td>Window Curtainî</td><td>'.$_SESSION['a_window_curtain'].'</td></tr>';

if(isset($_SESSION['a_table_lamp']))
$msg.='<tr><td>Table Lamp yO</td><td>'.$_SESSION['a_table_lamp'].'</td></tr>';

if(isset($_SESSION['a_mirror']))
$msg.='<tr><td>Mirror</td><td>'.$_SESSION['a_mirror'].'</td></tr>';

if(isset($_SESSION['a_bed_room_box']))
$msg.='<tr><td>Bed Room (A) box request to packΩ (A) c</td><td>'.$_SESSION['a_bed_room_box'].'</td></tr>';

$msg .= '</table><br/><br/>';



$msg .= '<u>Bed Room (B) Furniture | Ω (B)</u><table cellpadding="3">';

if(isset($_SESSION['b_cot']))
$msg.='<tr><td>Cot</td><td>'.$_SESSION['b_cot'].'</td></tr>';

if(isset($_SESSION['b_lower_cabinet']))
$msg.='<tr><td>Lower Cabinet ad</td><td>'.$_SESSION['b_lower_cabinet'].'</td></tr>';

if(isset($_SESSION['b_book_cabinet']))
$msg.='<tr><td>Book Cabinet d</td><td>'.$_SESSION['b_book_cabinet'].'</td></tr>';

if(isset($_SESSION['b_deck_chair']))
$msg.='<tr><td>Deck-chairѴ</td><td>'.$_SESSION['b_deck_chair'].'</td></tr>';

if(isset($_SESSION['b_desk']))
$msg.='<tr><td>DeskѮ</td><td>'.$_SESSION['b_desk'].'</td></tr>';

if(isset($_SESSION['b_celling_lamp']))
$msg.='<tr><td>Celling LampQO</td><td>'.$_SESSION['b_celling_lamp'].'</td></tr>';

if(isset($_SESSION['b_baby_stuffs']))
$msg.='<tr><td>Baby stuffsΫ~</td><td>'.$_SESSION['b_baby_stuffs'].'</td></tr>';

if(isset($_SESSION['b_clothings']))
$msg.='<tr><td>ClothingsA</td><td>'.$_SESSION['b_clothings'].'</td></tr>';

if(isset($_SESSION['b_pillow']))
$msg.='<tr><td>PillowEY</td><td>'.$_SESSION['b_pillow'].'</td></tr>';

if(isset($_SESSION['b_quilts']))
$msg.='<tr><td>QuiltsֳQ</td><td>'.$_SESSION['b_quilts'].'</td></tr>';

if(isset($_SESSION['b_window_curtain']))
$msg.='<tr><td>Window Curtainî</td><td>'.$_SESSION['b_window_curtain'].'</td></tr>';

if(isset($_SESSION['b_bed_room_box']))
$msg.='<tr><td>Bed Room (B) box request to packΩ (B) c</td><td>'.$_SESSION['b_bed_room_box'].'</td></tr>';

$msg .= '</table><br/><br/>';



$msg .= '<u>Living Room | U</u><table cellpadding="3">';

if(isset($_SESSION['fabric_guest_chair']))
$msg.='<tr><td>Fabric guest chairyj</td><td>'.$_SESSION['fabric_guest_chair'].'</td></tr>';

if(isset($_SESSION['table_che_bre']))
$msg.='<tr><td>Table (ChE/BrE)/^\</td><td>'.$_SESSION['table_che_bre'].'</td></tr>';

if(isset($_SESSION['chair_che_bre']))
$msg.='<tr><td>Chair (ChE/BrE)/^\</td><td>'.$_SESSION['chair_che_bre'].'</td></tr>';

if(isset($_SESSION['living_room_coffee_table']))
$msg.='<tr><td>Coffee TableL</td><td>'.$_SESSION['living_room_coffee_table'].'</td></tr>';

if(isset($_SESSION['living_room_coffee_table_stool']))
$msg.='<tr><td>Coffee Table StoolLG</td><td>'.$_SESSION['living_room_coffee_table_stool'].'</td></tr>';

if(isset($_SESSION['living_room_deck_chair']))
$msg.='<tr><td>Deck ChairѴ</td><td>'.$_SESSION['living_room_deck_chair'].'</td></tr>';

if(isset($_SESSION['living_room_desk']))
$msg.='<tr><td>DeskѮ</td><td>'.$_SESSION['living_room_desk'].'</td></tr>';

if(isset($_SESSION['wooden_wine_cabinet']))
$msg.='<tr><td>Wooden wine cabinetsd</td><td>'.$_SESSION['wooden_wine_cabinet'].'</td></tr>';

if(isset($_SESSION['partitions']))
$msg.='<tr><td>Partitions̭</td><td>'.$_SESSION['partitions'].'</td></tr>';

if(isset($_SESSION['metal_bridcage_with_stand']))
$msg.='<tr><td>Metal Bridcage with stand jŢ</td><td>'.$_SESSION['metal_bridcage_with_stand'].'</td></tr>';

if(isset($_SESSION['side_table_glass_top']))
$msg.='<tr><td>Side Table (glass top)L</td><td>'.$_SESSION['side_table_glass_top'].'</td></tr>';

if(isset($_SESSION['living_room_sofa_1_seator']))
$msg.='<tr><td>Sofa (1 seator)Fo@y</td><td>'.$_SESSION['living_room_sofa_1_seator'].'</td></tr>';

if(isset($_SESSION['living_room_sofa_2_seator']))
$msg.='<tr><td>Sofa (2 seators)FoGy</td><td>'.$_SESSION['living_room_sofa_2_seator'].'</td></tr>';

if(isset($_SESSION['living_room_sofa_3_seator']))
$msg.='<tr><td>Sofa (3 seators)FoTy</td><td>'.$_SESSION['living_room_sofa_3_seator'].'</td></tr>';

if(isset($_SESSION['hi_fi']))
$msg.='<tr><td>Hi FiT</td><td>'.$_SESSION['hi_fi'].'</td></tr>';

if(isset($_SESSION['chandelier']))
$msg.='<tr><td>ChandelierQO</td><td>'.$_SESSION['chandelier'].'</td></tr>';

if(isset($_SESSION['l_standing_lamp']))
$msg.='<tr><td>Standing LampO</td><td>'.$_SESSION['l_standing_lamp'].'</td></tr>';

if(isset($_SESSION['thirty_seven_inches_lcd_tv']))
$msg.='<tr><td>37(inches) LCD TV37" LCD q </td><td>'.$_SESSION['thirty_seven_inches_lcd_tv'].'</td></tr>';

if(isset($_SESSION['massage_chair']))
$msg.='<tr><td>Living Room box request to packUc</td><td>'.$_SESSION['massage_chair'].'</td></tr>';

if(isset($_SESSION['Vase']))
$msg.='<tr><td>Massage Chair</td><td>'.$_SESSION['Vase'].'</td></tr>';

if(isset($_SESSION['chinaware']))
$msg.='<tr><td>Vase~</td><td>'.$_SESSION['chinaware'].'</td></tr>';

if(isset($_SESSION['living_room_box']))
$msg.='<tr><td>Chinaware</td><td>'.$_SESSION['living_room_box'].'</td></tr>';

$msg .= '</table><br/><br/>';



$msg .= '<u>MISC | 䥦</u><table cellpadding="3">';

if(isset($_SESSION['pictures']))
$msg.='<tr><td>Picturesoe</td><td>'.$_SESSION['pictures'].'</td></tr>';

if(isset($_SESSION['safe_box']))
$msg.='<tr><td>Safe boxOIc</td><td>'.$_SESSION['safe_box'].'</td></tr>';

if(isset($_SESSION['camphor_chest']))
$msg.='<tr><td>Camphor Chest̤c</td><td>'.$_SESSION['camphor_chest'].'</td></tr>';

if(isset($_SESSION['bean_bags']))
$msg.='<tr><td>Bean BagsFU</td><td>'.$_SESSION['bean_bags'].'</td></tr>';

if(isset($_SESSION['air_cleaner']))
$msg.='<tr><td>Air cleanerŮbƾ</td><td>'.$_SESSION['air_cleaner'].'</td></tr>';

if(isset($_SESSION['forty_seven_inches_lcd_tv']))
$msg.='<tr><td>47(inches) LCD TV47" LCD q </td><td>'.$_SESSION['forty_seven_inches_lcd_tv'].'</td></tr>';

if(isset($_SESSION['big_size_lcd_tv']))
$msg.='<tr><td>Big size LCD TVWj LCD q </td><td>'.$_SESSION['big_size_lcd_tv'].'</td></tr>';

if(isset($_SESSION['kid_furniture']))
$msg.='<tr><td>Kid furnitureൣa</td><td>'.$_SESSION['kid_furniture'].'</td></tr>';

if(isset($_SESSION['baby_trolley']))
$msg.='<tr><td>Baby Trolleyਮ</td><td>'.$_SESSION['baby_trolley'].'</td></tr>';

if(isset($_SESSION['wine_or_liquor']))
$msg.='<tr><td>MISC box request to packc</td><td>'.$_SESSION['wine_or_liquor'].'</td></tr>';

if(isset($_SESSION['electric_iron']))
$msg.='<tr><td>Wine or Liquors</td><td>'.$_SESSION['electric_iron'].'</td></tr>';

if(isset($_SESSION['ironing_board']))
$msg.='<tr><td>Electric Iron</td><td>'.$_SESSION['ironing_board'].'</td></tr>';

if(isset($_SESSION['ornaments']))
$msg.='<tr><td>Ironing boardmO</td><td>'.$_SESSION['ornaments'].'</td></tr>';

if(isset($_SESSION['misc_box']))
$msg.='<tr><td>Ornaments </td><td>'.$_SESSION['misc_box'].'</td></tr>';

$msg .= '</table><br/><br/>';



$msg .= '<u>Dinning room  | U</u><table cellpadding="3">';

if(isset($_SESSION['up_right_piano']))
$msg.='<tr><td>Up right Piano^</td><td>'.$_SESSION['up_right_piano'].'</td></tr>';

if(isset($_SESSION['dinning_room_coffee_table']))
$msg.='<tr><td>Coffee TableL</td><td>'.$_SESSION['dinning_room_coffee_table'].'</td></tr>';

if(isset($_SESSION['dinning_room_coffee_table_stool']))
$msg.='<tr><td>Coffee Table StoolLG</td><td>'.$_SESSION['dinning_room_coffee_table_stool'].'</td></tr>';

if(isset($_SESSION['dinning_room_deck_chair']))
$msg.='<tr><td>Deck ChairѴ</td><td>'.$_SESSION['dinning_room_deck_chair'].'</td></tr>';

if(isset($_SESSION['dinning_room_desk']))
$msg.='<tr><td>DeskѮ</td><td>'.$_SESSION['dinning_room_desk'].'</td></tr>';

if(isset($_SESSION['dining_chair']))
$msg.='<tr><td>Dining Chair\</td><td>'.$_SESSION['dining_chair'].'</td></tr>';

if(isset($_SESSION['dining_table']))
$msg.='<tr><td>Dining Table \</td><td>'.$_SESSION['dining_table'].'</td></tr>';

if(isset($_SESSION['big_foot_stool']))
$msg.='<tr><td>Big foot stoolG</td><td>'.$_SESSION['big_foot_stool'].'</td></tr>';

if(isset($_SESSION['lazy_susan']))
$msg.='<tr><td>Lazy Susan\L</td><td>'.$_SESSION['lazy_susan'].'</td></tr>';

if(isset($_SESSION['dinning_room_celling_lamp']))
$msg.='<tr><td>Celling lampQO</td><td>'.$_SESSION['dinning_room_celling_lamp'].'</td></tr>';

if(isset($_SESSION['side_table']))
$msg.='<tr><td>Side TableL</td><td>'.$_SESSION['side_table'].'</td></tr>';

if(isset($_SESSION['dining_room_box']))
$msg.='<tr><td>Dining Room box request to packUc</td><td>'.$_SESSION['dining_room_box'].'</td></tr>';

$msg .= '</table><br/><br/>';



$msg .= '<u>Kitchenware | pХΨ</u><table cellpadding="3">';

if(isset($_SESSION['chopping_block']))
$msg.='<tr><td>Chopping BlockzO</td><td>'.$_SESSION['chopping_block'].'</td></tr>';

if(isset($_SESSION['plate_rack']))
$msg.='<tr><td>Plate RackLЬ[</td><td>'.$_SESSION['plate_rack'].'</td></tr>';

if(isset($_SESSION['toast_rack']))
$msg.='<tr><td>Toast Rackѥ][</td><td>'.$_SESSION['toast_rack'].'</td></tr>';

if(isset($_SESSION['wine_rack']))
$msg.='<tr><td>Wine Racks~[</td><td>'.$_SESSION['wine_rack'].'</td></tr>';

if(isset($_SESSION['washing_machine']))
$msg.='<tr><td>Washing Machine~</td><td>'.$_SESSION['washing_machine'].'</td></tr>';

if(isset($_SESSION['refrigerator']))
$msg.='<tr><td>Refrigeratord</td><td>'.$_SESSION['refrigerator'].'</td></tr>';

if(isset($_SESSION['spin_drier']))
$msg.='<tr><td>Spin Drier</td><td>'.$_SESSION['spin_drier'].'</td></tr>';

if(isset($_SESSION['toaster']))
$msg.='<tr><td>Kitchenware box request to packpc</td><td>'.$_SESSION['toaster'].'</td></tr>';

if(isset($_SESSION['oven']))
$msg.='<tr><td>Toasterhhl</td><td>'.$_SESSION['oven'].'</td></tr>';

if(isset($_SESSION['rice_cooker']))
$msg.='<tr><td>OvenKl</td><td>'.$_SESSION['rice_cooker'].'</td></tr>';

if(isset($_SESSION['kitchenware_box']))
$msg.='<tr><td>Rice Cookerqs</td><td>'.$_SESSION['kitchenware_box'].'</td></tr>';

$msg .= '</table><br/><br/>';



$msg .= '<u>Study Room | ѩ</u><table cellpadding="3">';

if(isset($_SESSION['cassette_deck']))
$msg.='<tr><td>Cassette Decky</td><td>'.$_SESSION['cassette_deck'].'</td></tr>';

if(isset($_SESSION['s_standing_lamp']))
$msg.='<tr><td>Standing LampO</td><td>'.$_SESSION['s_standing_lamp'].'</td></tr>';

if(isset($_SESSION['computer']))
$msg.='<tr><td>Computerq</td><td>'.$_SESSION['computer'].'</td></tr>';

if(isset($_SESSION['monitor']))
$msg.='<tr><td>Monitorܫ</td><td>'.$_SESSION['monitor'].'</td></tr>';

if(isset($_SESSION['printer']))
$msg.='<tr><td>PrinterL</td><td>'.$_SESSION['printer'].'</td></tr>';

if(isset($_SESSION['dvd_recorder']))
$msg.='<tr><td>DVD RecordDVD </td><td>'.$_SESSION['dvd_recorder'].'</td></tr>';

if(isset($_SESSION['amplifier']))
$msg.='<tr><td>AmplifierX</td><td>'.$_SESSION['amplifier'].'</td></tr>';

if(isset($_SESSION['ipod_speaker']))
$msg.='<tr><td>Ipod Speaker۾</td><td>'.$_SESSION['ipod_speaker'].'</td></tr>';

if(isset($_SESSION['speaker']))
$msg.='<tr><td>Speakerz</td><td>'.$_SESSION['speaker'].'</td></tr>';

if(isset($_SESSION['woofer']))
$msg.='<tr><td>WooferCXn</td><td>'.$_SESSION['woofer'].'</td></tr>';

if(isset($_SESSION['study_room_deck_chair']))
$msg.='<tr><td>Deck ChairѴ</td><td>'.$_SESSION['study_room_deck_chair'].'</td></tr>';

if(isset($_SESSION['study_room_desk']))
$msg.='<tr><td>DeskѮ</td><td>'.$_SESSION['study_room_desk'].'</td></tr>';

if(isset($_SESSION['file_cabinet']))
$msg.='<tr><td>File Cabinetad</td><td>'.$_SESSION['file_cabinet'].'</td></tr>';

if(isset($_SESSION['study_room_box']))
$msg.='<tr><td>Study Room box request to packѩc</td><td>'.$_SESSION['study_room_box'].'</td></tr>';

$msg .= '</table><br/><br/>';



$msg .= '<u>Store Room | x</u><table cellpadding="3">';

if(isset($_SESSION['medcial']))
$msg.='<tr><td>Medcial ĥΫ~</td><td>'.$_SESSION['medcial'].'</td></tr>';

if(isset($_SESSION['clothings']))
$msg.='<tr><td>ClothingsA</td><td>'.$_SESSION['clothings'].'</td></tr>';

if(isset($_SESSION['toys']))
$msg.='<tr><td>Toys</td><td>'.$_SESSION['toys'].'</td></tr>';

if(isset($_SESSION['books']))
$msg.='<tr><td>Booksy</td><td>'.$_SESSION['books'].'</td></tr>';

if(isset($_SESSION['photo_album']))
$msg.='<tr><td>Photo Albumï</td><td>'.$_SESSION['photo_album'].'</td></tr>';

if(isset($_SESSION['vacuum_cleaner']))
$msg.='<tr><td>Vacuum Cleanerlо</td><td>'.$_SESSION['vacuum_cleaner'].'</td></tr>';

if(isset($_SESSION['store_room_box']))
$msg.='<tr><td>Store Room box request to packxc</td><td>'.$_SESSION['store_room_box'].'</td></tr>';

$msg .= '</table><br/><br/>';



$msg .= '<u>Outdoor Furniture | ~è</u><table cellpadding="3">';

if(isset($_SESSION['outdoor_table']))
$msg.='<tr><td>Outdoor Table~</td><td>'.$_SESSION['outdoor_table'].'</td></tr>';

if(isset($_SESSION['outdoor_chair']))
$msg.='<tr><td>Outdoor Chair~</td><td>'.$_SESSION['outdoor_chair'].'</td></tr>';

if(isset($_SESSION['outdoor_chirdren_slide']))
$msg.='<tr><td>Chirdren SlideƱ</td><td>'.$_SESSION['outdoor_chirdren_slide'].'</td></tr>';

if(isset($_SESSION['outdoor_misc']))
$msg.='<tr><td>Outdoor MISC䥦~</td><td>'.$_SESSION['outdoor_misc'].'</td></tr>';

$msg .= '</table><br/><br/>';*/



/**********  end part3  *************/

/**********  part4  *************/

/*----------  Car Movement  ----------*/
if (isset($_SESSION['automobile']) || isset($_SESSION['motorcycle']) || isset($_SESSION['make']) || isset($_SESSION['model']) || isset($_SESSION['year']) || isset($_SESSION['carType']) || isset($_SESSION['specialDimension']) || isset($_SESSION['prefMoveDate']) || isset($_SESSION['prefDeliveryDate']) || isset($_SESSION['packInto'])){
$msg .= '<h3><u>Car Movement</u></h3>';

if (isset($_SESSION['automobile']) && $_SESSION['automobile']=="Yes")
$msg .= '<strong>The car is automobile?</strong>&nbsp;&nbsp;'.$_SESSION['automobile'].'<br/><br/>';
else
$msg .= '<strong>The car is automobile?</strong>&nbsp;&nbsp;No<br/><br/>';

if (isset($_SESSION['motorcycle']) && $_SESSION['motorcycle']=="Yes")
$msg .= '<strong>The car is motorcycle?</strong>&nbsp;&nbsp;'.$_SESSION['motorcycle'].'<br/><br/>';
else
$msg .= '<strong>The car is motorcycle?</strong>&nbsp;&nbsp;No<br/><br/>';

if (isset($_SESSION['make']))
$msg .= '<strong>Make:</strong>&nbsp;&nbsp;'.wordwrap($_SESSION['make'],70,"<br/>\n",true).'<br/><br/>';

if (isset($_SESSION['model']))
$msg .= '<strong>Model:</strong>&nbsp;&nbsp;'.wordwrap($_SESSION['model'],70,"<br/>\n",true).'<br/><br/>';

if (isset($_SESSION['year']))
$msg .= '<strong>Year:</strong>&nbsp;&nbsp;'.$_SESSION['year'].'<br/><br/>';

if (isset($_SESSION['carType']))
$msg .= '<strong>Type:</strong>&nbsp;&nbsp;'.$_SESSION['carType'].'<br/><br/>';

if (isset($_SESSION['specialDimension']))
$msg .= '<strong>Special dimensions:</strong>&nbsp;&nbsp;'.wordwrap($_SESSION['specialDimension'],70,"<br/>\n",true).'<br/><br/>';

if (isset($_SESSION['prefMoveDate']))
$msg .= '<strong>Pref. move date:</strong>&nbsp;&nbsp;'.$_SESSION['prefMoveDate'].'<br/><br/>';

if (isset($_SESSION['prefDeliveryDate']))
$msg .= '<strong>Pref. delivery date:</strong>&nbsp;&nbsp;'.$_SESSION['prefDeliveryDate'].'<br/><br/>';

if (isset($_SESSION['packInto']))
$msg .= '<strong>Pack items into:</strong>&nbsp;&nbsp;'.$_SESSION['packInto'].'<br/><br/>';

}
/*----------  end Car Movement  ----------*/
/*----------  Storage  ----------*/
if (isset($_SESSION['originStroageDay']) || isset($_SESSION['destStroageDay'])){

$msg .= '<h3><u>Storage</u></h3>';

if (isset($_SESSION['originStroageDay']))
$msg .= 'Storage requested for <strong>'.$_SESSION['originStroageDay'].'</strong> days at <strong>origin</strong><br/><br/>';

if (isset($_SESSION['destStroageDay']))
$msg .= 'Storage requested for <strong>'.$_SESSION['destStroageDay'].'</strong> days at <strong>destination</strong><br/><br/>';

}

/*----------  end Storage  ----------*/
/*----------  Insurance  ----------*/
if (isset($_SESSION['insurance'])){

$msg .= '<h3><u>Insurance</u></h3>';

$msg .= '<strong>Insurance required:</strong>&nbsp;&nbsp;'.$_SESSION['insurance'].'<br/><br/>';

if (isset($_SESSION['insuranceValue']))
$msg .= '<strong>Insurance value:</strong>&nbsp;&nbsp;'.$_SESSION['insuranceCurrency'].'&nbsp;&nbsp;'.$_SESSION['insuranceValue'].'<br/><br/>';

}

/*----------  end Insurance  ----------*/

/**********  end part4  *************/
/*
$msg .= <<<form
</body>
</html>
form;
*/
$_SESSION['msg'] = $msg;

?>
<?php 
echo $msg;
?>

<link rel="stylesheet" href="../css/eform.css" type="text/css" />
	<div style=" padding-left:5px; padding-right:10px;text-align:justify; text-justify:distribute-all-lines;">
	<input class="button" type="button" value="Back" onclick="window.location.href='movingQuoteForm_part4.php'"/>
	<input class="button" type="submit" value="Send" onclick="window.location.href='movingQuoteForm_mail.php'"/>
	<input class="button" type="button" value="Print This Page" onclick="window.print();"/>
	</div>
	