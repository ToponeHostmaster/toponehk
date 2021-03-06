<%@ Page Language="VB" MasterPageFile="~/admin2.master" AutoEventWireup="false" CodeFile="news.aspx.vb" Inherits="EditUser_Expos" title="Untitled Page" MaintainScrollPositionOnPostback="false" %>
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
          <td>
          
             <table width="100%" border="0" cellpadding="0" cellspacing="0" class="px11" >
              <tr> 
                <td width="100" bgcolor="CAE7FF" style="height: 36px">&nbsp;</td>
                <td bgcolor="CAE7FF" style="height: 36px" nowrap>
                <table height="28" border="0" cellpadding="0" cellspacing="0" class="px11">
                    <!--DWLayoutTable-->
                    <tr> 
                      <td width="615" height="28">
                     &nbsp;
                      </td>
                    </tr>
            </table>
           
           </td>
              </tr>
            </table></td>
        </tr>
      </table>      

<asp:ScriptManager ID="s1" EnablePartialRendering="true" runat="server" />

<div class="products">      
    <div class="productsheader">
        <h2>最新消息</h2>
        
        <div class="insertlink">            
            <asp:HyperLink ID="HyperLink1" runat="server">新增新聞</asp:HyperLink>
            
        </div>
    </div>
</div>
    <asp:UpdatePanel ID="p1" runat="server">
        <ContentTemplate>        
            <asp:GridView ID="GridView1" CssClass="gridview" AlternatingRowStyle-CssClass="even" GridLines="None" runat="server"
          BorderWidth="0px"  cellpadding="6" AllowPaging="True" pageSize=10 AllowSorting="True" AutoGenerateColumns="False" DataKeyNames="ID" DataSourceID="ObjectDataSource2" EnableViewState="false" >
          <pagerstyle HorizontalAlign="Center"/>
          <PagerSettings Mode="NumericFirstLast"  Position="Bottom" />            
                <EmptyDataTemplate>
				現在你没有最新消息
				</EmptyDataTemplate>
				<EmptyDataRowStyle CssClass="emptydata"></EmptyDataRowStyle>                
                <Columns>             
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
								    <td>
									    <asp:Image ID="Image1" runat="server" ImageUrl= '<%# String.Format("~/ImageHandler3.ashx?ID={0}&PATH=~/Upload/News/&Size=S", eval("photo"))%>' style="border:2px solid white;width:52px;" />
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
                     <asp:TemplateField  HeaderText="标題" SortExpression="Title"> 
                      <ItemStyle Width="100" />
                     <ItemTemplate>                          	
                            <asp:label runat="server" id="title" forecolor='black' text='<%# Eval("Title")%>'/>                            
                    </ItemTemplate>                                                                           
                    </asp:TemplateField>    
                    <asp:TemplateField  HeaderText="內容" SortExpression="DetailContent"> 
                     <ItemTemplate>
                          	<div style="width:100%;text-align:left;">
                            <asp:label runat="server" id="detailContent" forecolor='black' text='<%# Eval("DetailContent")%>'/>
                            </div>
                    </ItemTemplate>                                                                           
                    </asp:TemplateField>                                                           
                    <asp:TemplateField  HeaderText="公佈日期" SortExpression="publishdate">
                    <ItemStyle Width="100" />                          
                        <ItemTemplate>                            
                             <asp:label runat="server" id="publishdate" forecolor='black' text='<%#  String.Format("{0:dd/MM/yyyy}", Eval("publishdate"))%>'/>
                        </ItemTemplate>
                    </asp:TemplateField>   
                    <asp:TemplateField>
						<ItemStyle Width="50" />
						<ItemTemplate>
							<div style="width:100%;text-align:right;">														
							<a href='EditNews.aspx?ID=<%# Eval("ID")%>'><asp:Image ID="ImageButton2" Runat="server" skinid="btnEdit" AlternateText="Edit" /></a> &nbsp;&nbsp;
								<asp:ImageButton ID="ImageButton3" Runat="server" CommandName="Delete"  AlternateText="Delete" SkinID="btnDel" OnClientClick="return confirm('是否要刪除這個消息?');" />								
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
    
      <asp:ObjectDataSource ID="ObjectDataSource2" runat="server" DeleteMethod="DeleteNews"
                InsertMethod="AddNews" SelectMethod="GetNews"
                TypeName="iT2ec.BusinessLogicLayer.MemberWhatsNewBLL" >
                <DeleteParameters>
                    <asp:Parameter Name="ID" Type="Int32" />                                                              
                </DeleteParameters>
                <SelectParameters >
                    <asp:Parameter Name="lang" Type='String' DefaultValue="chi" />
                </SelectParameters>                           
       </asp:ObjectDataSource>                       
       
</asp:Content>

