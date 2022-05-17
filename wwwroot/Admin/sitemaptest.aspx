<%@ Page Language="VB" AutoEventWireup="false" CodeFile="sitemaptest.aspx.vb" Inherits="Admin_sitemaptest" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Untitled Page</title>
</head>
<body>
    <form id="form1" runat="server">
     
     <div id="menutext">        
        <asp:SiteMapDataSource ID="SiteMapDataSource1" SiteMapProvider="adminSiteMapProvider" runat="server" ShowStartingNode="false" />  
        <asp:Repeater ID="TopNavRepeat" runat="server" DataSourceID="SiteMapDataSource1">
            <HeaderTemplate>
                <ul>
            </HeaderTemplate>
            <ItemTemplate>
                <li>
                    <asp:HyperLink ID="HyperLink1" runat="server" Text='<%# Eval("Title") %>' NavigateUrl='<%# Eval("Url") %>'
                        ToolTip='<%# Eval("Description") %>' />
                </li>
            </ItemTemplate>
            <FooterTemplate>
                </ul>
            </FooterTemplate>
        </asp:Repeater>
    </div>
     
    
    
    </form>
</body>
</html>
