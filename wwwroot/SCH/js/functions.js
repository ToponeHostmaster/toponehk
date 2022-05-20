//shortcut for document.ready
$(function(){

	//setup the nav
	
	$('#au1_Link').scrollTo();
	$('#au2_Link').scrollTo();
	$('#au3_Link').scrollTo();
	$('#au4_Link').scrollTo();
	$('#au5_Link').scrollTo();
	$('#au6_Link').scrollTo();
	$('#au7_Link').scrollTo();
	$('#au8_Link').scrollTo();
	
	
	$('#defaultLink').scrollTo();
	$('#offsetLink').scrollTo({
		offset:-100
	});
	$('#fastLink').scrollTo({
		speed: 'fast'
	});
	$('#slowLink').scrollTo({
		speed: 5000
	});
	
	$('#easeOut').scrollTo({
		easing:'easeOutBounce',
		speed:2000
	});
	
	//grab all the back buttons so they work correctly
	$('.back').scrollTo();
	

});