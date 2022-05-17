<!--

function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=1,scrollbars=1,location=1,statusbar=1,menubar=1,resizable=1,width=820,height=600,left = 112,top = 84');");
}

function popUp(URL, h) {
day = new Date();
id = day.getTime();
features = "toolbar=1,scrollbars=1,location=1,statusbar=1,menubar=1,resizable=1,width=820,height=" + h + ",left = 112,top = 84"
eval("page" + id + " = window.open(URL, '" + id + "', features );");
}

function popUpImage(imgfile) {
day = new Date();
id = day.getTime();
URL = "popupimg.html?imgsrc=" + imgfile
features = "toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=1,width=780,height=520,left =" + ((screen.width - 780)/2) + ",top = " + ((screen.width - 520)/2)
eval("page" + id + " = window.open(URL, '" + id + "', features );");  
}

function ImagePopup(imgfile) {
mywindow = ""; 
URL = "popupimg.aspx?imgsrc=" + imgfile
features = "toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=500,height=400, left=" + ((screen.width - 500)/2) + ",top=" + ((screen.height - 400)/2)
mywindow = window.open (URL, "mywindow", features);
}

function ImagePopup2(imgfile) {
mywindow = ""; 
URL = "popupimg2.aspx?imgsrc=" + imgfile
features = "toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=500,height=400, left=" + ((screen.width - 500)/2) + ",top=" + ((screen.height - 400)/2)
mywindow = window.open (URL, "mywindow", features);
}

function MM_openBrWindow(theURL,winName,feature) { //v2.0
features = "toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=1,width=700,height=600, left=200, top=80"
  window.open(theURL,winName,features);
}

function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function MM_nbGroup(event, grpName) { //v6.0
  var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) {
      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }    
}
//-->