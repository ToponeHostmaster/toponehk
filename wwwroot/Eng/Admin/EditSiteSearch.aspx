<%@ Page Language="VB" MasterPageFile="~/admin2.master" AutoEventWireup="false" CodeFile="EditSiteSearch.aspx.vb" Inherits="Member_Admin_EditSiteSearch" title="Untitled Page" ValidateRequest="false" %>
<%@ Register Assembly="FredCK.FCKeditorV2" Namespace="FredCK.FCKeditorV2" TagPrefix="FCKeditorV2" %>
<%@ Register Src="../Controls/AdminToolBar2.ascx" TagName="AdminToolBar" TagPrefix="uc2" %>

<asp:Content ID="Content1" ContentPlaceHolderID="AdminPlaceHolder" Runat="Server">
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
                          &nbsp;&nbsp;<font color=#0066FF>>> 修改捜尋</font>
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
                <tr>
                    <td nowrap="nowrap" style="width: 136px; height: 31px; text-align: right;" valign="top">
                        <strong><span style="color: #ff0066">*</span>标題:</strong></td>
                    <td style="width: 24px; height: 31px">
                    </td>
                    <td style="width: 410px; height: 31px">
                        <asp:TextBox ID="txtTitle" runat="server" Width="262px" MaxLength="100"></asp:TextBox>&nbsp; <span
                            class="" style="white-space: nowrap">最多 50 個中文字元</span></td>
                </tr>            
            <tr>
                <td nowrap="nowrap" style="width: 136px; height: 31px; text-align: right" valign="top">
                <strong><span style="color: #ff0066">*</span>關鍵詞:</strong>
                </td>
                <td style="width: 24px; height: 31px">                
                </td>
                <td style="width: 410px; height: 31px">
                    <table border=0 cellpadding=0 cellspacing=0><tr>
                    <td style="width:80px">
                    <asp:TextBox Width="100px" ID="txtKey1" runat="server" MaxLength =30 ></asp:TextBox></td><td>&nbsp;</td>
                        <td style="width: 80px">
                            <asp:TextBox  Width="100px" ID="txtKey2" runat="server" MaxLength =30 ></asp:TextBox></td><td>&nbsp;</td>
                        <td style="width: 80px">
                            <asp:TextBox  Width="100px" ID="txtKey3" runat="server" MaxLength =30 ></asp:TextBox></td>
                            <td nowrap>&nbsp;第一個關鍵詞是必須的，每個關鍵詞最多30個中文字元</td>
                    </tr></table>                    
                    </td>
            </tr>     
            <tr>
                <td nowrap="nowrap" style="width: 136px; height: 31px; text-align: right" valign="top">
                <strong><span style="color: #ff0066">*</span>目的 URL:</strong>
                </td>
                <td style="width: 24px; height: 31px">                
                </td>
                <td style="width: 410px; height: 31px">
                    <asp:TextBox ID="txtURL" runat="server" Width="263px" MaxLength="100"></asp:TextBox>
                </td>
            </tr>                                              
                <tr style="color: #000000">
                    <td nowrap="nowrap" style="width: 136px; height: 211px; text-align: right;" valign="top">
                        <strong><span style="color:#ff0066">*</span>簡單描述:</strong></td>
                    <td style="width: 24px; height: 211px">
                    </td>
                    <td style="width: 410px; height: 211px">
                      <br />
                         最多 100 個中文字元<br />                       
                        
                        <br />
                        <asp:TextBox ID="txtDesc" runat="server" Height="149px" MaxLength="200" Rows="3"
                            TextMode="MultiLine" Width="359px"></asp:TextBox></td>
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