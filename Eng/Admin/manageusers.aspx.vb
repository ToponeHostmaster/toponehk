Partial Class Admin_ManageUsers
    Inherits System.Web.Admin.WebAdminPage

    Private Const DATA_SOURCE_ROLES As String = "WebAdminDataSourceRoles"
    Private Const CURRENT_USER_COLLECTION As String = "WebAdminUserCollection"
    Private Const CURRENT_USER As String = "WebAdminCurrentUser"
    Private Const DATA_SOURCE As String = "WebAdminDataSource"


    Public Sub SetDataSourceRoles(ByVal v As Object)
        Session([DATA_SOURCE_ROLES]) = v
    End Sub

    Public Sub SetDataSource(ByVal v As Object)
        Session([DATA_SOURCE]) = v
    End Sub

    Public Sub BindGrid(ByVal displayNoUsersCreated As Boolean)
      
        DataGrid.DataSource = Session([DATA_SOURCE])

        DataGrid.DataBind()

        If (DataGrid.Rows.Count = 0) Then
            If (displayNoUsersCreated) Then
                noUsers.Visible = True
            Else
                notFoundUsers.Visible = True
            End If
        End If
    End Sub

    Public Sub IndexChanged(ByVal Sender As Object, ByVal e As GridViewPageEventArgs)
        DataGrid.PageIndex = e.NewPageIndex
        BindGrid(False)
    End Sub

    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load

        noUsers.Visible = False        

        If (Not IsPostBack) Then
            PopulateRepeaterDataSource()

            AlphabetRepeater.DataBind()

            Dim users As MembershipUserCollection            
            users = Membership.GetAllUsers
            users.Remove("Admin")

            Dim RoleArrays() As String = {"Gold", "Silver", "Free"}
            'RoleArrays = Roles.GetAllRoles()

            SetDataSourceRoles(RoleArrays)

            SetDataSource(users)
            BindGrid(True)
            DataGrid.HeaderStyle.HorizontalAlign = HorizontalAlign.Justify

        End If
    End Sub


    Public Sub ButtonClick(ByVal sender As Object, ByVal e As EventArgs)
        Dim button As LinkButton = sender
        Dim userName As String = button.CommandArgument
        SetCurrentUser(userName)
    End Sub


    Public Sub EnabledChanged(ByVal sender As Object, ByVal e As EventArgs)
        Dim checkBox As CheckBox = sender
        Dim item As GridViewRow = checkBox.Parent.Parent
        Dim label As Label = item.FindControl("UserNameLink")
        Dim userID As String = label.Text
        Dim user As MembershipUser = Membership.GetUser(userID, False)
        'MembershipUser user = (MembershipUser) CallWebAdminHelperMethod(true, "GetUser", new object[] {userID, false /* isOnline */}, new Type[] {typeof(string),typeof(bool)});
        user.IsApproved = checkBox.Checked

        'string  typeFullName = "System.Web.Security.MembershipUser, " + typeof(HttpContext).Assembly.GetName().ToString();;
        Dim typeFullName As String = "System.Web.Security.MembershipUser, " + user.GetType.Assembly.GetName.ToString()

        Dim tempType As Type = Type.GetType(typeFullName)

        'CallWebAdminHelperMethod(true, "UpdateUser", new object[] {(MembershipUser) user}, new Type[] {tempType});
        Membership.UpdateUser(user)

    End Sub


    Public Sub LinkButtonClick(ByVal sender As Object, ByVal e As CommandEventArgs)

        If (e.CommandName.Equals("EditUser")) Then
            CurrentUser = Convert.ToString(e.CommandArgument)
            ' do not prepend ~/ to this path since it is not at the root
            Response.Redirect("editUser_AboutUs.aspx?SelUser=" & Convert.ToString(e.CommandArgument))
        End If

        If (e.CommandName.Equals("DeleteUser")) Then
            CurrentUser = Convert.ToString(e.CommandArgument)            
            Response.Redirect("DeletedUser.aspx")
            '    UserID.Text = e.CommandArgument
            'AreYouSure.Text = String.Format(GetLocalResourceObject("AreYouSure"), UserID.Text)

        End If

    End Sub


    Public Overloads Sub PopulateRepeaterDataSource()
        PopulateRepeaterDataSource(AlphabetRepeater)
    End Sub


    Public Sub RedirectToAddUser(ByVal sender As Object, ByVal e As EventArgs)
        CurrentUser = Nothing
        'do not prepend ~/ to this path since it is not at the root
        Response.Redirect("adduser.aspx")
    End Sub


    Public Overloads Sub RetrieveLetter(ByVal sender As Object, ByVal e As RepeaterCommandEventArgs)
        RetrieveLetter(sender, e, DataGrid)
        SetDataSource(DataGrid.DataSource)
        BindGrid(False)
    End Sub


    Protected Sub RoleMembershipChanged(ByVal sender As Object, ByVal e As EventArgs)
        Try
            Dim box As CheckBox = sender

            ' Array manipulation because cannot use Roles static method (need different appPath).
            Dim u As String = CurrentUser
            Dim r As String = box.Text

            If box.Checked And (Roles.IsUserInRole(u, r) = False) Then
                Roles.AddUserToRole(u, r)
            ElseIf ((box.Checked = False) And (Roles.IsUserInRole(u, r) = True)) Then
                Roles.RemoveUserFromRole(u, r)
            End If

        Catch
            ' Ignore, e.g., user is already in role.

        End Try
    End Sub

    Public Overloads Sub SearchForUsers(ByVal sender As Object, ByVal e As EventArgs)
        SearchForUsers(sender, e, AlphabetRepeater, DataGrid, SearchByDropDown, TextBox1)
        SetDataSource(DataGrid.DataSource)
        BindGrid(False)
        'RolePlaceHolder.Visible = DataGrid.Rows.Count != 0;
    End Sub


    Private Sub SetCurrentUser(ByVal s As String)
        CurrentUser = s

        CheckBoxRepeater.DataSource = Session([DATA_SOURCE_ROLES])
        CheckBoxRepeater.DataBind()

        If (CheckBoxRepeater.Items.Count > 0) Then

            AddToRole.Text = String.Format(GetLocalResourceObject("AddToRoles2"), s)            

        Else

            AddToRole.Text = GetLocalResourceObject("NoRolesDefined")

        End If

        multiView1.ActiveViewIndex = 1

    End Sub

    Public Function GetToolTip(ByVal resourceName As String, ByVal itemName As String) As String

        Dim tempString As String = GetLocalResourceObject(resourceName)

        Return String.Format(GetGlobalResourceObject("GlobalResources", "ToolTipFormat"), tempString, itemName)

    End Function


    Public Function GetUserInRole(ByVal u As String, ByVal r As String) As Boolean

        Return Roles.IsUserInRole(u, r)

    End Function

    Protected Overrides Sub OnInit(ByVal e As EventArgs)
        MyBase.OnInit(e)
    End Sub

End Class
