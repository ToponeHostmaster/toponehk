<%@ Page Language="VB" MasterPageFile="~/admin2.master" AutoEventWireup="false" CodeFile="AddContactList.aspx.vb" Inherits="AddContactList" title="Untitled Page" MaintainScrollPositionOnPostback="false" EnableEventValidation="false" validateRequest="false"  %>
<%@ Register Assembly="FredCK.FCKeditorV2" Namespace="FredCK.FCKeditorV2" TagPrefix="FCKeditorV2" %>
<%@ Register Assembly="AjaxControlToolkit" Namespace="AjaxControlToolkit" TagPrefix="ajaxToolkit" %>
<%@ Register Src="../Controls/AdminToolBar2.ascx" TagName="AdminToolBar" TagPrefix="uc2" %>

<asp:Content ID="Content1" ContentPlaceHolderID="AdminPlaceHolder" Runat="Server"> 
  <!--navbar --> 
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="px11">
        <tr> 
          <td><table width="100%" height="35" border="0" align="center" cellpadding="0" cellspacing="0" background="../img/menu_bg.gif" class="px11">
              <tr> 
                <td width="300">&nbsp;</td>
                <td width="474" valign="bottom">                                 
             <uc2:AdminToolBar id="AdminToolBar1" runat="server"></uc2:AdminToolBar>                   
                </td>
              </tr>
            </table></td>
        </tr>
        <tr> 
          <td width="100%" height="28">
          <!--subNavbar-->
       <table width="100%" border="0" cellpadding="0" cellspacing="0" class="px11">
              <tr>                 
                <td bgcolor="CAE7FF">
                  <table width="100%" height="28" border="0" cellpadding="0" cellspacing="0" class="px11">
                    <!--DWLayoutTable-->
                    <tr> 
                      <td width="100%" height="28"><div align="left"> 
                          &nbsp;&nbsp;<font color=#0066FF>>> 新增聯絡人</font>
                        </div></td>
                    </tr>
                    </table>
                  </td>
              </tr>
            </table>
          <!--subnavbar-->
            
            </td>
        </tr>
      </table>      
    
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
                <tr>
                    <td nowrap="nowrap" style="width: 136px; height: 31px; text-align: right;" valign="top">
                        <strong><span style="color: #ff0066">*</span>名字:</strong></td>
                    <td style="width: 24px; height: 31px">
                    </td>
                    <td style="width: 410px; height: 31px">
                        <asp:TextBox ID="txtFirstName" MaxLength=45 runat="server"></asp:TextBox>
                        </td>
                </tr>       
                 <tr>
                    <td nowrap="nowrap" style="width: 136px; height: 31px; text-align: right;" valign="top">
                        <strong><span style="color: #ff0066">*</span>姓氏:</strong></td>
                    <td style="width: 24px; height: 31px">
                    </td>
                    <td style="width: 410px; height: 31px">
                        <asp:TextBox ID="txtLastName" runat="server" MaxLength=45></asp:TextBox>
                        </td>
                </tr>
                 <tr>
                    <td nowrap="nowrap" style="width: 136px; height: 31px; text-align: right;" valign="top">
                        <strong><span style="color: #ff0066">*</span>中文名字:</strong></td>
                    <td style="width: 24px; height: 31px">
                    </td>
                    <td style="width: 410px; height: 31px">
                        <asp:TextBox ID="txtChineseName" runat="server" MaxLength=45></asp:TextBox>
                        </td>
                </tr>
                 <tr>
                    <td nowrap="nowrap" style="width: 136px; height: 31px; text-align: right;" valign="top">
                        <strong><span style="color: #ff0066">*</span>電郵地址:</strong></td>
                    <td style="width: 24px; height: 31px">
                    </td>
                    <td style="width: 410px; height: 31px">
                        <asp:TextBox ID="txtEmail" runat="server" MaxLength=90></asp:TextBox>
                        </td>
                </tr>
                 <tr>
                    <td nowrap="nowrap" style="width: 136px; height: 31px; text-align: right;" valign="top">
                        <strong><span style="color: #ff0066">*</span>電話:</strong></td>
                    <td style="width: 24px; height: 31px">
                    </td>
                    <td style="width: 410px; height: 31px">
                        <asp:TextBox ID="txtTel" runat="server" MaxLength=45></asp:TextBox>
                        </td>
                </tr>
                 <tr>
                    <td nowrap="nowrap" style="width: 136px; height: 31px; text-align: right;" valign="top">
                        <strong><span style="color: #ff0066">*</span>傳真:</strong></td>
                    <td style="width: 24px; height: 31px">
                    </td>
                    <td style="width: 410px; height: 31px">
                        <asp:TextBox ID="txtFax" runat="server" MaxLength=45 ></asp:TextBox>
                        </td>
                </tr>                          
                <tr >
                    <td nowrap="nowrap" style="width: 136px; height: 211px; text-align: right;" valign="top">
                        <strong><span style="color:#ff0066">*</span>地址:</strong></td>
                    <td style="width: 24px; height: 211px">
                    </td>
                    <td style="width: 410px; height: 211px">                    
                        <asp:TextBox ID="txtAddress" runat="server" Height="149px" MaxLength=450 Rows="3"
                            TextMode="MultiLine" Width="359px"></asp:TextBox></td>
                </tr>                       
                <tr>
                    <td colspan="3" style="height: 13px; text-align: center">
                        <br />
                        <br />
                        <asp:Button ID="btnAdd" runat="server" Text="新增" />
                        <asp:Button ID="btnCancel" runat="server" Text="取消" /></td>
                </tr>          
            </table>                                 
</asp:Content>

