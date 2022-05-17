<%@ Page Language="VB" MasterPageFile="~/admin.master" AutoEventWireup="false" CodeFile="changepwd.aspx.vb" Inherits="Admin_changepwd" title="Untitled Page" %>
<asp:Content ID="Content1" ContentPlaceHolderID="AdminPlaceHolder" Runat="Server">
   <div id="content">
          <asp:ChangePassword ID="ChangePassword1" runat="server" CancelDestinationPageUrl="~/Default.aspx"
              ContinueDestinationPageUrl="~/Default.aspx">
          </asp:ChangePassword>      
   </div>
</asp:Content>

