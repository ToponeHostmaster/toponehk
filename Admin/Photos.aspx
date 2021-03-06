<%@ Page Language="VB" MasterPageFile="~/admin2.master" AutoEventWireup="false" CodeFile="Photos.aspx.vb" Inherits="Member_Admin_Photos" title="Untitled Page" %>
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
                     <uc2:AdminToolBar id="AdminToolBar1" runat="server"></uc2:AdminToolBar> 
                 </td>
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

	<table border="0" cellpadding="0" cellspacing="0"><tr>
	<td width=10px>&nbsp;</td>
	<td valign="top" align="right"  style="width: 295px">
	<p>&nbsp;</p>	
	 	<div align="left" style="width:326px;height:220px;background-color:#E8ECE8; padding-left:30px;padding-right:20px; padding-top:20px">
	 <h4>新增圖片</h4>			
					<p>
						相片<br />
						<asp:FileUpload ID="PhotoFile" Runat="server" Width="326" CssClass="textfield" /><br />
                        <br />
                        封面圖片<asp:CheckBox ID="chkSel" runat="server" Text=" " /><br />
                        <br />
						標題<br />
						<asp:TextBox ID="PhotoCaption" Runat="server" Width="326"  CssClass="textfield" />
					</p>
					<asp:Label ID="errmsg" runat="server" ForeColor="red" Visible=false  ></asp:Label>		
					<p style="text-align:right;">
						<asp:ImageButton ID="btnAdd" Runat="server" skinid="add"/>						
					</p>				
			</div>
	    </td>	    
	    <td style="width: 120px"></td>	    
	    <td style="width: 430px" valign="top">			
			<p>&nbsp;</p>
			<asp:gridview id="GridView1" runat="server" datasourceid="ObjectDataSource1" 
				datakeynames="PhotoID" cellpadding="6" EnableViewState="false"
				autogeneratecolumns="False" BorderStyle="None" BorderWidth="0px" width="420px" showheader="false" >
				<EmptyDataRowStyle CssClass="emptydata"></EmptyDataRowStyle>
				<EmptyDataTemplate>
					現在没有資料。 
				</EmptyDataTemplate>
				<columns>
					<asp:TemplateField>
						<ItemStyle Width="50" />
						<ItemTemplate>
							<table border="0" cellpadding="0" cellspacing="0" class="photo-frame">
								<tr>
									<td class="topx--"></td>
									<td class="top-x-"></td>
									<td class="top--x"></td>
								</tr>
								<tr>
									<td class="midx--"></td>
									<td><a href='Details.aspx?AlbumID=<%# Eval("AlbumID") %>&Page=<%#CType(Container, GridViewRow).RowIndex%>'>
										<img src='/Handler.ashx?Size=S&PhotoID=<%# Eval("PhotoID") %>' class="photo_198" style="border:2px solid white;width:50px;" /></a></td>
									<td class="mid--x"></td>
								</tr>
								<tr>
									<td class="botx--"></td>
									<td class="bot-x-"></td>
									<td class="bot--x"></td>
								</tr>
							</table>
						</ItemTemplate>
					</asp:TemplateField>
					<asp:boundfield headertext="Caption" datafield="Caption" />												
					<asp:TemplateField>						
						<ItemTemplate>
                            <asp:CheckBox ID="ItemSelectedPhoto" runat="server" Checked=<%#eval("SelectedPhoto")%> Visible=<%#eval("SelectedPhoto")%>  Enabled="false" />
						</ItemTemplate> 
					    <EditItemTemplate>                            
                               <asp:CheckBox ID="SelectedPhoto" runat="server" Checked=<%# Bind("SelectedPhoto") %> />       
						</EditItemTemplate> 												
					</asp:TemplateField> 											
					<asp:TemplateField>
						<ItemStyle Width="150" />
						<ItemTemplate>
							<div style="width:100%;text-align:right;">
								<asp:ImageButton ID="ImageButton2" Runat="server" CommandName="Edit" SkinID="rename" />
								<asp:ImageButton ID="ImageButton3" Runat="server" CommandName="Delete"  SkinID="delete" OnClientClick="return confirm('是否要刪除這個項目?');" />
							</div>
						</ItemTemplate>
						<EditItemTemplate>
							<div style="width:100%;text-align:right;">
								<asp:ImageButton ID="ImageButton4" Runat="server" CommandName="Update" SkinID="save" />
								<asp:ImageButton ID="ImageButton5" Runat="server" CommandName="Cancel"  SkinID="cancel" />
							</div>
						</EditItemTemplate>
					</asp:TemplateField>
				</columns>
			</asp:gridview>
</td><td width="50"></td></tr></table>
	
	<asp:ObjectDataSource ID="ObjectDataSource1" Runat="server" TypeName="PhotoManager" 
		SelectMethod="GetPhotos"		
		DeleteMethod="RemovePhoto" 
		UpdateMethod="EditPhoto" >
		<SelectParameters>
			<asp:QueryStringParameter Name="AlbumID" Type="Int32" QueryStringField="AlbumID" />			
		</SelectParameters>		
		<UpdateParameters>
			<asp:Parameter Name="PhotoID" Type=int32 />			
			<asp:parameter Name="caption" Type="string" />
			<asp:Parameter Name="SelectedPhoto" Type=boolean />
		</UpdateParameters>
	</asp:ObjectDataSource>
	
</asp:Content>

