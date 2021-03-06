
Partial Class Member_Admin_Editfactory
    Inherits System.Web.UI.Page

    Protected Sub btnSave_Click(ByVal sender As Object, ByVal e As System.EventArgs) Handles btnSave.Click

        If ValidateCheck() Then
            If Request.QueryString("ExpoType") = AlbumType.講座資料 Then
                PhotoManager.EditAlbum(AlbumID, txtProductName.Text.Trim, txtAuthor.Text, FCKeditor1.Value.Trim, AlbumType.講座資料, DropDownList1.SelectedValue)
            Else
                PhotoManager.EditAlbum(AlbumID, txtProductName.Text.Trim, String.Empty, FCKeditor1.Value.Trim, Request.QueryString("ExpoType"), 0)
            End If
            RedirectPage()
        End If
    End Sub

    Protected Function ValidateCheck() As Boolean

        Dim errStrBuilder As New StringBuilder

        If txtProductName.Text.Trim.Length = 0 Then errStrBuilder.Append("<li>請填寫标題。</Li>")

        If FCKeditor1.Value.Trim.Length = 0 Then errStrBuilder.Append("<li>請填寫內容。</li>")

        If _expoType = AlbumType.講座資料 Then
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


    Protected Property AlbumID() As Integer
        Get
            Return CInt(ViewState("AlbumID"))
        End Get
        Set(ByVal value As Integer)
            ViewState("AlbumID") = value
        End Set
    End Property

    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load

        If Not IsPostBack Then
            initialData()
        End If
    End Sub

    Public _expoType As Integer
    Protected Sub initialData()
        AlbumID = Integer.Parse(Request.QueryString("AlbumID"))

        Dim list As Generic.List(Of Album) = PhotoManager.GetAlbum(AlbumID)
        Dim item As Album = list.Item(0)

        txtProductName.Text = item.Caption
        FCKeditor1.Value = item.Description
        _expoType = item.ExpoType
        If _expoType = AlbumType.講座資料 Then
            txtAuthor.Text = item.Author
            DropDownList1.SelectedValue = item.Series
        End If
    End Sub

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
