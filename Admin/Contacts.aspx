<%@ Page Language="VB" MasterPageFile="~/admin2.master" AutoEventWireup="false" CodeFile="Contacts.aspx.vb" Inherits="EditUser_Expos" title="Untitled Page" MaintainScrollPositionOnPostback="false" %>
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
                <uc2:AdminToolBar id="AdminToolBar1" runat="server"></uc2:AdminToolBar>                   
                </td>
              </tr>
            </table></td>
        <tr> 
          <td>
          
              <table width="100%" border="0" cellpadding="0" cellspacing="0" class="px11" >
              <tr> 
                <td width="100" bgcolor="CAE7FF" style="height: 36px">&nbsp;</td>
                <td bgcolor="CAE7FF" style="height: 36px" nowrap>                
                    <uc1:AdminSubToolBar id="AdminSubToolBar1" runat="server"></uc1:AdminSubToolBar>                
           </td>
              </tr>
            </table>
           
           </td>
              </tr>
            </table>

<asp:ScriptManager ID="s1" EnablePartialRendering="true" runat="server" />

<div class="products">      
    <div class="productsheader">
        <h2>通訊資料</h2>
        
        <div class="insertlink">            
            <asp:HyperLink ID="HyperLink1" runat="server">新增聯絡人</asp:HyperLink>
            
        </div>
    </div>
</div>                    
    <asp:UpdatePanel ID="p1" runat="server">
        <ContentTemplate>  
        <table border=0 cellpadding=0 cellspacing=0 width="100%"><tr><td align="right">      
         <div class="rightblock">     
         <div class="newscrumbs">
                    <asp:LinkButton ID="showall" runat="server" Text="All" OnClick="showall_Click" />
                    <asp:SqlDataSource ConnectionString="<%$ ConnectionStrings:LocalSqlServer %>" ID="SqlDataSource1"
                        runat="server" SelectCommand="UserCountByLetter" SelectCommandType="StoredProcedure" />
                    <asp:Repeater DataSourceID="SqlDataSource1" ID="Repeater1" runat="server">
                        <ItemTemplate>
                            <asp:LinkButton ID="hp1" runat="server" Text='<%#Eval("letter")%>' Visible='<%# CInt(Eval("num"))>0 %>'
                                OnClick="hp1_Click" CssClass='<%# LinkClass(CSTR(EVAL("letter")))%>' />
                            <asp:Label ID="LinkButton1" runat="server" Text='<%#Eval("letter")%>' Visible='<%# CInt(Eval("num"))=0 %>' />
                        </ItemTemplate>
                    </asp:Repeater>        
        </div> 
        </div>               
        </td></tr></table>              
            <asp:GridView ID="GridView1" CssClass="gridview" AlternatingRowStyle-CssClass="even" GridLines="None" runat="server"
          BorderWidth="0px"  cellpadding="6" AllowPaging="True" pageSize=10 AllowSorting="True" AutoGenerateColumns="False" DataKeyNames="ID" DataSourceID="ObjectDataSource2" EnableViewState="false" >
          <pagerstyle HorizontalAlign="Center"/>
          <PagerSettings Mode="NumericFirstLast"  Position="Bottom" />            
                <EmptyDataTemplate>
				現在你没有資料
				</EmptyDataTemplate>
				<EmptyDataRowStyle CssClass="emptydata"></EmptyDataRowStyle>                
                <Columns>             				        					                                                                                                        
                     <asp:TemplateField  HeaderText="名字" SortExpression="firstname"> 
                      <ItemStyle Width="50" />
                     <ItemTemplate>                          	
                            <asp:label runat="server" id="firstname" forecolor='black' text='<%# Eval("FirstName")%>'/>                            
                    </ItemTemplate>                                                                           
                    </asp:TemplateField>    
                    <asp:TemplateField  HeaderText="姓氏" SortExpression="LastName"> 
                    <ItemStyle Width="50" />
                     <ItemTemplate>
                          	<div style="width:100%;text-align:left;">
                            <asp:label runat="server" id="LastName" forecolor='black' text='<%# Eval("LastName")%>'/>
                            </div>
                    </ItemTemplate>                                                                           
                    </asp:TemplateField>   
                     <asp:TemplateField  HeaderText="中文姓名" SortExpression="ChineseName"> 
                    <ItemStyle Width="60" />
                     <ItemTemplate>
                          	<div style="width:100%;text-align:left;">
                            <asp:label runat="server" id="ChineseName" forecolor='black' text='<%# Eval("ChineseName")%>'/>
                            </div>
                    </ItemTemplate>                                                                           
                    </asp:TemplateField>                                                                                                                      
                      <asp:TemplateField  HeaderText="電郵地址" SortExpression="Email">
                    <ItemStyle Width="100" />                          
                        <ItemTemplate>                            
                             <asp:label runat="server" id="email" forecolor='black' text='<%# eval("Email") %>'/>
                        </ItemTemplate>
                    </asp:TemplateField> 
                      <asp:TemplateField  HeaderText="電話" SortExpression="Phone">
                    <ItemStyle Width="50" />                          
                        <ItemTemplate>                            
                             <asp:label runat="server" id="phone" forecolor='black' text='<%# eval("phone") %>'/>
                        </ItemTemplate>
                    </asp:TemplateField> 
                      <asp:TemplateField  HeaderText="傳真" SortExpression="fax">
                    <ItemStyle Width="50" />                          
                        <ItemTemplate>                            
                             <asp:label runat="server" id="fax" forecolor='black' text='<%# eval("fax") %>'/>
                        </ItemTemplate>
                    </asp:TemplateField> 
                       <asp:TemplateField  HeaderText="地址" SortExpression="address">
                    <ItemStyle Width="400" />                          
                        <ItemTemplate>                            
                             <asp:label runat="server" id="address" forecolor='black' text='<%# eval("address") %>'/>
                        </ItemTemplate>
                    </asp:TemplateField> 
                    <asp:TemplateField>
						<ItemStyle Width="50" />
						<ItemTemplate>
							<div style="width:100%;text-align:right;">														
							<a href='EditContactList.aspx?ID=<%# Eval("ID")%>'><asp:Image ID="ImageButton2" Runat="server" skinid="btnEdit" AlternateText="Edit" /></a> &nbsp;&nbsp;
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
    
      <asp:ObjectDataSource ID="ObjectDataSource2" runat="server" DeleteMethod="DeleteData"
                InsertMethod="AddData" SelectMethod="GetDataByLetter"
                TypeName="iT2ec.BusinessLogicLayer.ContactListBLL" >
                 <SelectParameters>
                        <asp:Parameter DefaultValue="" Name="Filter" Type="String" />
                    </SelectParameters>
                <DeleteParameters>
                    <asp:Parameter Name="ID" Type="Int32" />                                                              
                </DeleteParameters>                                           
       </asp:ObjectDataSource>                       
       
</asp:Content>

