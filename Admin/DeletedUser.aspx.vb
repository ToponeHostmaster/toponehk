Imports System.Data.SqlClient
Imports System.Data
Imports System.IO

Partial Class Admin_DeletedUser
    Inherits System.Web.admin.WebAdminPage

    Public Sub Yes_Click(ByVal sender As Object, ByVal e As EventArgs)
        Try

            Dim _username As String = UserID.Text
            Dim _memberid As Guid = Membership.GetUser(_username).ProviderUserKey

            Membership.DeleteUser(UserID.Text, True)

            ProfileManager.DeleteProfile(UserID.Text)

            Using connection As New SqlConnection(ConfigurationManager.ConnectionStrings("ASPNETDBConnectionString").ConnectionString)
                Using command As New SqlCommand("RemoveMember", connection)
                    command.CommandType = CommandType.StoredProcedure
                    command.Parameters.Add(New SqlParameter("@Original_id", _memberid))
                    command.Parameters.Add(New SqlParameter("@username", _username))                    
                    connection.Open()
                    command.ExecuteNonQuery()
                End Using
            End Using

            Dim dirpath As String = "/Members/upload/" & _username.Trim
            dirpath = MapPath(dirpath)

            Dim di As New DirectoryInfo(dirpath)
            If di.Exists() Then
                di.Delete(True)
            End If
        
            DialogMessage.Text = String.Format(GetLocalResourceObject("Sucessful"), CurrentUser)

        Catch ex As Exception

            DialogMessage.Text = ex.Message + "Please Contact your administrator"

        End Try

        Panel1.Visible = "False"

        PlaceHolder1.Visible = "True"

    End Sub

    Public Sub No_Click(ByVal sender As Object, ByVal e As EventArgs)

        'Response.Redirect("manageusers.aspx")
        'Label1.Text = CurrentRequestUrl()
        'Label1.Text = PopPrevRequestUrl()
        ReturnToPreviousPage(sender, e)

    End Sub

    Public Sub OK_Click(ByVal sender As Object, ByVal e As EventArgs)

        'Response.Redirect("manageusers.aspx")
        ReturnToPreviousPage(sender, e)

    End Sub

    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load

        Dim username As String = CurrentUser

        If (Not IsPostBack) Then
            UserID.Text = username
            AreYouSure.Text = String.Format(GetLocalResourceObject("AreYouSure"), username)

        End If

    End Sub

    Protected Overrides Sub OnInit(ByVal e As EventArgs)
        MyBase.OnInit(e)
    End Sub


End Class
