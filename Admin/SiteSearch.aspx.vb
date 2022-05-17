
Partial Class Member_Admin_SiteSearch
    Inherits System.Web.UI.Page


    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load
        'HyperLink1.NavigateUrl = "AddFactory.aspx?ExpoType=" & Request.QueryString("ExpoType")
        HyperLink1.NavigateUrl = "AddSiteSearch.aspx"
    End Sub

    Function GetKeyword(ByVal key1 As String, ByVal Key2 As String, ByVal Key3 As String) As String

        Dim keywords As New StringBuilder

        keywords.Append(key1)

        If Not String.IsNullOrEmpty(Key2.Trim) Then
            keywords.Append(" , " & Key2)
        End If

        If Not String.IsNullOrEmpty(Key3.Trim) Then
            keywords.Append(" , " & Key3)
        End If

        Return keywords.ToString

    End Function
End Class
