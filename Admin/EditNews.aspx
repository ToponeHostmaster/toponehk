<%@ Page Language="VB" MasterPageFile="~/admin2.master" AutoEventWireup="false" CodeFile="EditNews.aspx.vb" Inherits="EditNews" title="Untitled Page" MaintainScrollPositionOnPostback="false" EnableEventValidation="false" validateRequest="false"  %>
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
                          &nbsp;&nbsp;<font color=#0066FF>>> 修改新聞</font>
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
                        <asp:TextBox ID="txtProductName" runat="server"></asp:TextBox>
                        </td>
                </tr>         
                   <tr>
                    <td nowrap="nowrap" style="width: 136px; height: 31px; text-align: right;" valign="top">
                        <strong><span style="color: #ff0066">*</span>公佈日期:                       
                        </strong></td>
                    <td style="width: 24px; height: 31px">
                    </td>
                    <td style="width: 410px; height: 31px">                         
                    <asp:TextBox runat="server" ID="Date2" />                   
                    <br />
                    <ajaxToolkit:CalendarExtender ID="customCalendarExtender" runat="server" 
                    TargetControlID="Date2"
                    CssClass="MyCalendar"
                    Format=" dd/MM/yyyy" Animated="true"  />
                        </td>
                </tr>                                          
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
                    <td nowrap="nowrap" style="width: 136px; height: 13px; text-align: right;" valign="top">
                        <strong>&nbsp;相片:</strong></td>
                    <td style="width: 24px; height: 50px">
                    </td>
                    <td style="width: 410px; height: 50px" valign="top">
                      <asp:FileUpload ID="FileUpload1" runat="server"  />                      
                      <asp:ImageButton ID="btnRemoveImage" Runat="server"  AlternateText="Delete" SkinID="btnDel" OnClientClick="return confirm('是否要刪除這個相片?');" />								                            
                            <br />
                       相片格式: jpg, jpeg 以及 gif <br />
                        <table border="0" cellpadding="0" cellspacing="0" class="photo-frame">
								<tr>
									<td class="topx--"></td>
									<td class="top-x-"></td>
									<td class="top--x"></td>
								</tr>
								<tr>
									<td class="midx--"></td>
									<td>																			
										 <asp:Image ID="Image1" runat="server"  style="border:2px solid white;width:52px;" />										 										
										</td>
									<td class="mid--x"></td>
								</tr>
								<tr>
									<td class="botx--"></td>
									<td class="bot-x-"></td>
									<td class="bot--x"></td>
								</tr>
							</table>        
                    </td>
                </tr>
                <tr valign="top">
                    <td nowrap="nowrap" style="width: 136px; height: 13px; text-align: right;" valign="top">
                        <strong>&nbsp;相片大少:</strong></td>
                    <td style="width: 24px; height: 50px">
                    </td>
                    <td style="width: 410px; height: 50px" valign="top">
                        高度 x 寛度 : <asp:TextBox ID="TxtHeight" Width=30 runat="server" MaxLength=3></asp:TextBox>x<asp:TextBox ID="txtWidth" Width=30 runat="server" MaxLength=3></asp:TextBox>
                    </td>                    
                </tr>
                
                <tr valign="top">
                <td nowrap="nowrap" style="width: 136px; height: 13px; text-align: right;" valign="middle">
                    <strong>第一個PDF 檔案:</strong></td>
                <td style="width: 24px; height: 40px">
                </td>
                <td style="height: 40px" valign="middle" nowrap>
                名稱<asp:TextBox ID="txtPDFName" runat="server"></asp:TextBox>&nbsp;
                    <asp:FileUpload ID="FileUploadPDF" runat="server" CssClass="txtfield" />
                     <asp:Image ID="ImgPDF1" runat="server" ImageUrl="~/img/pdf.gif" />
                      <asp:ImageButton ID="btnDelPDF1" Runat="server"  AlternateText="Delete" SkinID="btnDel" OnClientClick="return confirm('是否要刪除這個PDF?');" />								                    
                     </td>                      
            </tr>
            <tr valign="top">
                <td nowrap="nowrap" style="width: 136px; height: 13px; text-align: right" valign="middle">
                    <strong>第二個PDF 檔案:</strong></td>
                <td style="width: 24px; height: 40px">
                </td>
                   <td style="height: 40px;" valign="middle" nowrap>        
                   名稱<asp:TextBox ID="txtPDFName2" runat="server"></asp:TextBox>&nbsp;             
                    <asp:FileUpload ID="FileUploadPDF2" runat="server" CssClass="txtfield" />
                     <asp:Image ID="imgPDF2" runat="server" ImageUrl="~/img/pdf.gif" /> 
                    <asp:ImageButton ID="btnDelPDF2" Runat="server"  AlternateText="Delete" SkinID="btnDel" OnClientClick="return confirm('是否要刪除這個PDF?');" />								               
                    </td>
            </tr>
            <tr valign="top">
                <td nowrap="nowrap" style="width: 136px; height: 13px; text-align: right" valign="middle">
                    <strong>第三 個PDF 檔案:</strong></td>
                <td style="width: 24px; height: 40px">
                </td>
                   <td style="height: 40px" valign="middle" nowrap>
                    名稱<asp:TextBox ID="txtPDFName3" runat="server"></asp:TextBox>&nbsp;
                    <asp:FileUpload ID="FileUploadPDF3" runat="server" CssClass="txtfield" />  
                     <asp:Image ID="imgPDF3" runat="server" ImageUrl="~/img/pdf.gif" /> 
                    <asp:ImageButton ID="btnDelPDF3" Runat="server"  AlternateText="Delete" SkinID="btnDel" OnClientClick="return confirm('是否要刪除這個PDF?');" />								                               
                   </td>
            </tr>                
        <ajaxToolkit:FilteredTextBoxExtender ID="FilteredTextBoxExtender1" runat="server"
           TargetControlID="txtHeight" FilterType="Numbers" />
           <ajaxToolkit:FilteredTextBoxExtender ID="FilteredTextBoxExtender2" runat="server"
           TargetControlID="txtWidth" FilterType="Numbers" />
           
                <tr>
                    <td colspan="3" style="height: 13px; text-align: center">
                        <br />
                        <br />
                        <asp:Button ID="btnSave" runat="server" Text="儲存" />
                        <asp:Button ID="btnCancel" runat="server" Text="取消" /></td>
                </tr>           
            </table>                                 
</asp:Content>

