<%@ Page Language="VB" MasterPageFile="~/admin2.master" AutoEventWireup="false" CodeFile="Editfactory.aspx.vb" Inherits="Member_Admin_Editfactory" title="Untitled Page"  ValidateRequest="false" %>
<%@ Register Assembly="FredCK.FCKeditorV2" Namespace="FredCK.FCKeditorV2" TagPrefix="FCKeditorV2" %>
<%@ Register Src="../Controls/AdminSubToolBar.ascx" TagName="AdminSubToolBar" TagPrefix="uc1" %>
<%@ Register Src="../Controls/AdminToolBar.ascx" TagName="AdminToolBar" TagPrefix="uc2" %>

<asp:Content ID="Content1" ContentPlaceHolderID="AdminPlaceHolder" Runat="Server">
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="px11">
        <tr> 
          <td><table width="100%" height="35" border="0" align="center" cellpadding="0" cellspacing="0" background="../img/menu_bg.gif" class="px11">
              <tr> 
                <td width="300">&nbsp;</td>
                <td width="474" valign="bottom"> 
                    <!--toolbar-->  
                     <uc2:AdminToolBar id="AdminToolBar1" runat="server"></uc2:AdminToolBar> </td>
              </tr>
            </table></td>
        </tr>
        <tr> 
          <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="px11" >
              <tr> 
                <td width="100" bgcolor="CAE7FF" style="height: 41px">&nbsp;</td>
                <td bgcolor="CAE7FF" style="height: 41px" nowrap>
                <!--Start of Sub Nav-->
                <uc1:AdminSubToolBar id="AdminSubToolBar1" runat="server"></uc1:AdminSubToolBar> 
                  <!--End of Sub Nav-->
              </td>
              </tr>
            </table></td>
        </tr>
      </table>
      <!--content-->
  <asp:ScriptManager id=s1 runat="Server" EnableScriptGlobalization="true" />        
  
        <table border="0" cellpadding="0" cellspacing="0" style="width: 805px; height: 66px">
            <tr>
                <td colspan="3" nowrap="nowrap" valign="top" style="height: 4px">  
                <div style="text-align:left" align="center" >                                 &nbsp;
                </div>                                     
                
                </td>
            </tr>
            <tr>
                <td nowrap="nowrap" style="width: 136px; height: 31px; text-align: right" valign="top">
                </td>
                <td style="width: 24px; height: 31px">
                </td>
                <td style="width: 410px; height: 31px">
                    &nbsp;<asp:Label ID="lblErrorMsgHeader" runat="server" Text="Label" Visible="False" CssClass="WarningHeader"></asp:Label>
                  <asp:Label ID="lblErrorMsgDetails" runat="server" Text="Label" Visible="False" CssClass="WarningDetails"></asp:Label></td>
            </tr>
            <%If _expoType = AlbumType.講座資料 Then%>
              <tr>
                <td nowrap="nowrap" style="width: 136px; height: 31px; text-align: right" valign="top">
                   <strong><span style="color: #ff0066">*</span>講座系列:</strong>
                </td>
                <td style="width: 24px; height: 31px">
                </td>
                <td style="width: 410px; height: 31px">
                    <asp:DropDownList ID="DropDownList1" runat="server">
                        <asp:ListItem Value="1">聽僧一席話系列</asp:ListItem>
                        <asp:ListItem Value="2">心靈渡假村系列</asp:ListItem>
                        <asp:ListItem Value="3">心靈禪室系列</asp:ListItem>
                    </asp:DropDownList></td>
            </tr>
            <%end if%>
                <tr>
                    <td nowrap="nowrap" style="width: 136px; height: 31px; text-align: right;" valign="top">
                        <strong><span style="color: #ff0066">*</span>标題:</strong></td>
                    <td style="width: 24px; height: 31px">
                    </td>
                    <td style="width: 410px; height: 31px">
                        <asp:TextBox ID="txtProductName" runat="server"></asp:TextBox>
                        </td>
                </tr>
            <%If _expoType = AlbumType.講座資料 Then%>                                                        
            <tr>
                <td nowrap="nowrap" style="width: 136px; height: 31px; text-align: right" valign="top">
                <strong><span style="color: #ff0066">*</span>主講:</strong>
                </td>
                <td style="width: 24px; height: 31px">                
                </td>
                <td style="width: 410px; height: 31px">
                    <asp:TextBox ID="txtAuthor" runat="server"></asp:TextBox>
                </td>
            </tr>          
            <%end if%>
                <tr style="color: #000000">
                    <td nowrap="nowrap" style="width: 136px; height: 211px; text-align: right;" valign="top">
                        <strong><span style="color:#ff0066">*</span>內容:</strong></td>
                    <td style="width: 24px; height: 211px">
                    </td>
                    <td style="width: 410px; height: 211px">
                        <FCKeditorV2:FCKeditor ID="FCKeditor1" runat="server" ToolbarSet="Basic" >
                        </FCKeditorV2:FCKeditor>
                        <br />
                        <br />
                    </td>
                </tr>                              
                <tr>
                    <td colspan="3" style="height: 13px; text-align: center">
                        <br />
                        <br />
                        <asp:Button ID="btnSave" runat="server" Text="儲存" />
                        <asp:Button ID="btnCancel" runat="server" Text="取消" /></td>
                </tr>           
            </table>        		 
       
</asp:Content>