<%@ Page Language="VB" MasterPageFile="~/admin2.master" AutoEventWireup="false" CodeFile="SiteSearch.aspx.vb" Inherits="Member_Admin_SiteSearch" title="Untitled Page" %>
<%@ Register Assembly="FredCK.FCKeditorV2" Namespace="FredCK.FCKeditorV2" TagPrefix="FCKeditorV2" %>
<%@ Register Src="../Controls/AdminToolBar2.ascx" TagName="AdminToolBar" TagPrefix="uc2" %>

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
                 <table height="28" border="0" cellpadding="0" cellspacing="0" class="px11">
                    <!--DWLayoutTable-->
                    <tr> 
                      <td width="615" height="28">
                     &nbsp;
                      </td>
                    </tr>
            </table>          
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
        <h2>網站搜尋</h2>
        
        <div class="insertlink">            
            <asp:HyperLink ID="HyperLink1" runat="server">新增</asp:HyperLink>
            
        </div>
    </div>
</div>
       <asp:UpdatePanel ID="p1" runat="server">
        <ContentTemplate>
<asp:GridView id="GridView1" runat="server" EnableViewState="False" DataSourceID="ObjectDataSource1" DataKeyNames="ID" AutoGenerateColumns="False" AllowSorting="True" AllowPaging="True" cellpadding="6" BorderWidth="0px" GridLines="None" AlternatingRowStyle-CssClass="even" CssClass="gridview">
<PagerSettings Mode="NumericFirstLast"></PagerSettings>

<EmptyDataRowStyle CssClass="emptydata"></EmptyDataRowStyle>
<Columns>
<asp:TemplateField SortExpression="Title" HeaderText="标題">
<ItemStyle Width="100px"></ItemStyle>
<ItemTemplate>
                          	
      <asp:label runat="server" id="Caption" forecolor='black' text='<%# Eval("Title")%>'/>                            
                    
</ItemTemplate>
</asp:TemplateField>
<asp:TemplateField SortExpression="Description" HeaderText="內容"><ItemTemplate>
                          	<div style="width:100%;text-align:left;">
                            <asp:label runat="server" id="Description" forecolor='black' text='<%# Eval("Description")%>'/>
                            </div>
                    
</ItemTemplate>
</asp:TemplateField>
<asp:TemplateField SortExpression="Key1" HeaderText="關鍵詞"><ItemTemplate>
                          	<div style="width:100%;text-align:left;">
                  <asp:label runat="server" id="Keyword1" forecolor='black' text='<%#GetKeyword(Eval("Key1"), Eval("Key2"), Eval("Key3"))%>'/>
                            </div>
                    
</ItemTemplate>
</asp:TemplateField>
<asp:TemplateField>
<ItemStyle Width="50px"></ItemStyle>
<ItemTemplate>
							<div style="width:100%;text-align:right;">																					
							<a href='EditSiteSearch.aspx?ID=<%# Eval("ID")%>'><asp:Image ID="ImageButton2" Runat="server" skinid="btnEdit" AlternateText="Edit" /></a> &nbsp;&nbsp;
								<asp:ImageButton ID="ImageButton3" Runat="server" CommandName="Delete"  AlternateText="Delete" SkinID="btnDel" OnClientClick="return confirm('是否要刪除這個項目?');" />								
							</div>
						
</ItemTemplate>
</asp:TemplateField>
</Columns>
<EmptyDataTemplate>
            
				現在你没有資料
				
</EmptyDataTemplate>

<PagerStyle HorizontalAlign="Center"></PagerStyle>

<AlternatingRowStyle CssClass="even"></AlternatingRowStyle>
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
       	
		<asp:ObjectDataSource ID="ObjectDataSource1" Runat="server" TypeName="iT2ec.BusinessLogicLayer.SiteSearchBLL" 
		SelectMethod="GetSiteSearchByLang" DeleteMethod="DeleteSearchItem" >
        <SelectParameters>                                    
            <asp:Parameter Name="Lang" DefaultValue="chi" Type="String" />
        </SelectParameters>
        <DeleteParameters>
            <asp:Parameter Name="ID" Type="Int32" />
        </DeleteParameters>   
	</asp:ObjectDataSource>                  
       
</asp:Content>