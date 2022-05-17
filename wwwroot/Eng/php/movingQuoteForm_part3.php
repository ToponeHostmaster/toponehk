<?php

session_start();

if (!isset($_SESSION['page1']))
header('location:movingQuoteForm_part1.php');
if (!isset($_SESSION['page2']))
header('location:movingQuoteForm_part2.php');

unset(
$_SESSION['m_bed_super_king_size'],
$_SESSION['m_mattress_super_king'],
$_SESSION['m_bedstand'],
$_SESSION['m_book_cabinet'],
$_SESSION['m_sofa_1_seator'],
$_SESSION['m_sofa_2_seator'],
$_SESSION['m_sofa_3_seator'],
$_SESSION['m_standing_lcd_tv'],
$_SESSION['m_lower_cabinet'],
$_SESSION['m_ornaments_cabinet'],
$_SESSION['m_shoes_cabinet'],
$_SESSION['m_tv_cabinet'],
$_SESSION['m_wall_cupboard'],
$_SESSION['m_wall_unit'],
$_SESSION['m_wardrobe'],
$_SESSION['m_celling_lamp'],
$_SESSION['m_dressing_table'],
$_SESSION['m_dressing_chair'],
$_SESSION['m_clothings'],
$_SESSION['m_pillow'],
$_SESSION['m_quilts'],
$_SESSION['m_shoes'],
$_SESSION['m_window_curtain'],
$_SESSION['m_table_lamp'],
$_SESSION['m_mirror'],
$_SESSION['m_room_box'],

$_SESSION['a_bed_single'],
$_SESSION['a_mattress_single'],
$_SESSION['a_bedstand'],
$_SESSION['a_book_cabinet'],
$_SESSION['a_deck_chair'],
$_SESSION['a_desk'],
$_SESSION['a_celling_lamp'],
$_SESSION['a_clothings'],
$_SESSION['a_pillow'],
$_SESSION['a_quilts'],
$_SESSION['a_shoes'],
$_SESSION['a_window_curtain'],
$_SESSION['a_table_lamp'],
$_SESSION['a_mirror'],
$_SESSION['a_bed_room_box'],

$_SESSION['b_cot'],
$_SESSION['b_lower_cabinet'],
$_SESSION['b_book_cabinet'],
$_SESSION['b_deck_chair'],
$_SESSION['b_desk'],
$_SESSION['b_celling_lamp'],
$_SESSION['b_baby_stuffs'],
$_SESSION['b_clothings'],
$_SESSION['b_pillow'],
$_SESSION['b_quilts'],
$_SESSION['b_window_curtain'],
$_SESSION['b_bed_room_box'],

$_SESSION['fabric_guest_chair'],
$_SESSION['table_che_bre'],
$_SESSION['chair_che_bre'],
$_SESSION['living_room_coffee_table'],
$_SESSION['living_room_coffee_table_stool'],
$_SESSION['living_room_deck_chair'],
$_SESSION['living_room_desk'],
$_SESSION['wooden_wine_cabinet'],
$_SESSION['partitions'],
$_SESSION['metal_bridcage_with_stand'],
$_SESSION['side_table_glass_top'],
$_SESSION['living_room_sofa_1_seator'],
$_SESSION['living_room_sofa_2_seator'],
$_SESSION['living_room_sofa_3_seator'],
$_SESSION['hi_fi'],
$_SESSION['chandelier'],
$_SESSION['l_standing_lamp'],
$_SESSION['thirty_seven_inches_lcd_tv'],
$_SESSION['massage_chair'],
$_SESSION['Vase'],
$_SESSION['chinaware'],
$_SESSION['living_room_box'],

$_SESSION['pictures'],
$_SESSION['safe_box'],
$_SESSION['camphor_chest'],
$_SESSION['bean_bags'],
$_SESSION['air_cleaner'],
$_SESSION['forty_seven_inches_lcd_tv'],
$_SESSION['big_size_lcd_tv'],
$_SESSION['kid_furniture'],
$_SESSION['baby_trolley'],
$_SESSION['wine_or_liquor'],
$_SESSION['electric_iron'],
$_SESSION['ironing_board'],
$_SESSION['ornaments'],
$_SESSION['misc_box'],

$_SESSION['up_right_piano'],
$_SESSION['dinning_room_coffee_table'],
$_SESSION['dinning_room_coffee_table_stool'],
$_SESSION['dinning_room_deck_chair'],
$_SESSION['dinning_room_desk'],
$_SESSION['dining_chair'],
$_SESSION['dining_table'],
$_SESSION['big_foot_stool'],
$_SESSION['lazy_susan'],
$_SESSION['dinning_room_celling_lamp'],
$_SESSION['side_table'],
$_SESSION['dining_room_box'],

$_SESSION['chopping_block'],
$_SESSION['plate_rack'],
$_SESSION['toast_rack'],
$_SESSION['wine_rack'],
$_SESSION['washing_machine'],
$_SESSION['refrigerator'],
$_SESSION['spin_drier'],
$_SESSION['toaster'],
$_SESSION['oven'],
$_SESSION['rice_cooker'],
$_SESSION['kitchenware_box'],

$_SESSION['cassette_deck'],
$_SESSION['s_standing_lamp'],
$_SESSION['computer'],
$_SESSION['monitor'],
$_SESSION['printer'],
$_SESSION['dvd_recorder'],
$_SESSION['amplifier'],
$_SESSION['ipod_speaker'],
$_SESSION['speaker'],
$_SESSION['woofer'],
$_SESSION['study_room_deck_chair'],
$_SESSION['study_room_desk'],
$_SESSION['file_cabinet'],
$_SESSION['study_room_box'],

$_SESSION['medcial'],
$_SESSION['clothings'],
$_SESSION['toys'],
$_SESSION['books'],
$_SESSION['photo_album'],
$_SESSION['vacuum_cleaner'],
$_SESSION['store_room_box'],

$_SESSION['outdoor_table'],
$_SESSION['outdoor_chair'],
$_SESSION['outdoor_chirdren_slide'],
$_SESSION['outdoor_misc']
);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Item list</title>
<link rel="stylesheet" href="../css/eform.css" type="text/css" />
<script type="text/javascript" src="../js/eformchecking.js"></script>

