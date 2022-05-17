var check = 0
function formValidator() {
  var name = document.getElementById('name')
  var email = document.getElementById('email')
  var message = document.getElementById('message')
  var telephone = document.getElementById('telephone')
  var company = document.getElementById('company')
  var code_math = document.getElementById('code_math')
  var captcharesponse = grecaptcha.getResponse()

  var p1 = document.getElementById('plan1').checked
    ? document.getElementById('plan1').value
    : false
  var p2 = document.getElementById('plan2').checked
    ? document.getElementById('plan2').value
    : false
  var p3 = document.getElementById('plan3').checked
    ? document.getElementById('plan3').value
    : false
  var p4 = document.getElementById('plan4').checked
    ? document.getElementById('plan4').value
    : false
  var planstr = ''
  if (p1) {
    planstr += p1 + ','
  }
  if (p2) {
    planstr += p2 + ','
  }
  if (p3) {
    planstr += p3 + ','
  }
  if (p4) {
    planstr += p4 + ','
  }
  document.getElementById('planstr').value = planstr
  if (isEmpty(name, '請填寫名稱')) {
    return false
  }

  if (isEmpty(email, '請填寫電郵')) {
    return false
  }
  if (!emailValidator(email, '請填寫有效的電郵')) {
    return false
  }

  if (isEmpty(telephone, '請填寫電話號碼')) {
    return false
  }

  if (isEmpty(message, '請填寫查詢資料')) {
    return false
  }
  if (isEmpty(company, '請填寫有效的公司名稱')) {
    return false
  }
  if (captcharesponse.length == 0) {
    //reCaptcha not verified
    alert('請勾選「我不是機器人」進行身份驗証')
    return false
  } else {
    return true
  }
  
}

function isEmpty(elem, helperMsg) {
  if (elem.value.length == 0) {
    alert(helperMsg)
    elem.focus() // set the focus to this input
    return true
  }
  return false
}

function emailValidator(elem, helperMsg) {
  var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/
  if (elem.value.match(emailExp)) {
    return true
  } else {
    alert(helperMsg)
    elem.focus()
    return false
  }
}
