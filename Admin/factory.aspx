<%@ Page Language="VB" MasterPageFile="~/admin2.master" AutoEventWireup="false" CodeFile="factory.aspx.vb" Inherits="Member_Admin_factory" title="Untitled Page" %>
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
	<asp:ScriptManager ID="s1" EnablePartialRendering="true" runat="server" />

<div class="products">      
    <div class="productsheader">
        <h2>&nbsp;</h2>
        
        <div class="insertlink">            
            <asp:HyperLink ID="HyperLink1" runat="server">新增</asp:HyperLink>
            
        </div>
    </div>
</div>
       <asp:UpdatePanel ID="p1" runat="server">
        <ContentTemplate>  
            <asp:GridView ID="GridView1" CssClass="gridview" AlternatingRowStyle-CssClass="even" GridLines="None" runat="server"
          BorderWidth="0px"  PageSize=10   cellpadding="6"  AllowPaging="True" AllowSorting="False" AutoGenerateColumns="False" DataKeyNames="AlbumID" DataSourceID="ObjectDataSource1" EnableViewState="false" >
           <pagerstyle HorizontalAlign="Center"/>
            <PagerSettings Mode="NumericFirstLast"  Position="Bottom" />
                <EmptyDataTemplate>            
				現在你没有資料
				</EmptyDataTemplate>
				<EmptyDataRowStyle CssClass="emptydata"></EmptyDataRowStyle>                
                <Columns>             
				  <asp:TemplateField>
						<ItemStyle Width="120" />
						<ItemTemplate>
							<table border="0" cellpadding="0" cellspacing="0" class="photo-frame">
								<tr>
									<td class="topx--"></td>
									<td class="top-x-"></td>
									<td class="top--x"></td>
								</tr>
								<tr>
								<td class="midx--"></td>
								    <td>
									   <a href="photos.aspx?AlbumID=<%# Eval("AlbumID") %>&ExpoType=<%# Eval("ExpoType") %>"><img src="/Handler.ashx?AlbumID=<%# Eval("AlbumID") %>&Size=S"  class="photo_198" style="border:4px solid white" /></a>  
								    </td>																				
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
                     <asp:TemplateField  HeaderText="标題" SortExpression="Caption"> 
                      <ItemStyle Width="100" />
                     <ItemTemplate>                          	
                            <asp:label runat="server" id="Caption" forecolor='black' text='<%# Eval("Caption")%>'/>                            
                    </ItemTemplate>                                                                           
                    </asp:TemplateField>    
                    <asp:TemplateField  HeaderText="內容" SortExpression="Description"> 
                     <ItemTemplate>
                          	<div style="width:100%;text-align:left;">
                            <asp:label runat="server" id="Description" forecolor='black' text='<%# Eval("Description")%>'/>
                            </div>
                    </ItemTemplate>                                                                           
                    </asp:TemplateField>                                                                               
                    <asp:TemplateField>
						<ItemStyle Width="50" />
						<ItemTemplate>
							<div style="width:100%;text-align:right;">																					
							<a href='EditFactory.aspx?AlbumID=<%# Eval("AlbumID")%>&ExpoType=<%# Eval("ExpoType")%>'><asp:Image ID="ImageButton2" Runat="server" skinid="btnEdit" AlternateText="Edit" /></a> &nbsp;&nbsp;
								<asp:ImageButton ID="ImageButton3" Runat="server" CommandName="Delete"  AlternateText="Delete" SkinID="btnDel" OnClientClick="return confirm('是否要刪除這個項目?');" />								
							</div>
						</ItemTemplate>
					</asp:TemplateField>    					                                     
                </Columns>
                <AlternatingRowStyle CssClass="even" />                
            </asp:GridView>             
        </ContentTemplate>       
    </asp:UpdatePanel>            
    <asp:UpdateProgress ID="p2" runat="server">
        <ProgressTemplate>
            <div class="updateprogress">
                <img src="../img/indicator.gif" />
                更新中...
            </div>
        </ProgressTemplate>
    </asp:UpdateProgress>             
       	
		<asp:ObjectDataSource ID="ObjectDataSource1" Runat="server" TypeName="PhotoManager" 
		SelectMethod="GetAlbums" DeleteMethod="RemoveAlbum" >
        <SelectParameters>                        
            <asp:QueryStringParameter Name="ExpoType" DefaultValue="0" Type="Int32" QueryStringField="ExpoType" />
            <asp:QueryStringParameter Name="Series" DefaultValue="0" Type="Int32" QueryStringField="Series" />
            <asp:Parameter Name="Lang" DefaultValue="chi" Type="string" />
        </SelectParameters>
        <DeleteParameters>
            <asp:Parameter Name="AlbumID" Type="Int32" />
        </DeleteParameters>   
	</asp:ObjectDataSource>                  
       
</asp:Content>