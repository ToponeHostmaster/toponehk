﻿			//var check = 0;
			function formValidator() {
			    var check = 0;
                var name = document.getElementById('name');
                var email = document.getElementById('email');
                var message = document.getElementById('message');
				var telephone = document.getElementById('telephone');
				var code_math = document.getElementById('code_math');
				var captcharesponse = grecaptcha.getResponse();
		//alert(name);
		//alert(code_math.value);
              
                if (isEmpty(name, 'Please fill in Name CONTACT')) {
                    return false;
                }
				
                if (isEmpty(email, 'Please fill in E-mail')) {
                    return false;
                }
				if (!emailValidator(email, 'Please fill in a valid E-mail')) {
                    return false;
                }
				
				if (isEmpty(telephone, 'Please fill in phone number')) {
                    return false;
                }
				
                if (isEmpty(message, 'Please fill in enquiry detail')) {
                    return false;
                }
                if (captcharesponse.length ==0 ) {		//reCaptcha not verified
                    alert("Please do the verification");
                    return false;
                }
                else {
                    return true;
                }
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
			
			$(function(){
				
				$("#getcode_math").click(function(){
					$(this).attr("src",'code_math.php?' + Math.random());
				});
		 		
				$("#check_code").on("mouseover", function (){

				    var code_math = $("#code_math").val();
				    $.post("check_code.php?act=math", { code: code_math }, function (flag) {

				        if (flag == 1) {
				            check = 1;
				        } else {
				            check = 0;
				        }
				    });
				});
			 });
