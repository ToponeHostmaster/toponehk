var check = 0;
function formValidator() {
	var name = document.getElementById('name');
	var email = document.getElementById('email');
	var message = document.getElementById('message');
	var telephone = document.getElementById('telephone');
	//var captcharesponse = grecaptcha.getResponse();
  
	if (isEmpty(name, '請填寫名稱')) {
		return false;
	}
	
	if (isEmpty(email, '請填寫電郵')) {
		return false;
	}
	if (!emailValidator(email, '請填寫有效的電郵')) {
		return false;
	}
	
	if (isEmpty(telephone, '請填寫電話號碼')) {
		return false;
	}
	
	if (isEmpty(message, '請填寫查詢資料')) {
		return false;
}

    grecaptcha.execute();	
}

function isEmpty(elem, helperMsg) {
	if (elem.value.length == 0) {
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return true;
	}
	return false;
}

function emailValidator(elem, helperMsg) {
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if (elem.value.match(emailExp)) {
		return true;
	} else {
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

