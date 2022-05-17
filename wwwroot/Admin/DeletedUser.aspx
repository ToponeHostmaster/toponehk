<%@ Page Language="VB" AutoEventWireup="false" CodeFile="DeletedUser.aspx.vb" Inherits="Admin_DeletedUser" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Manage User</title>
</head>
<body>
    <form id="form1" runat="server">
   <asp:Panel ID="Panel1" runat="server" Visible="true" > 
    <div>

    <%-- Confirmation Dialog --%>

<p>&nbsp;</p>
<table width="400" cellpadding="0" border="0">
<tr><td align="left"> <img id="Img1" src="~/img/alert_lrg.gif" runat="server" />
<%-- Literal is used here as a convenience, including storing a text property in view state. --%>
<asp:literal runat="server" id="UserID" Visible="false" />

<asp:literal runat="server" id="AreYouSure" /><br /><br /></td></tr>
<tr><td align="left" >
    <asp:Button ID="Button1" runat="server" OnClick="Yes_Click" Text="<%$ Resources:Yes %>" width="100"/>

    <asp:Button ID="Button2" runat="server" OnClick="No_Click" Text="<%$ Resources:No %>" width="100"/>
  </td></tr>
</table>               
    </div>
   </asp:Panel>

<%-- Confirmation Dialog --%>
    <asp:PlaceHolder ID="PlaceHolder1" runat="server" Visible="false" >
    
    <table cellspacing="0" width="600" cellpadding="4">
 
  <tr><td>
  <br /><br />
<u><asp:literal ID="Literal1" runat="server" text="<%$ Resources:UserManagement %>"/></u><br/><br /><br /><br />
   </td></tr>
   <tr valign="top"><td>
    <asp:literal runat="server" id="DialogMessage" />
   </td></tr>
      
    <tr>
      <td>
      <br />
    				 <asp:Button ID="Button3" runat="server" OnClick="OK_Click" Text="<%$ Resources:OK %>" width="75"/>
	   </td>             </tr>
                  
        
      </table>
</asp:PlaceHolder>
        <asp:Label ID="Label1" runat="server" Text="Label" Visible="false" ></asp:Label>


    </form>
    
    
</body>
</html>