</head>

<body class="page3style">
<hr/>
<form method="post" action="part3.php">

<table class="tableStyle" width="100%">
  <caption class="firstTableTitle page3title">
    Item List
  </caption>
  <tr>

  	<td align="center" style="vertical-align:text-top;">

	  <table cellspacing="1" cellpadding="3" border="1">
		<tr>
		  <th class="tableFontStyle page3Master">Master Room Furniture</th>
		  <th class="tableFontStyle page3Master">主人房間傢具</th>
		  <th class="tableFontStyle page3Master">QTY</th>
		</tr>
		<tr>
		  <td class="page3TableColor">Bed (super King size)</td>
		  <td class="page3TableColor">雙人床</td>
		  <td class="page3TableColor"><input maxlength="4" 
			onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" 
			type='text' size='4' id='m_bed_super_king_size'
		    name='m_bed_super_king_size'/>
			</td>
		</tr>
		<tr>
		  <td class="page3TableColor">Mattress (Super king )</td>
		  <td class="page3TableColor">雙人床褥</td>
		  <td class="page3TableColor"><input maxlength="4" 
			onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');"
			type='text' size='4' id='m_mattress_super_king' name='m_mattress_super_king'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Bedstand</td>
		  <td class="page3TableColor">床頭櫃</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='m_bedstand' name='m_bedstand'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Book Cabinet</td>
		  <td class="page3TableColor">書櫃</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='m_book_cabinet' name='m_book_cabinet'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Sofa (1 seator)</td>
		  <td class="page3TableColor">沙發一座位</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='m_sofa_1_seator' name='m_sofa_1_seator'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Sofa (2 seators)</td>
		  <td class="page3TableColor">沙發二座位</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='m_sofa_2_seator' name='m_sofa_2_seator'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Sofa (3 seators)</td>
		  <td class="page3TableColor">沙發三座位</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='m_sofa_3_seator' name='m_sofa_3_seator'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Standing LCD TV</td>
		  <td class="page3TableColor">LCD 電視機 </td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='m_standing_lcd_tv' name='m_standing_lcd_tv'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Lower Cabinet</td>
		  <td class="page3TableColor">地櫃</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='m_lower_cabinet' name='m_lower_cabinet'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Ornaments Cabinet</td>
		  <td class="page3TableColor">飾物櫃</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='m_ornaments_cabinet' name='m_ornaments_cabinet'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Shoes Cabinet</td>
		  <td class="page3TableColor">鞋櫃</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='m_shoes_cabinet' name='m_shoes_cabinet'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">TV Cabinet</td>
		  <td class="page3TableColor">電視櫃</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='m_tv_cabinet' name='m_tv_cabinet'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Wall Cupboard</td>
		  <td class="page3TableColor">吊櫃</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='m_wall_cupboard' name='m_wall_cupboard'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Wall Unit</td>
		  <td class="page3TableColor">組合櫃</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='m_wall_unit' name='m_wall_unit'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Wardrobe</td>
		  <td class="page3TableColor">衣廚</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='m_wardrobe' name='m_wardrobe'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Celling Lamp</td>
		  <td class="page3TableColor">吊燈</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='m_celling_lamp' name='m_celling_lamp'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Dressing Table</td>
		  <td class="page3TableColor">梳粧桌</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='m_dressing_table' name='m_dressing_table'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Dressing Chair</td>
		  <td class="page3TableColor">梳粧椅</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='m_dressing_chair' name='m_dressing_chair'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Clothings</td>
		  <td class="page3TableColor">衣服</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='m_clothings' name='m_clothings'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Pillow</td>
		  <td class="page3TableColor">枕頭</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='m_pillow' name='m_pillow'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Quilts</td>
		  <td class="page3TableColor">棉被</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='m_quilts' name='m_quilts'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Shoes</td>
		  <td class="page3TableColor">鞋</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='m_shoes' name='m_shoes'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Window Curtain</td>
		  <td class="page3TableColor">窗簾</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='m_window_curtain' name='m_window_curtain'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Table Lamp</td>
		  <td class="page3TableColor">座桌燈</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='m_table_lamp' name='m_table_lamp'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Mirror</td>
		  <td class="page3TableColor">鏡</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='m_mirror' name='m_mirror'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Master Room box request to pack</td>
		  <td class="page3TableColor">主人房雜物箱</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='m_room_box' name='m_room_box'/></td>
		</tr>
	  </table>

	  <p>&nbsp;</p>
	  
	  <table cellspacing="1" cellpadding="3" border="1">
		<tr>
		  <th class="tableFontStyle page3RoomA">Bed Room (A) Furniture</th>
		  <th class="tableFontStyle page3RoomA">睡房 (A)</th>
		  <th class="tableFontStyle page3RoomA">QTY</th>
		</tr>
		<tr>
		  <td class="page3TableColor">Bed (Single)</td>
		  <td class="page3TableColor">單人床</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='a_bed_single' name='a_bed_single'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Mattress (Single)</td>
		  <td class="page3TableColor">單人床褥</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='a_mattress_single' name='a_mattress_single'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Bedstand</td>
		  <td class="page3TableColor">床頭櫃</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='a_bedstand' name='a_bedstand'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Book Cabinet</td>
		  <td class="page3TableColor">書櫃</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='a_book_cabinet' name='a_book_cabinet'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Deck Chair</td>
		  <td class="page3TableColor">書椅</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='a_deck_chair' name='a_deck_chair'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Desk</td>
		  <td class="page3TableColor">書桌</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='a_desk' name='a_desk'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Celling Lamp</td>
		  <td class="page3TableColor">吊燈</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='a_celling_lamp' name='a_celling_lamp'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Clothings</td>
		  <td class="page3TableColor">衣服</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='a_clothings' name='a_clothings'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Pillow</td>
		  <td class="page3TableColor">枕頭</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='a_pillow' name='a_pillow'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Quilts</td>
		  <td class="page3TableColor">棉被</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='a_quilts' name='a_quilts'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Shoes</td>
		  <td class="page3TableColor">鞋</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='a_shoes' name='a_shoes'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Window Curtain</td>
		  <td class="page3TableColor">窗簾</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='a_window_curtain' name='a_window_curtain'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Table Lamp</td>
		  <td class="page3TableColor">座桌燈</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='a_table_lamp' name='a_table_lamp'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Mirror</td>
		  <td class="page3TableColor">鏡</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='a_mirror' name='a_mirror'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Bed Room (A) box request to pack</td>
		  <td class="page3TableColor">睡房 (A) 雜物箱</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='a_bed_room_box' name='a_bed_room_box'/></td>
		</tr>
	  </table>
	  
	  <p>&nbsp;</p>
	  
	  <table cellspacing="1" cellpadding="3" border="1">
		<tr>
		  <th class="tableFontStyle page3RoomB">Bed Room (B) Furniture</th>
		  <th class="tableFontStyle page3RoomB">睡房 (B)</th>
		  <th class="tableFontStyle page3RoomB">QTY</th>
		</tr>
		<tr>
		  <td class="page3TableColor">Cot</td>
		  <td class="page3TableColor">幼兒床</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='b_cot' name='b_cot'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Lower Cabinet</td>
		  <td class="page3TableColor">地櫃</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='b_lower_cabinet' name='b_lower_cabinet'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Book Cabinet</td>
		  <td class="page3TableColor">書櫃</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='b_book_cabinet' name='b_book_cabinet'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Deck-chair</td>
		  <td class="page3TableColor">書椅</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='b_deck_chair' name='b_deck_chair'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Desk</td>
		  <td class="page3TableColor">書桌</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='b_desk' name='b_desk'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Celling Lamp</td>
		  <td class="page3TableColor">吊燈</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='b_celling_lamp' name='b_celling_lamp'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Baby stuffs</td>
		  <td class="page3TableColor">嬰兒用品</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='b_baby_stuffs' name='b_baby_stuffs'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Clothings</td>
		  <td class="page3TableColor">衣服</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='b_clothings' name='b_clothings'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Pillow</td>
		  <td class="page3TableColor">枕頭</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='b_pillow' name='b_pillow'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Quilts</td>
		  <td class="page3TableColor">棉被</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='b_quilts' name='b_quilts'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Window Curtain</td>
		  <td class="page3TableColor">窗簾</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='b_window_curtain' name='b_window_curtain'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Bed Room (B) box request to pack</td>
		  <td class="page3TableColor">睡房 (B) 雜物箱</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='b_bed_room_box' name='b_bed_room_box'/></td>
		</tr>
	  </table>
	  
	  <p>&nbsp;</p>
	  
	  <table cellspacing="1" cellpadding="3" border="1">
		<tr>
		  <th class="tableFontStyle page3Living">Living Room</th>
		  <th class="tableFontStyle page3Living">客廳</th>
		  <th class="tableFontStyle page3Living">QTY</th>
		</tr>
		<tr>
		  <td class="page3TableColor">Fabric guest chair</td>
		  <td class="page3TableColor">單座大椅</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='fabric_guest_chair' name='fabric_guest_chair'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Table (ChE/BrE)</td>
		  <td class="page3TableColor">中式/英式餐桌</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='table_che_bre' name='table_che_bre'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Chair (ChE/BrE)</td>
		  <td class="page3TableColor">中式/英式餐椅</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='chair_che_bre' name='chair_che_bre'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Coffee Table</td>
		  <td class="page3TableColor">茶几</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='living_room_coffee_table' name='living_room_coffee_table'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Coffee Table Stool</td>
		  <td class="page3TableColor">茶几矮凳</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='living_room_coffee_table_stool' name='living_room_coffee_table_stool'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Deck Chair</td>
		  <td class="page3TableColor">書椅</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='living_room_deck_chair' name='living_room_deck_chair'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Desk</td>
		  <td class="page3TableColor">書桌</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='living_room_desk' name='living_room_desk'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Wooden wine cabinet</td>
		  <td class="page3TableColor">木酒櫃</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='wooden_wine_cabinet' name='wooden_wine_cabinet'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Partitions</td>
		  <td class="page3TableColor">屏風</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='partitions' name='partitions'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Metal Bridcage with stand</td>
		  <td class="page3TableColor">大鳥籠</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='metal_bridcage_with_stand' name='metal_bridcage_with_stand'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Side Table (glass top)</td>
		  <td class="page3TableColor">角几</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='side_table_glass_top' name='side_table_glass_top'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Sofa (1 seator)</td>
		  <td class="page3TableColor">沙發一座位</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='living_room_sofa_1_seator' name='living_room_sofa_1_seator'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Sofa (2 seators)</td>
		  <td class="page3TableColor">沙發二座位</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='living_room_sofa_2_seator' name='living_room_sofa_2_seator'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Sofa (3 seators)</td>
		  <td class="page3TableColor">沙發三座位</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='living_room_sofa_3_seator' name='living_room_sofa_3_seator'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Hi Fi</td>
		  <td class="page3TableColor">音響</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='hi_fi' name='hi_fi'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Chandelier</td>
		  <td class="page3TableColor">吊燈</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='chandelier' name='chandelier'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Standing Lamp</td>
		  <td class="page3TableColor">企燈</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='l_standing_lamp' name='l_standing_lamp'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">37(inches) LCD TV</td>
		  <td class="page3TableColor">37&quot;    LCD 電視機 </td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='thirty_seven_inches_lcd_tv' name='thirty_seven_inches_lcd_tv'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Massage Chair</td>
		  <td class="page3TableColor">按摩椅</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='massage_chair' name='massage_chair'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Vase</td>
		  <td class="page3TableColor">花瓶</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='Vase' name='Vase'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Chinaware</td>
		  <td class="page3TableColor">瓷器</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='chinaware' name='chinaware'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Living Room box request to pack</td>
		  <td class="page3TableColor">客廳雜物箱</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='living_room_box' name='living_room_box'/></td>
		</tr>
	  </table>
	  
	  <p>&nbsp;</p>

	</td>

	<td align="center" style="vertical-align:text-top;">
	
	  <table cellspacing="1" cellpadding="3" border="1">
		<tr>
		  <th class="tableFontStyle page3MISC">MISC</th>
		  <th class="tableFontStyle page3MISC">其它物件</th>
		  <th class="tableFontStyle page3MISC">QTY</th>
		</tr>
		<tr>
		  <td class="page3TableColor">Pictures</td>
		  <td class="page3TableColor">油畫</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='pictures' name='pictures'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Safe box</td>
		  <td class="page3TableColor">保險箱</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='safe_box' name='safe_box'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Camphor Chest</td>
		  <td class="page3TableColor">樟木箱</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='camphor_chest' name='camphor_chest'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Bean Bags</td>
		  <td class="page3TableColor">沙袋</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='bean_bags' name='bean_bags'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Air cleaner</td>
		  <td class="page3TableColor">空氣淨化機</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='air_cleaner' name='air_cleaner'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">47(inches) LCD TV</td>
		  <td class="page3TableColor">47&quot; LCD 電視機 </td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='forty_seven_inches_lcd_tv' name='forty_seven_inches_lcd_tv'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Big size LCD TV</td>
		  <td class="page3TableColor">超大形 LCD 電視機 </td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='big_size_lcd_tv' name='big_size_lcd_tv'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Kid furniture</td>
		  <td class="page3TableColor">兒童家具</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='kid_furniture' name='kid_furniture'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Baby Trolley</td>
		  <td class="page3TableColor">嬰兒車</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='baby_trolley' name='baby_trolley'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Ornaments</td>
		  <td class="page3TableColor">酒類</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='wine_or_liquor' name='wine_or_liquor'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Wine or Liquor</td>
		  <td class="page3TableColor">熨斗</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='electric_iron' name='electric_iron'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Electric Iron</td>
		  <td class="page3TableColor">熨衫板</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='ironing_board' name='ironing_board'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Ironing board</td>
		  <td class="page3TableColor">飾物</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='ornaments' name='ornaments'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">MISC box request to pack</td>
		  <td class="page3TableColor">雜物箱</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='misc_box' name='misc_box'/></td>
		</tr>
	  </table>
	  
	  <p>&nbsp;</p>
		
	  <table cellspacing="1" cellpadding="3" border="1">
		<tr>
		  <th class="tableFontStyle page3Dinning">Dinning room</th>
		  <th class="tableFontStyle page3Dinning">飯廳</th>
		  <th class="tableFontStyle page3Dinning">QTY</th>
		</tr>
		<tr>
		  <td class="page3TableColor">Up right Piano</td>
		  <td class="page3TableColor">鋼琴</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='up_right_piano' name='up_right_piano'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Coffee Table</td>
		  <td class="page3TableColor">茶几</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='dinning_room_coffee_table' name='dinning_room_coffee_table'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Coffee Table Stool</td>
		  <td class="page3TableColor">茶几矮凳</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='dinning_room_coffee_table_stool' name='dinning_room_coffee_table_stool'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Deck Chair</td>
		  <td class="page3TableColor">書椅</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='dinning_room_deck_chair' name='dinning_room_deck_chair'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Desk</td>
		  <td class="page3TableColor">書桌</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='dinning_room_desk' name='dinning_room_desk'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Dining Chair</td>
		  <td class="page3TableColor">餐椅</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='dining_chair' name='dining_chair'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Dining Table</td>
		  <td class="page3TableColor">餐桌</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='dining_table' name='dining_table'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Big foot stool</td>
		  <td class="page3TableColor">矮凳</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='big_foot_stool' name='big_foot_stool'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Lazy Susan</td>
		  <td class="page3TableColor">餐桌轉盤</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='lazy_susan' name='lazy_susan'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Celling lamp</td>
		  <td class="page3TableColor">吊燈</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='dinning_room_celling_lamp' name='dinning_room_celling_lamp'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Side Table</td>
		  <td class="page3TableColor">角几</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='side_table' name='side_table'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Dining Room box request to pack</td>
		  <td class="page3TableColor">飯廳雜物箱</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='dining_room_box' name='dining_room_box'/></td>
		</tr>
	  </table>
	  
	  <p>&nbsp;</p>
	  
	  <table cellspacing="1" cellpadding="3" border="1">
		<tr>
		  <th class="tableFontStyle page3Kitchenware">Kitchenware</th>
		  <th class="tableFontStyle page3Kitchenware">廚房用具</th>
		  <th class="tableFontStyle page3Kitchenware">QTY</th>
		</tr>
		<tr>
		  <td class="page3TableColor">Chopping Block</td>
		  <td class="page3TableColor">砧板</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='chopping_block' name='chopping_block'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Plate Rack</td>
		  <td class="page3TableColor">盤碟架</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='plate_rack' name='plate_rack'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Toast Rack</td>
		  <td class="page3TableColor">麵包片架</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='toast_rack' name='toast_rack'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Wine Rack</td>
		  <td class="page3TableColor">酒瓶架</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='wine_rack' name='wine_rack'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Washing Machine</td>
		  <td class="page3TableColor">洗衣機</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='washing_machine' name='washing_machine'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Refrigerator</td>
		  <td class="page3TableColor">雪櫃</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='refrigerator' name='refrigerator'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Spin Drier</td>
		  <td class="page3TableColor">乾衣機</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='spin_drier' name='spin_drier'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Toaster</td>
		  <td class="page3TableColor">多士爐</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='toaster' name='toaster'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Oven</td>
		  <td class="page3TableColor">焗爐</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='oven' name='oven'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Rice Cooker</td>
		  <td class="page3TableColor">電飯煲</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='rice_cooker' name='rice_cooker'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Kitchenware box request to pack</td>
		  <td class="page3TableColor">廚房雜物箱</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='kitchenware_box' name='kitchenware_box'/></td>
		</tr>
	  </table>
	  
	  <p>&nbsp;</p>
	  
	  <table cellspacing="1" cellpadding="3" border="1">
		<tr>
		  <th class="tableFontStyle page3Study">Study Room</th>
		  <th class="tableFontStyle page3Study">書房</th>
		  <th class="tableFontStyle page3Study">QTY</th>
		</tr>
		<tr>
		  <td class="page3TableColor">Cassette Deck</td>
		  <td class="page3TableColor">錄音座</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='cassette_deck' name='cassette_deck'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Standing Lamp</td>
		  <td class="page3TableColor">企燈</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='s_standing_lamp' name='s_standing_lamp'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Computer</td>
		  <td class="page3TableColor">電腦</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='computer' name='computer'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Monitor</td>
		  <td class="page3TableColor">顯示屏</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='monitor' name='monitor'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Printer</td>
		  <td class="page3TableColor">打印機</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='printer' name='printer'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">DVD Record</td>
		  <td class="page3TableColor">DVD 機</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='dvd_recorder' name='dvd_recorder'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Amplifier</td>
		  <td class="page3TableColor">擴音器</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='amplifier' name='amplifier'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Ipod Speaker</td>
		  <td class="page3TableColor">唱機</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='ipod_speaker' name='ipod_speaker'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Speaker</td>
		  <td class="page3TableColor">喇叭</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='speaker' name='speaker'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Woofer</td>
		  <td class="page3TableColor">低音擴聲器</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='woofer' name='woofer'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Deck Chair</td>
		  <td class="page3TableColor">書椅</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='study_room_deck_chair' name='study_room_deck_chair'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Desk</td>
		  <td class="page3TableColor">書桌</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='study_room_desk' name='study_room_desk'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">File Cabinet</td>
		  <td class="page3TableColor">文件地櫃</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='file_cabinet' name='file_cabinet'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Study Room box request to pack</td>
		  <td class="page3TableColor">書房雜物箱</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='study_room_box' name='study_room_box'/></td>
		</tr>
	  </table>
	  
	  <p>&nbsp;</p>
	  
	  <table cellspacing="1" cellpadding="3" border="1">
		<tr>
		  <th class="tableFontStyle page3Store">Store Room</th>
		  <th class="tableFontStyle page3Store">儲物房</th>
		  <th class="tableFontStyle page3Store">QTY</th>
		</tr>
		<tr>
		  <td class="page3TableColor">Medcial</td>
		  <td class="page3TableColor">醫藥用品</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='medcial' name='medcial'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Clothings</td>
		  <td class="page3TableColor">衣服</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='clothings' name='clothings'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Toys</td>
		  <td class="page3TableColor">玩具</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='toys' name='toys'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Books</td>
		  <td class="page3TableColor">書籍</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='books' name='books'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Photo Album</td>
		  <td class="page3TableColor">相簿</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='photo_album' name='photo_album'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Vacuum Cleaner</td>
		  <td class="page3TableColor">吸塵機</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='vacuum_cleaner' name='vacuum_cleaner'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Store Room box request to pack</td>
		  <td class="page3TableColor">儲物房雜物箱</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='store_room_box' name='store_room_box'/></td>
		</tr>
	  </table>
	  
	  <p>&nbsp;</p>
	  
	  <table cellspacing="1" cellpadding="3" border="1">
		<tr>
		  <th class="tableFontStyle page3Outdoor">Outdoor Furniture</th>
		  <th class="tableFontStyle page3Outdoor">戶外傢具</th>
		  <th class="tableFontStyle page3Outdoor">QTY</th>
		</tr>
		<tr>
		  <td class="page3TableColor">Outdoor Table</td>
		  <td class="page3TableColor">戶外桌</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='outdoor_table' name='outdoor_table'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Outdoor Chair</td>
		  <td class="page3TableColor">戶外椅</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='outdoor_chair' name='outdoor_chair'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Chirdren Slide</td>
		  <td class="page3TableColor">戶外滑梯</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='outdoor_chirdren_slide' name='outdoor_chirdren_slide'/></td>
		</tr>
		<tr>
		  <td class="page3TableColor">Outdoor MISC</td>
		  <td class="page3TableColor">其它戶外物件</td>
		  <td class="page3TableColor"><input maxlength="4" 
onblur="if(!isNull(this.value)&&!isNum(this.value))alert('pls enter a number');" type='text' size='4' id='outdoor_misc' name='outdoor_misc'/></td>
		</tr>
	  </table>
	  
	  <p>&nbsp;</p>
	</td>
  </tr>
</table>
<hr/>
	<div style=" padding-left:5px; padding-right:10px;text-align:justify; text-justify:distribute-all-lines;">
	<input class="button" type="button" value="Back" onclick="window.location.href='movingQuoteForm_part2.php'"/>
	<input class="button" type="submit" value="Next"/>
	</div>
</form>

</body>
</html>
