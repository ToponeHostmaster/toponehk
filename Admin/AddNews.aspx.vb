Imports iT2ec.BusinessLogicLayer
Imports System.IO
Imports System.Text.RegularExpressions

Partial Class AddNews
    Inherits System.Web.UI.Page


    Protected Sub btnAdd_Click(ByVal sender As Object, ByVal e As System.EventArgs) Handles btnAdd.Click

        If ValidateCheck() Then

            If FileUpload1.HasFile Then
                Try
                    Dim dirUrl As String = "~/upload/News/"

                    Dim dirPath As String = Server.MapPath(dirUrl)

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

            Dim arr As Array = Date2.Text.Split("/")
            Dim sdtime As String = arr(1) & "/" & arr(0) & "/" & arr(2)

            Dim result As Boolean

            result = ds.AddNews(txtProductName.Text.Trim(), FileUpload1.FileName, FCKeditor1.Value.Trim, TextBox1.Text, TextBox2.Text, sdtime, txtPDFName.Text, FileUploadPDF.FileName, txtPDFName2.Text, FileUploadPDF2.FileName, txtPDFName3.Text, FileUploadPDF3.FileName, "chi")

            If result Then Response.Redirect("news.aspx")

        End If
    End Sub

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

        If (Not String.IsNullOrEmpty(txtPDFName.Text.Trim)) And (FileUploadPDF.HasFile = False) Then
            errStrBuilder.Append("<li>請上載第一個PDF檔案。</li>")
        End If

        If (Not String.IsNullOrEmpty(txtPDFName2.Text.Trim)) And (FileUploadPDF2.HasFile = False) Then
            errStrBuilder.Append("<li>請上載第二個PDF檔案。</li>")
        End If

        If (Not String.IsNullOrEmpty(txtPDFName3.Text.Trim)) And (FileUploadPDF3.HasFile = False) Then
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
        If TextBox1.Text.Trim.Length = 0 Then TextBox1.Text = 0
        If TextBox2.Text.Trim.Length = 0 Then TextBox2.Text = 0


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

    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load
        If Not IsPostBack Then
            Date2.Text = String.Format("{0:dd/MM/yyyy}", Now.Date)
            TextBox1.Text = 0
            TextBox2.Text = 0
        End If
    End Sub
End Class