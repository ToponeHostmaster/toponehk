
Partial Class Member_Admin_factory2
    Inherits System.Web.UI.Page


    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load
        HyperLink1.NavigateUrl = "AddFactory.aspx?ExpoType=" & Request.QueryString("ExpoType")
    End Sub



End Class
