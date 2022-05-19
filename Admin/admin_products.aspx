<%@ Page Language="VB" AutoEventWireup="false" CodeFile="admin_products.aspx.vb" Inherits="Admin_admin_products" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Untitled Page</title>
    	<script type="text/javascript" >

function loadPix(){
	imgArr = showModalDialog("ftb.imagegallery.aspx?rif=img/productimages&cif=img/productimages");	

	if (imgArr != null) {
		imagestring = imgArr['filename'];
		width =  imgArr["width"]  ;
	    height = imgArr["height"];            
		lastslash=imagestring.lastIndexOf("/");
		filename=imagestring.substring(lastslash+1,imagestring.length);
		document.forms[0].txtProductImage.value=filename;
		//document.forms[0].imgProductImage.src="../images/productimages/"+filename;		
		document.forms[0].imgProductImage.src= "../ImageHandler.ashx?ID=" + filename + "&PATH=img/Productimages/&W="+width+"&H="+height+"&Q=50";
			//ImageUrl = "~/ImageHandler.ashx?ID=green_mug.jpg&PATH=images/Productimages/&W=200&H=150&Q=50" 
	} else {
		//alert("You did not select an image");
	}

}
	</script>
</head>
<body>
    <form id="form1" runat="server">
     	<asp:Image id="imgProductImage"  runat="server"></asp:Image><BR><br />
		<asp:textbox id="txtProductImage" runat="server"></asp:textbox><BR><br />							 
    <A onclick="loadPix(); return false;" href="#">Select ...</A>
    </form>
</body>
</html>
