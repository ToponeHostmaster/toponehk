<%@ Page Language="VB" MasterPageFile="~/admin.master" AutoEventWireup="false" CodeFile="ManageUsers.aspx.vb" Inherits="Admin_ManageUsers" title="Manage Users" %>
<asp:Content ID="Content1"  ContentPlaceHolderID="AdminPlaceHolder" Runat="Server">
<table width="750"><tr><td align="left" style="width: 746px" >
<asp:literal runat="server" text="<%$ Resources:Instructions %>" />
</td></tr></table>
<%-- Cause the textbox to submit the page on enter, raising server side onclick--%>
<input type="text" style="visibility:hidden"/>
<table cellspacing="0" cellpadding="5" class="lrbBorders" width="750">
    <tr>
        <td align="left" style="height: 20px; width: 750px;"><asp:literal runat="server" text="<%$ Resources:SearchForUsers %>"/></td>
    </tr>
    <tr >
        <td align="left" style="height: 86px; width: 750px;" >
            <asp:Label runat="server" AssociatedControlID="SearchByDropDown" Text="<%$ Resources:SearchBy %>"/>
            <asp:dropDownList runat="server" id="SearchByDropDown">
            <asp:listItem runat="server" id="Item1" text="<%$ Resources:Username %>" />
            <asp:listitem runat="server" id="Item2" text="<%$ Resources:Email %>" />
            </asp:dropdownlist>
            &nbsp;&nbsp;<asp:Label runat="server" AssociatedControlID="TextBox1" Text="<%$ Resources:For %>"/>
            <asp:textbox runat="server" id="TextBox1"/>
            <asp:button runat="server" text="<%$ Resources:SearchFor %>" onclick="SearchForUsers"/>            
            
            <br/>
            <asp:Label runat="server" id="AlphabetInfo" Text="<%$ Resources:GlobalResources,AlphabetInfo %>"/><br/>            
            
            <asp:repeater runat="server" id="AlphabetRepeater" onitemcommand="RetrieveLetter">
                <itemtemplate>
                <asp:linkbutton runat="server" id="LinkButton1" commandname="Display" commandargument="<%#Container.DataItem%>" text="<%#Container.DataItem%>"/>
                &nbsp;
                </itemtemplate>
            </asp:repeater>
        </td>
