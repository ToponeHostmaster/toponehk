Imports iT2ec.BusinessLogicLayer

Partial Class Member_Admin_AddSiteSearch
    Inherits System.Web.UI.Page

    Protected Sub btnAdd_Click(ByVal sender As Object, ByVal e As System.EventArgs) Handles btnAdd.Click

        If ValidateCheck() Then

            Dim ds As SiteSearchBLL = New SiteSearchBLL()

            Dim result As Boolean

            result = ds.AddSearchURL(txtTitle.Text.Trim(), txtURL.Text.Trim, txtKey1.Text.Trim, txtKey2.Text.Trim, txtKey3.Text.Trim, txtDesc.Text.Trim, "chi")

            If result Then Response.Redirect("SiteSearch.aspx")
        End If
    End Sub

    Protected Function ValidateCheck() As Boolean

        Dim errStrBuilder As New StringBuilder

        If txtTitle.Text.Trim.Length = 0 Then errStrBuilder.Append("<li>請填寫标題。</Li>")

        If txtURL.Text.Trim.Length = 0 Then errStrBuilder.Append("<li>目的 URL。</Li>")

        If txtDesc.Text.Trim.Length = 0 Then errStrBuilder.Append("<li>請填寫簡單描述。</li>")

        If txtKey1.Text.Trim.Length = 0 Then errStrBuilder.Append("<li>第一個關鍵詞必須填寫。</li>")


        Dim errstr As String = errStrBuilder.ToString.Trim()

        If errstr.Length > 0 Then
            lblErrorMsgHeader.Visible = True
            lblErrorMsgDetails.Visible = True
            lblErrorMsgHeader.Text = "請修正以下的問題: <br/>"
            lblErrorMsgDetails.Text = "<UL>" & errstr & "</UL>"
            Return False
        Else
            lblErrorMsgHeader.Visible = False
            lblErrorMsgDetails.Visible = False
            Return True
        End If

    End Function


    Protected Sub btnCancel_Click(ByVal sender As Object, ByVal e As System.EventArgs) Handles btnCancel.Click
        Response.Redirect("SiteSearch.aspx")
    End Sub
End Class
