<%@ Page Language="VB" AutoEventWireup="false" CodeFile="Default.aspx.vb" Inherits="Member_Admin_Default" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Member Login Portal</title>
</head>

<body style="margin: 0;padding: 0;background: #ffffff;font-family:Verdana;font-size: 8pt;" >
    <form id="form1" runat="server">    
          <div class="admin-header">
                <h1>青山寺網站管理系統</h1>
            </div>   
                                       
            <div class=offsetleftbox style="text-align: center">        
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <asp:Login ID="Login1" DestinationPageUrl="~/Admin/downloads.aspx?type=1" runat="server" BackColor="#EFF3FB" BorderColor="#B5C7DE" BorderPadding="4" BorderStyle="Solid" BorderWidth="1px" Font-Names="Verdana" Font-Size="10" ForeColor="#333333" Height="157px" Width="289px" FailureText="使用者名稱或密碼錯誤，請再嘗試。">
                    <TitleTextStyle BackColor="#507CD1" Font-Bold="True" Font-Size="10" ForeColor="White" />
                    <InstructionTextStyle Font-Italic="True" ForeColor="Black" />
                    <TextBoxStyle Font-Size="10" />
                    <LoginButtonStyle BackColor="White" BorderColor="#507CD1" BorderStyle="Solid" BorderWidth="1px"
                        Font-Names="Verdana" Font-Size="10" ForeColor="#284E98" />
                    <LayoutTemplate>
                     <asp:Panel ID="login" DefaultButton="LoginButton" runat="server">
                        <table border="0" cellpadding="4" cellspacing="0" style="border-collapse: collapse">
                            <tr>
                                <td>
                                    <table border="0" cellpadding="0" style="width: 289px; height: 157px" failuretext="使用者名稱或密碼錯誤，請再嘗試。">
                                        <tr>
                                            <td align="center" colspan="2" style="font-weight: bold; font-size: 0.9em; color: white;
                                                background-color: #507cd1">
                                                網站管理員專用</td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                <asp:Label ID="UserNameLabel" runat="server" AssociatedControlID="UserName" Font-Size="10pt">使用者名稱:</asp:Label></td>
                                            <td style="text-align: left">
                                                <asp:TextBox ID="UserName" runat="server" Font-Size="10pt"></asp:TextBox>
                                                <asp:RequiredFieldValidator ID="UserNameRequired" runat="server" ControlToValidate="UserName"
                                                    ErrorMessage="使用者名稱是必須的。" ToolTip="使用者名稱是必須的。" ValidationGroup="Login1">*</asp:RequiredFieldValidator>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                <asp:Label ID="PasswordLabel" runat="server" AssociatedControlID="Password" Font-Size="10pt">密碼:</asp:Label></td>
                                            <td style="text-align: left">
                                                <asp:TextBox ID="Password" runat="server" Font-Size="10pt" TextMode="Password"></asp:TextBox>
                                                <asp:RequiredFieldValidator ID="PasswordRequired" runat="server" ControlToValidate="Password"
                                                    ErrorMessage="密碼是必須的。" ToolTip="密碼是必須的。" ValidationGroup="Login1">*</asp:RequiredFieldValidator>
                                            </td>
                                        </tr>                                      
                                        <tr>
                                            <td align="center" colspan="2" style="color: red; height: 16px">
                                                <asp:Literal ID="FailureText" runat="server" EnableViewState="False"></asp:Literal>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right" colspan="2" style="height: 20px">
                                                <asp:Button ID="LoginButton" runat="server" BackColor="White" BorderColor="#507CD1"
                                                    BorderStyle="Solid" BorderWidth="1px" CommandName="Login" Font-Names="Verdana"
                                                    Font-Size="10pt" ForeColor="#284E98" Text="登入" ValidationGroup="Login1" />
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        </asp:Panel>
                    </LayoutTemplate>
                </asp:Login>    
            </div>            
    </form>
</body>
</html>
