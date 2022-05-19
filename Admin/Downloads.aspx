<%@ Page Language="VB" MasterPageFile="~/admin2.master" AutoEventWireup="false" CodeFile="Downloads.aspx.vb" Inherits="Member_Admin_Downloads" title="Untitled Page" MaintainScrollPositionOnPostback="false" ValidateRequest="false"  %>
<%@ Register Src="../Controls/AdminToolBar2.ascx" TagName="AdminToolBar" TagPrefix="uc2" %>
<%@ Register Src="../Controls/AdminIntraSubToolBar.ascx" TagName="AdminSubToolBar" TagPrefix="uc1" %>

<asp:Content ID="Content1" ContentPlaceHolderID="AdminPlaceHolder" Runat="Server">
 <!--navbar --> 
     
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="px11">
        <tr> 
          <td><table width="100%" height="35" border="0" align="center" cellpadding="0" cellspacing="0" background="../img/menu_bg.gif" class="px11">
              <tr> 
                <td width="300">&nbsp;</td>
                <td width="474" valign="bottom">                               
                  <!--toolbar-->  
                     <uc2:AdminToolBar id="AdminToolBar1" runat="server"></uc2:AdminToolBar> 
                </td>
              </tr>
            </table></td>
        </tr>
        <tr> 
          <td>
          
          <table width="100%" border="0" cellpadding="0" cellspacing="0" class="px11" >
              <tr> 
                <td width="100" bgcolor="CAE7FF" style="height: 36px">&nbsp;</td>
                <td bgcolor="CAE7FF" style="height: 36px" nowrap>                
                    <uc1:AdminSubToolBar id="AdminSubToolBar1" runat="server"></uc1:AdminSubToolBar>                
           </td>
              </tr>
            </table></td>
        </tr>
      </table>
      
      <!--content-->  
     <asp:ScriptManager ID="s1" EnablePartialRendering="true" runat="server" />   
<table border="0">
<tr>          
            <td style="width: 487px; height: 320px; padding-top:30px" valign="top" >                                                									
     <asp:UpdatePanel ID="p1" runat="server">
        <ContentTemplate>
            <asp:GridView ID="GridView1"  CssClass="gridview" AlternatingRowStyle-CssClass="even" GridLines="None" runat="server" AllowPaging="True" AllowSorting="True" AutoGenerateColumns="False" DataKeyNames="PDFID" DataSourceID="ObjectDataSource1" >
              <EmptyDataTemplate>
				没有資料可供下載 
				</EmptyDataTemplate>
				<EmptyDataRowStyle CssClass="emptydata"></EmptyDataRowStyle> 
                <Columns>              
                       <asp:TemplateField HeaderText="檔案名稱" SortExpression="FileName">
                        <ItemTemplate>                           
                            <a href='<%# getPath(eval("FilePath"))%>' target="_blank" ><%# Eval("FileName") %></a>
                        </ItemTemplate>
                        <EditItemTemplate>
                           <asp:TextBox ID="txtFileName" runat="server" Text='<%# Bind("FileName") %>' Width="250px"></asp:TextBox>
                           <asp:RequiredFieldValidator ID="valRequireTitle" runat="server" ControlToValidate="txtFileName" SetFocusOnError="true"
                              Text="請填寫檔案名稱" ToolTip="The file name field is required." Display="Dynamic"></asp:RequiredFieldValidator>
                        </EditItemTemplate>
                     </asp:TemplateField>                                                                                                                              
                       <asp:TemplateField>
						<ItemStyle Width="100px" />
						<ItemTemplate>						   
							<div style="width:100%;text-align:right;">							  
							    <asp:ImageButton ID="ImageButton2" Runat="server" CommandName="edit" skinid="btnEdit2" AlternateText="Edit" /></a> &nbsp;&nbsp;
						 	    <asp:ImageButton ID="ImageButton3" Runat="server" CommandName="Delete"  AlternateText="Delete" SkinID="btnDel" OnClientClick="return confirm('確定要刪除這個檔案?');" />								
							</div>
						</ItemTemplate>					
						<EditItemTemplate>
							<asp:LinkButton ID="ImageButton4" Text="更新" Runat="server" CommandName="Update"  />
							<asp:LinkButton ID="ImageButton5" Text="取消" Runat="server" CommandName="Cancel" />
						</EditItemTemplate>									
					</asp:TemplateField>       					
                </Columns>
                <AlternatingRowStyle CssClass="even" />
            </asp:GridView>
          </ContentTemplate>         
    </asp:UpdatePanel>                                      
   <asp:UpdateProgress ID="p2" runat="server">
        <ProgressTemplate>
            <div class="updateprogress">
                <img src="/img/indicator.gif" />
                更新中...
            </div>
        </ProgressTemplate>
    </asp:UpdateProgress> 
       <asp:ObjectDataSource ID="ObjectDataSource1" runat="server" DeleteMethod="DeleteFile"
                 SelectMethod="GetDownloads"
                TypeName="iT2ec.BusinessLogicLayer.MemberDownloadsBLL" UpdateMethod="UpdateFile">
                  <SelectParameters>                        
                    <asp:QueryStringParameter Name="Type" DefaultValue=1 Type=int32 QueryStringField="Type" />             
                    <asp:Parameter Name="Lang" DefaultValue="chi" Type="string" />            
                 </SelectParameters>
                <DeleteParameters>
                    <asp:Parameter Name="PDFID" Type="Int32" />                     
                </DeleteParameters>
                <UpdateParameters>
                    <asp:Parameter Name="PDFID" Type="Int32" />
                    <asp:Parameter Name="FileName" Type="String" />                        
                </UpdateParameters>                                              
               
            </asp:ObjectDataSource>              
            </td>
            <td width=100>&nbsp;</td>
            <td style="width: 325px; height: 320px; text-align: left ;" valign="top" >  
            <p>&nbsp;</p>              
              
            <asp:Panel ID="uploadpanel" runat="server" DefaultButton="UploadFile">                
                <h2>
                    上載 PDF 檔案<br />
                    <br /></h2><p>
                  請填寫檔案以及名稱,然後按上載鍵.</p>
                <asp:Label ID="ErrorLabel" runat="server" Text="" />
                <table>
                    <tr>
                        <td class="formlabel">
                            檔案:</td>
                        <td style="width: 227px">
                            <asp:FileUpload ID="FileUpload1" runat="server" CssClass="txtfield" /><br />    
                            <asp:Label ID="errFile" runat="server" Text="Label" ForeColor="Red" Font-Bold="true"></asp:Label>                      
                       </td>
                    </tr>
                    <tr>
                        <td class="formlabel">
                            檔案名稱:</td>
                        <td style="width: 227px">
                            <asp:TextBox ID="imgTitle" runat="server" CssClass="txtfield" /><br />
                            <asp:Label ID="errFileCaption" runat="server" Text="Label" ForeColor="Red" Font-Bold="true"></asp:Label>
                       </td>
                    </tr>
                </table>
                <div class="actionbuttons">
                    <asp:Button ID="UploadFile" runat="server" Text="上載檔案" OnClick="UploadFile_Click" />&nbsp;
                </div>                
            </asp:Panel>               
            </td>                        
            </tr>  
    </table>
</asp:Content>