</table>
<table cellspacing="0" cellpadding="0" border="0" id="hook" width="750">
    <tbody>
    <tr align="left" valign="top">
        <td width="62%" height="100%" class="lbBorders">
            <asp:gridview runat="server" id="DataGrid" width="100%" cellpadding="4" border="0" autogeneratecolumns="False" allowpaging="True" pagesize="7" onpageindexchanging="IndexChanged" ForeColor="#333333" GridLines="None">
            <rowstyle cssclass="gridRowStyle" BackColor="#EFF3FB" />
            <alternatingrowstyle cssclass="gridAlternatingRowStyle" BackColor="White" />
            <pagerstyle cssClass="gridPagerStyle" BackColor="#2461BF" ForeColor="White" HorizontalAlign="Center"/>
            <headerstyle cssclass="callOutStyle" font-bold="True" BackColor="#507CD1" ForeColor="White" />
            <selectedrowstyle cssclass="gridSelectedRowStyle" BackColor="#D1DDF1" Font-Bold="True" ForeColor="#333333"/>
            <columns>
           
                        
            <asp:templatefield headertext="<%$ Resources:Active %>">
            <headerstyle horizontalalign="Center"/>
            <itemstyle horizontalalign="Center"/>
            <itemtemplate>
            <asp:checkBox runat="server" id="CheckBox1" oncheckedchanged="EnabledChanged" autopostback="true" checked='<%#DataBinder.Eval(Container.DataItem, "IsApproved")%>'/>
            </itemtemplate>
            </asp:templatefield>

            <asp:templatefield headertext="<%$ Resources:Username %>">
            <itemtemplate>
            <asp:label runat="server" id="UserNameLink" forecolor='black' text='<%#DataBinder.Eval(Container.DataItem, "UserName")%>'/>
            </itemtemplate>
            </asp:templatefield>

            <asp:templatefield>
            <itemtemplate>
            <asp:linkButton runat="server" id="LinkButton1" text="<%$ Resources:EditUser %>" commandname="EditUser" toolTip='<%# GetToolTip("EditUser",DataBinder.Eval(Container.DataItem, "UserName").ToString()) %>' commandargument='<%#DataBinder.Eval(Container.DataItem, "UserName")%>' forecolor="black" oncommand="LinkButtonClick"/>
            </itemtemplate>
            </asp:templatefield>

            <asp:templatefield>
            <itemtemplate>
            <asp:linkButton runat="server" id="linkButton2" text="<%$ Resources:DeleteUser%>" commandname="DeleteUser" toolTip='<%# GetToolTip("DeleteUser",DataBinder.Eval(Container.DataItem, "UserName").ToString()) %>' commandargument='<%#DataBinder.Eval(Container.DataItem, "UserName")%>' forecolor="black" oncommand="LinkButtonClick"/>
            </itemtemplate>
            </asp:templatefield>

            <asp:templatefield>
            <itemtemplate>
            <asp:linkbutton runat="server" commandname="EditRoles" toolTip='<%# GetToolTip("EditRoles",DataBinder.Eval(Container.DataItem, "UserName").ToString()) %>' forecolor='black' onclick="ButtonClick" text="<%$ Resources:EditRoles %>" commandargument='<%# DataBinder.Eval(Container.DataItem, "UserName") %>'/>
            </itemtemplate>
            </asp:templatefield>

            </columns>
                <FooterStyle BackColor="#507CD1" Font-Bold="True" ForeColor="White" />
                <EditRowStyle BackColor="#2461BF" />
            </asp:gridview>

            
            <asp:label runat="server" id="noUsers" class="bodyTextNoPadding" enableViewState="false" visible="false" text="<%$ Resources:NoUsersCreated %>"/>
            <asp:label runat="server" id="notFoundUsers" class="bodyTextNoPadding" enableViewState="false" visible="false" text="<%$ Resources:NotFoundUsers %>"/>
            
        </td>
        <td width="32%" height="100%">
            <asp:placeholder runat="server" id="RolePlaceHolder">
                <table borderwidth="1px" cellpadding="5" cellspacing="0" height="100%" width="100%">
                    <tr class="callOutStyle">
                        <td valign="center"><asp:literal runat="server" text="<%$ Resources:Roles %>"/></td>
                    </tr>
                    <tr class="userDetailsWithFontSize" valign="top">
                        <td class="lrbBorders" height="100%" >
                            <asp:multiView runat="server" id="multiView1" activeviewindex="0">
                            <asp:view runat="server" id="view1">
                            </asp:view>
                            <asp:view runat="server" id="view2">
                            <asp:label runat="server" id="AddToRole" text="<%$ Resources:AddToRoles %>"/><br/>
                            <asp:repeater runat="server" id="CheckBoxRepeater">
                            <itemtemplate>
                            <asp:checkBox runat="server" id="CheckBox1" autopostback="true" oncheckedchanged="RoleMembershipChanged" text='<%# Container.DataItem.ToString()%>' checked='<%#GetUserInRole(CurrentUser, Container.DataItem) %>'/>
                            <br/>
                            </itemtemplate>
                            </asp:repeater>
                            </asp:view>
                            </asp:multiView>
                        </td>
                    </tr>
                </table>
            </asp:placeholder>
        </td>
    </tr>
    </tbody>
</table>
<table width="750"><tr><td></td></tr>
<asp:linkButton runat="server" id="LinkButton3" text="<%$ Resources:CreateNewUser %>" onclick="RedirectToAddUser"/></table>

</asp:Content>

