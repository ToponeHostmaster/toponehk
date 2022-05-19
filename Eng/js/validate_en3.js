  function formValidator() {
     var name = document.getElementById('name');
        var email = document.getElementById('email');
        var telephone = document.getElementById('telephone');
        var message = document.getElementById('message');

        if (isEmpty(name, 'Please input your name!')) {
            return false;
        }
        if (isEmpty(telephone, 'Please input the telephone content!')) {
            return false;
        }
        if (isEmpty(email, 'Please input the email address!')) {
            return false;
        }
        if (!emailValidator(email, 'Please input a valid email address!')) {
            return false;
        }
        if (isEmpty(message, 'Please input the message content!')) {
            return false;
        }      
         
         grecaptcha.execute();
     }


     function trim11(str) {
         str = str.replace(/^\s+/, '');
         for (var i = str.length - 1; i >= 0; i--) {
             if (/\S/.test(str.charAt(i))) {
                 str = str.substring(0, i + 1);
                 break;
             }
         }
         return str;
     }


    function isEmpty(elem, helperMsg) {
                var check = elem.value;
                check = trim11(check);
                // check emtype input
                if (check.length == 0) {
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
	
