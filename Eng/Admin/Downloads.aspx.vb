Imports iT2ec.BusinessLogicLayer
Imports System.IO

Partial Class Member_Admin_Downloads
    Inherits System.Web.UI.Page

    Protected Sub UploadFile_Click(ByVal sender As Object, ByVal e As System.EventArgs) Handles UploadFile.Click

        If ValidateCheck() Then

            If FileUpload1.HasFile = True And FileUpload1.Enabled = True Then
                Try
                    Dim dirUrl As String = String.Empty

                    If TypeID = DocType.會議記錄節錄 Then
                        dirUrl = "~/upload/minutes/"
                    ElseIf TypeID = DocType.規章 Then
                        dirUrl = "~/upload/IntraRules/"
                    ElseIf TypeID = DocType.理事會會議記錄 Then
                        dirUrl = "~/upload/IntraMinutes/"
                    ElseIf TypeID = DocType.會務通告 Then
                        dirUrl = "~/upload/IntraNotices/"
                    End If

                    Dim dirPath = Server.MapPath(dirUrl)

                    Dim fileUrl As String = dirUrl + "/" + FileUpload1.FileName

                    FileUpload1.SaveAs(Server.MapPath(fileUrl))

                Catch ex As Exception
                    Throw ex
                End Try

                Dim result As Boolean

                Dim dbController As MemberDownloadsBLL = New MemberDownloadsBLL()

                result = dbController.AddFile(imgTitle.Text, FileUpload1.FileName, TypeID, "chi")

                If result Then Response.Redirect("downloads.aspx?type=" & TypeID)

            End If

        End If

    End Sub

    Function getPath(ByVal filename As String) As String
        Dim dirURL As String = String.Empty

        If TypeID = DocType.會議記錄節錄 Then
            dirURL = "/upload/minutes/"
        ElseIf TypeID = DocType.規章 Then
            dirURL = "/upload/IntraRules/"
        ElseIf TypeID = DocType.理事會會議記錄 Then
            dirURL = "/upload/IntraMinutes/"
        ElseIf TypeID = DocType.會務通告 Then
            dirURL = "/upload/IntraNotices/"
        End If

        Return dirURL & filename

    End Function

    Protected Function ValidateCheck() As Boolean

        Dim validate As Boolean = True

        If String.IsNullOrEmpty(imgTitle.Text.Trim) Then
            errFileCaption.Text = "請填寫檔案名稱"
            errFileCaption.Visible = True
            validate = False
        Else
            errFileCaption.Visible = False
        End If

        If FileUpload1.HasFile Then
            Dim fileExt As String
            fileExt = Path.GetExtension(FileUpload1.FileName)

            If (fileExt.Trim.ToLower <> ".pdf") Then
                errFile.Text = "只限PDF檔案"
            End If
        Else
            errFile.Text = "請上載檔案"
        End If

        If errFile.Text.Length > 0 Then
            errFile.Visible = True
            validate = False
        Else
            errFile.Visible = False
        End If

        Return validate

    End Function


    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load
        If Not IsPostBack Then
            errFile.Text = String.Empty
            errFileCaption.Text = String.Empty
            errFile.Visible = False
            errFileCaption.Visible = False
            TypeID = Integer.Parse(Request.QueryString("type"))
        End If
    End Sub

    Protected Property TypeID() As Integer
        Get
            Return CInt(ViewState("TypeID"))
        End Get
        Set(ByVal value As Integer)
            ViewState("TypeID") = value
        End Set
    End Property

End Class
