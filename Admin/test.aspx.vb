
Partial Class Admin_test
    Inherits System.Web.UI.Page

    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load
        Response.Write(Request.Url.PathAndQuery.ToString.Substring(1))

    End Sub
End Class
