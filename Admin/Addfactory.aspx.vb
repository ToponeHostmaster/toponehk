
Partial Class Member_Admin_factory
    Inherits System.Web.UI.Page

    Protected Sub btnAdd_Click(ByVal sender As Object, ByVal e As System.EventArgs) Handles btnAdd.Click

        If ValidateCheck() Then
            If Request.QueryString("ExpoType") = AlbumType.講座資料 Then
                PhotoManager.AddAlbum(txtProductName.Text.Trim, txtAuthor.Text.Trim, FCKeditor1.Value.Trim, Request.QueryString("ExpoType"), DropDownList1.SelectedValue, "chi")
            Else
                PhotoManager.AddAlbum(txtProductName.Text.Trim, String.Empty, FCKeditor1.Value.Trim, Request.QueryString("ExpoType"), 0, "chi")
            End If
            RedirectPage()

        End If
    End Sub

    Protected Function ValidateCheck() As Boolean

        Dim errStrBuilder As New StringBuilder

        If txtProductName.Text.Trim.Length = 0 Then errStrBuilder.Append("<li>請填寫标題。</Li>")

        If FCKeditor1.Value.Trim.Length = 0 Then errStrBuilder.Append("<li>請填寫內容。</li>")

        If Request.QueryString("ExpoType") = AlbumType.講座資料 Then
            If txtAuthor.Text.Trim.Length = 0 Then errStrBuilder.Append("<li>請填寫主講。</Li>")
        End If

        Dim errstr As String = errStrBuilder.ToString.Trim()

        'Response.Write(MemDDLCategory.SelectedValue)

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

    Protected Sub RedirectPage()
        If Request.QueryString("ExpoType") = 2 Then
            Response.Redirect("Factory2.aspx?ExpoType=" & Request.QueryString("ExpoType"))
        Else
            Response.Redirect("Factory.aspx?ExpoType=" & Request.QueryString("ExpoType"))
        End If

    End Sub
    Protected Sub btnCancel_Click(ByVal sender As Object, ByVal e As System.EventArgs) Handles btnCancel.Click
        RedirectPage()
    End Sub

End Class
