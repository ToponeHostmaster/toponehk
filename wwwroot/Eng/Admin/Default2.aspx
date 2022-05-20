 <%@ Page Language="VB"%>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
  <title>Menu Templates</title>
</head>
<body>
  <form id="form1" runat="server">
    <h2>
      Menu Templates</h2>
    This sample contains two menu controls that each demonstrate different templating
    possibilities. Note: That the horizontal menu uses the StaticMenuItemFormatString
    to insert more space between menu items instead of a template because it is more
    performant. The other examples of templating are provided to show the basics of 
    templating.
    <br />
    <br />
    <table cellpadding="0" cellspacing="0" width="100%">
      <tr>
        <td bgcolor="#d9d9e6">
        </td>
        <td bgcolor="#d9d9e6" valign="middle">
          <asp:Menu ID="Menu1" runat="server" Orientation="Horizontal" 
            DynamicVerticalOffset="2" Height="20" 
            StaticEnableDefaultPopOutImage="false" 
            StaticItemFormatString="&amp;nbsp &amp;nbsp {0}">
            <StaticMenuStyle BorderStyle="None" BackColor="#D9D9E6" />
            <StaticMenuItemStyle Font-Names="Tahoma" ForeColor="Black" 
              BorderColor="#D9D9E6" BorderStyle="Solid" BorderWidth="1px" 
              Font-Size="8pt" />
            <DynamicMenuStyle BorderStyle="Outset" BorderWidth="1px" 
             BorderColor="Gray" BackColor="#D9D9E6" />
            <DynamicMenuItemStyle Font-Names="Tahoma" Font-Size="8pt" 
             BorderStyle="Solid" BorderWidth="1px" BorderColor="#D9D9E6" />
            <StaticHoverStyle BackColor="Ivory" BorderStyle="Solid" BorderWidth="1px" 
              BorderColor="#D9D9FF" />
            <DynamicHoverStyle BackColor="Ivory" BorderStyle="Solid" BorderWidth="1px" 
              BorderColor="#D9D9FF" />           
            <Items>
              <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Book 0" Value="Book 0" />
              <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Book 1" Value="Book 1">
                <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Chapter 0" Value="Chapter 0" />
                <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Chapter 1" Value="Chapter 1">
                  <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Page 1" Value="Page 1" />
                </asp:MenuItem>
              </asp:MenuItem>
              <asp:MenuItem Text="Book 2" Value="Book 2">
                <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Chapter 0" Value="Chapter 0" />
                <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Chapter 1" Value="Chapter 1">
                  <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Page 1" Value="Page 1" />
                </asp:MenuItem>
                <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Chapter 2" Value="Chapter 2">
                  <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Page 1" Value="Page 1" />
                  <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Page 2" Value="Page 2" />
                </asp:MenuItem>
              </asp:MenuItem>
              <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Book 3" Value="Book 3">
                <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Chapter 0" Value="Chapter 0" />
                <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Chapter 1" Value="Chapter 1">
                  <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Page 1" Value="Page 1" />
                </asp:MenuItem>
                <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Chapter 2" Value="Chapter 2">
                  <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Page 1" Value="Page 1" />
                  <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Page 2" Value="Page 2" />
                </asp:MenuItem>
                <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Chapter 3" Value="Chapter 3">
                  <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Page 1" Value="Page 1" />
                  <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Page 2" Value="Page 2" />
                  <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Page 3" Value="Page 3" />
                </asp:MenuItem>
              </asp:MenuItem>
            </Items>
          </asp:Menu>
        </td>
      </tr>
      <tr>
        <td bgcolor="#f7f3f7" width="20%">
          <asp:Menu ID="Menu2" BorderStyle="None"
            runat="server" StaticDisplayLevels="2">
            <StaticMenuStyle BackColor="#F7F3F7" />
            <StaticMenuItemStyle BorderStyle="Solid" Font-Names="Tahoma" 
              Font-Size="8pt" BorderWidth="1px" BorderColor="#F7F3F7" />
            <DynamicMenuStyle BorderStyle="Outset" BorderWidth="1px" 
              BorderColor="LightGray" BackColor="#F7F3F7" />
            <DynamicMenuItemStyle Font-Names="Tahoma" Font-Size="8pt" 
              BorderStyle="Solid" BorderWidth="1px" BorderColor="#F7F3F7" />
            <StaticHoverStyle BackColor="#CECECE" BorderStyle="Solid" 
              BorderWidth="1px" BorderColor="DarkGray" />
            <DynamicHoverStyle BackColor="#CECECE" BorderStyle="Solid" 
              BorderWidth="1px" BorderColor="DarkGray" />
            <StaticItemTemplate>
              &nbsp;&nbsp;
              <asp:Label ID="Label9" runat="server" ForeColor="Black" 
                Font-Bold='<%# ( Not ( Eval ( "Selectable" ) ) ).ToString( ) %>'
                Text='<%# Eval( "Text" ) %>'>
              </asp:Label>
              &nbsp;&nbsp;&nbsp;&nbsp;
            </StaticItemTemplate>
            <DynamicItemTemplate>
              &nbsp;&nbsp;
              <asp:Label ID="Label10" runat="server" ForeColor="Black" 
                Text='<%# Eval( "Text" ) %>'>
              </asp:Label>
              &nbsp;&nbsp;&nbsp;&nbsp;
            </DynamicItemTemplate>
            <Items>
              <asp:MenuItem Selectable="False" NavigateUrl="~/MenuTemplates_cs.aspx" Text="Book 0"
                Value="Book 0" />
              <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Book 1" Value="Book 1">
                <asp:MenuItem Selectable="False" NavigateUrl="~/MenuTemplates_cs.aspx" Text="Chapter 0"
                  Value="Chapter 0" />
                <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Chapter 1" Value="Chapter 1">
                  <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Page 1" Value="Page 1" />
                </asp:MenuItem>
              </asp:MenuItem>
              <asp:MenuItem Text="Book 2" Value="Book 2">
                <asp:MenuItem Selectable="False" NavigateUrl="~/MenuTemplates_cs.aspx" Text="Chapter 0"
                  Value="Chapter 0" />
                <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Chapter 1" Value="Chapter 1">
                  <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Page 1" Value="Page 1" />
                </asp:MenuItem>
                <asp:MenuItem Selectable="False" NavigateUrl="~/MenuTemplates_cs.aspx" Text="Chapter 2"
                  Value="Chapter 2">
                  <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Page 1" Value="Page 1" />
                  <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Page 2" Value="Page 2" />
                </asp:MenuItem>
              </asp:MenuItem>
              <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Book 3" Value="Book 3">
                <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Chapter 0" Value="Chapter 0" />
                <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Chapter 1" Value="Chapter 1">
                  <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Page 1" Value="Page 1" />
                </asp:MenuItem>
                <asp:MenuItem Selectable="False" NavigateUrl="~/MenuTemplates_cs.aspx" Text="Chapter 2"
                  Value="Chapter 2">
                  <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Page 1" Value="Page 1" />
                  <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Page 2" Value="Page 2" />
                </asp:MenuItem>
                <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Chapter 3" Value="Chapter 3">
                  <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Page 1" Value="Page 1" />
                  <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Page 2" Value="Page 2" />
                  <asp:MenuItem NavigateUrl="~/MenuTemplates_cs.aspx" Text="Page 3" Value="Page 3" />
                </asp:MenuItem>
              </asp:MenuItem>
              <asp:MenuItem Selectable="False" Value="Product Families" Text="Product Families">
                <asp:MenuItem Value="Windows" Text="Windows"></asp:MenuItem>
                <asp:MenuItem Value="Office" Text="Office"></asp:MenuItem>
                <asp:MenuItem Value="Mobile Devices" Text="Mobile Devices"></asp:MenuItem>
              </asp:MenuItem>
              <asp:MenuItem Selectable="False" Value="Resources" Text="Resources">
                <asp:MenuItem Value="Support" Text="Support">
                  <asp:MenuItem Value="Support Home" Text="Support Home"></asp:MenuItem>
                  <asp:MenuItem Value="Knowledge Base" Text="Knowledge Base"></asp:MenuItem>
                </asp:MenuItem>
                <asp:MenuItem Value="Downloads" Text="Downloads"></asp:MenuItem>
                <asp:MenuItem Value="Windows Update" Text="Windows Update"></asp:MenuItem>
                <asp:MenuItem Value="Learning Tools" Text="Learning Tools">
                  <asp:MenuItem Value="Training and Certification" Text="Training and Certification">
                  </asp:MenuItem>
                  <asp:MenuItem Value="Books" Text="Books"></asp:MenuItem>
                </asp:MenuItem>
              </asp:MenuItem>
              <asp:MenuItem Selectable="False" Value="Information For" Text="Information For">
                <asp:MenuItem Value="Home Users" Text="Home Users"></asp:MenuItem>
                <asp:MenuItem Value="Work Users" Text="Work Users"></asp:MenuItem>
                <asp:MenuItem Value="IT Professionals" Text="IT Professionals"></asp:MenuItem>
              </asp:MenuItem>
            </Items>
          </asp:Menu>
        </td>
        <td bgcolor="#ffffcc">
        </td>
      </tr>
    </table>
    <br />
    <br />
    <br />
    <br />
    <br />
    <b>Sample Note: </b>All menu items point to the same page to simplify the sample.
  </form>
</body>
</html>
 

 