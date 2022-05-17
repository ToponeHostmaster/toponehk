// JavaScript Document
$(document).ready(function() {
    $("a[name^='faq-']").each(function () {
        $("#" + this.name).hide();
		$(this).click(function() {
			if( $("#" + this.name).is(':hidden') ) {
				$("#" + this.name).fadeIn('slow');
			} else {
				$("#" + this.name).fadeOut('slow');
			}			
			return false;
		});
	});
});

function verifyEmail(SubscribeForm, msg){
var alertText = msg; 
var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
     if (SubscribeForm.email.value.search(emailRegEx) == -1) {
          alert(alertText);
		    return (false)
     }
     else {
          return (true)
     }
}