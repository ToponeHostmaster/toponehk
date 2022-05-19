
Partial Class Member_Admin_Photos
    Inherits System.Web.UI.Page

    Sub FormView1_ItemInserting(ByVal sender As Object, ByVal e As FormViewInsertEventArgs)
        If (CType(e.Values("BytesOriginal"), [Byte]()).Length = 0) Then
            e.Cancel = True
        End If
    End Sub

  
    Protected Sub btnAdd_Click(ByVal sender As Object, ByVal e As System.Web.UI.ImageClickEventArgs) Handles btnAdd.Click
        Dim cuser = Profile.UserName
        Dim id = Request.QueryString("AlbumID")
        Dim errStrBuilder As New StringBuilder

        If PhotoFile.HasFile Then         
            Dim fileExt As String
            fileExt = System.IO.Path.GetExtension(PhotoFile.FileName)

            If (fileExt.ToLower <> ".jpg") And (fileExt.ToLower <> ".jpeg") And (fileExt.ToLower <> ".gif") Then
                errStrBuilder.Append("<li>只是允許 jpg, jpeg 以及 gif 的圖片格式</li>")
            End If        
        Else
            errStrBuilder.Append("<li>請選擇圖片!</li>")
        End If

        'If String.IsNullOrEmpty(PhotoCaption.Text.Trim) Then
        '    errStrBuilder.Append("<li>請填寫標題!</Li>")
        'End If

        Dim errstr As String = errStrBuilder.ToString.Trim()

        If errstr.Length > 0 Then
            errmsg.Visible = True
            errmsg.Text = "<UL>" & errstr & "</UL>"
            Exit Sub
        Else
            errmsg.Visible = False
        End If

        PhotoManager.AddPhoto(id, PhotoCaption.Text, PhotoFile.FileBytes, chkSel.Checked)

        Response.Redirect("Photos.aspx?AlbumID=" & id & "&ExpoType=" & Request.QueryString("ExpoType"))


    End Sub

End Class