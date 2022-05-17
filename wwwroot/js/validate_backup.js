			var check = 0;
            function formValidator() {
                var name = document.getElementById('name');
                var email = document.getElementById('email');
                var message = document.getElementById('message');
				var telephone = document.getElementById('telephone');
				var code_math = document.getElementById('code_math');
              
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
				
				if (check==1){
					return true;
					}else{
					//alert(check);
					alert("驗證碼不正確，請重新輸入");
					//code_math.value("");
					$("#code_math").val("");
					$("#getcode_math").click();
					code_math.focus(); // set the focus to this input
					return false;
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
					$.post("check_code.php?act=math",{code:code_math},function(flag){
						if (flag == 1) {
							check = 1;
						} else {
							check = 0;
						}
					});
				});
			 });
