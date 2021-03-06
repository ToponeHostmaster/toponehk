Imports iT2ec.BusinessLogicLayer
Imports System.IO
Imports System.Text.RegularExpressions

Partial Class EditNews
    Inherits System.Web.UI.Page

    Protected Function ValidateCheck() As Boolean

        Dim errStrBuilder As New StringBuilder

        If txtProductName.Text.Trim.Length = 0 Then errStrBuilder.Append("<li>請填寫标題。</Li>")

        If FCKeditor1.Value.Trim.Length = 0 Then errStrBuilder.Append("<li>請填寫內容。</li>")

        If FileUpload1.HasFile Then
            Dim fileExt As String
            fileExt = Path.GetExtension(FileUpload1.FileName)

            If (fileExt.ToLower <> ".jpg") And (fileExt.ToLower <> ".jpeg") And (fileExt.ToLower <> ".gif") Then
                errStrBuilder.Append("<li>圖片只允許jpg, jpeg 及 gif 格式。</li>")
            End If
        End If

        If (Not String.IsNullOrEmpty(txtPDFName.Text.Trim)) And (FileUploadPDF.HasFile = False And FileUploadPDF.Visible = True) Then
            errStrBuilder.Append("<li>請上載第一個PDF檔案。</li>")
        End If

        If (Not String.IsNullOrEmpty(txtPDFName2.Text.Trim)) And (FileUploadPDF2.HasFile = False And FileUploadPDF2.Visible = True) Then
            errStrBuilder.Append("<li>請上載第二個PDF檔案。</li>")
        End If

        If (Not String.IsNullOrEmpty(txtPDFName3.Text.Trim)) And (FileUploadPDF3.HasFile = False And FileUploadPDF3.Visible = True) Then
            errStrBuilder.Append("<li>請上載第三個PDF檔案。</li>")
        End If

        If FileUploadPDF.HasFile Then
            Dim fileExt As String
            fileExt = Path.GetExtension(FileUploadPDF.FileName)

            If (fileExt.ToLower <> ".pdf") Then
                errStrBuilder.Append("<li>第一個PDF 檔案只允許 PDF 格式。</li>")
            End If

            If String.IsNullOrEmpty(txtPDFName.Text.Trim) Then
                errStrBuilder.Append("<li>請填寫第一個PDF檔案名稱。</li>")
            End If
        End If

        If FileUploadPDF2.HasFile Then
            Dim fileExt As String
            fileExt = Path.GetExtension(FileUploadPDF2.FileName)

            If (fileExt.ToLower <> ".pdf") Then
                errStrBuilder.Append("<li>第二個PDF 檔案只允許 PDF 格式。</li>")
            End If

            If String.IsNullOrEmpty(txtPDFName2.Text.Trim) Then
                errStrBuilder.Append("<li>請填寫第二個PDF檔案名稱。</li>")
            End If
        End If

        If FileUploadPDF3.HasFile Then
            Dim fileExt As String
            fileExt = Path.GetExtension(FileUploadPDF3.FileName)

            If (fileExt.ToLower <> ".pdf") Then
                errStrBuilder.Append("<li>第三個PDF 檔案只允許 PDF 格式。</li>")
            End If

            If String.IsNullOrEmpty(txtPDFName3.Text.Trim) Then
                errStrBuilder.Append("<li>請填寫第三個PDF檔案名稱。</li>")
            End If
        End If

        If Date2.Text.Trim.Length = 0 Then errStrBuilder.Append("<li>請填寫公佈日期。</Li>")
        If TxtHeight.Text.Trim.Length = 0 Then txtWidth.Text = 0
        If TxtHeight.Text.Trim.Length = 0 Then txtWidth.Text = 0

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

    Protected Sub btnCancel_Click(ByVal sender As Object, ByVal e As System.EventArgs) Handles btnCancel.Click
        Response.Redirect("news.aspx")
    End Sub


    Protected Property NewsID() As Integer
        Get
            Return CInt(ViewState("NewsID"))
        End Get
        Set(ByVal value As Integer)
            ViewState("NewsID") = value
        End Set
    End Property

    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load

        If Not IsPostBack Then
            initialData()
        End If
    End Sub

    Protected Sub initialData()

        Dim pid As Integer = Integer.Parse(Request.QueryString("ID"))

        Dim ds2 As MemberWhatsNewBLL = New MemberWhatsNewBLL()
        Dim News As iT2ecMember.whatsnewDataTable = ds2.GetNewsByID(pid)

        Dim Item As iT2ecMember.whatsnewRow = News(0)

        NewsID = Item.ID

        txtProductName.Text = Item.Title
        FCKeditor1.Value = Item.DetailContent
        Image1.ImageUrl = String.Format("~/ImageHandler3.ashx?ID={0}&PATH=~/Upload/News/&Size=S", Item.Photo)
        Date2.Text = String.Format("{0:dd/MM/yyyy}", Item.PublishDate)
        'Response.Write(Item.PublishDate)
        'Response.Write("day: " & Item.PublishDate.Day)
        'Response.Write("month: " & Item.PublishDate.Month)
        'Response.Write("year: " & Item.PublishDate.Year)
        'Response.Write(Item.PublishDate.ToString())\
       

        'Response.Write(String.Format("{0:MM/dd/yyyy}", Date2.Text))

        TxtHeight.Text = Item.PhotoHeight
        txtWidth.Text = Item.PhotoWidth
        txtPDFName.Text = Item.PDFTitle
        txtPDFName2.Text = Item.PDFTitle2
        txtPDFName3.Text = Item.PDFTitle3

        If Not String.IsNullOrEmpty(txtPDFName.Text.Trim) Then
            ImgPDF1.Visible = True
            btnDelPDF1.Visible = True
            FileUploadPDF.Visible = False
        Else
            ImgPDF1.Visible = False
            btnDelPDF1.Visible = False
            FileUploadPDF.Visible = True
        End If

        If Not String.IsNullOrEmpty(txtPDFName2.Text.Trim) Then
            ImgPDF2.Visible = True
            btnDelPDF2.Visible = True
            FileUploadPDF2.Visible = False
        Else
            ImgPDF2.Visible = False
            btnDelPDF2.Visible = False
            FileUploadPDF2.Visible = True
        End If

        If Not String.IsNullOrEmpty(txtPDFName3.Text.Trim) Then
            ImgPDF3.Visible = True
            btnDelPDF3.Visible = True
            FileUploadPDF3.Visible = False
        Else
            ImgPDF3.Visible = False
            btnDelPDF3.Visible = False
            FileUploadPDF3.Visible = True
        End If

    End Sub

    Protected Sub btnSave_Click(ByVal sender As Object, ByVal e As System.EventArgs) Handles btnSave.Click
        If ValidateCheck() Then
            If FileUpload1.HasFile Then
                Try
                    Dim dirUrl As String = "~/upload/News/"
                    Dim dirPath = Server.MapPath(dirUrl)

                    Dim fileUrl As String = dirUrl + "/" + FileUpload1.FileName

                    FileUpload1.SaveAs(Server.MapPath(fileUrl))
                Catch ex As Exception
                    Throw ex
                End Try
            End If


            If FileUploadPDF.HasFile Then
                Try
                    Dim dirUrl As String = "~/upload/News/"

                    Dim dirPath As String = Server.MapPath(dirUrl)

                    Dim fileUrl As String = dirUrl + "/" + FileUploadPDF.FileName

                    FileUploadPDF.SaveAs(Server.MapPath(fileUrl))
                Catch ex As Exception
                    Throw ex
                End Try
            End If

            If FileUploadPDF2.HasFile Then
                Try
                    Dim dirUrl As String = "~/upload/News/"

                    Dim dirPath As String = Server.MapPath(dirUrl)

                    Dim fileUrl As String = dirUrl + "/" + FileUploadPDF2.FileName

                    FileUploadPDF2.SaveAs(Server.MapPath(fileUrl))
                Catch ex As Exception
                    Throw ex
                End Try
            End If

            If FileUploadPDF3.HasFile Then
                Try
                    Dim dirUrl As String = "~/upload/News/"

                    Dim dirPath As String = Server.MapPath(dirUrl)

                    Dim fileUrl As String = dirUrl + "/" + FileUploadPDF3.FileName

                    FileUploadPDF3.SaveAs(Server.MapPath(fileUrl))
                Catch ex As Exception
                    Throw ex
                End Try
            End If

            Dim ds As MemberWhatsNewBLL = New MemberWhatsNewBLL()

            'Dim d As Date = 

            Dim arr As Array = Date2.Text.Split("/")            
            Dim sdtime As String
            sdtime = arr(1) & "/" & arr(0) & "/" & arr(2)

            Dim result As Boolean

            result = ds.UpdateNews(NewsID, txtProductName.Text.Trim(), FileUpload1.FileName, FCKeditor1.Value.Trim, TxtHeight.Text, txtWidth.Text, sdtime, txtPDFName.Text, FileUploadPDF.FileName, txtPDFName2.Text, FileUploadPDF2.FileName, txtPDFName3.Text, FileUploadPDF3.FileName)
            If result Then Response.Redirect("news.aspx")

        End If
    End Sub

    Protected Sub btnRemoveImage_Click(ByVal sender As Object, ByVal e As System.Web.UI.ImageClickEventArgs) Handles btnRemoveImage.Click
        Dim ds As MemberWhatsNewBLL = New MemberWhatsNewBLL()
        ds.RemoveImage(NewsID)
        Response.Redirect(Request.Url.ToString)

    End Sub

    Protected Sub btnDelPDF1_Click(ByVal sender As Object, ByVal e As System.Web.UI.ImageClickEventArgs) Handles btnDelPDF1.Click
        Dim ds As MemberWhatsNewBLL = New MemberWhatsNewBLL()
        ds.RemovePDF(NewsID, 1)
        Response.Redirect(Request.Url.ToString)
    End Sub

    Protected Sub btnDelPDF2_Click(ByVal sender As Object, ByVal e As System.Web.UI.ImageClickEventArgs) Handles btnDelPDF2.Click
        Dim ds As MemberWhatsNewBLL = New MemberWhatsNewBLL()
        ds.RemovePDF(NewsID, 2)
        Response.Redirect(Request.Url.ToString)
    End Sub

    Protected Sub btnDelPDF3_Click(ByVal sender As Object, ByVal e As System.Web.UI.ImageClickEventArgs) Handles btnDelPDF3.Click
        Dim ds As MemberWhatsNewBLL = New MemberWhatsNewBLL()
        ds.RemovePDF(NewsID, 3)
        Response.Redirect(Request.Url.ToString)
    End Sub
End Class