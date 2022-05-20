Partial Class Admin_EditUser_Acct
    Inherits System.Web.Member.BasicPage

    Dim cm As ProfileCommon

    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load
        If Not IsPostBack Then
            SelUser = Request.QueryString("SelUser").Trim()
            lblMemberID.Text = SelUser

            Dim m As MembershipUser = Membership.GetUser(SelUser)
            txtPasswd.Text = m.GetPassword()
            ChkisActive.Checked = m.IsApproved
            lblFrom.Text = "info@it2ec.com"
            lblTo.Text = m.Email
            cm = Profile.GetProfile(SelUser)
            lblActivationCode.Text = cm.ActivationCode
            OptMemberType.SelectedValue = cm.Type

            Dim HtmlFile As HTMLTemplateParser = New HTMLTemplateParser()
            HtmlFile.TemplateFileName = HttpContext.Current.Server.MapPath("EditUser_acct.txt")
            'HtmlFile.Username = cm.ContactPerson            

            HtmlFile.Tokens = "<% username %>|<% memberid %>|<% password %>|<% activationcode %>"
            HtmlFile.TokenValues = cm.tmtContactPerson & "|" & cm.UserName & "|" & m.GetPassword & "|" & cm.ActivationCode
            MailContent.Value = HtmlFile.GetParsedHtmlFile()
            lblMailStatus.Text = ""
        End If
    End Sub

    Protected Sub btnUpdate_Click(ByVal sender As Object, ByVal e As System.EventArgs) Handles btnUpdate.Click
       SelUser = Request.QueryString("SelUser").Trim()
       
        Dim m As MembershipUser = Membership.GetUser(SelUser)
        cm = Profile.GetProfile(SelUser)

        Dim isChange As Boolean = False

        If txtPasswd.Text <> m.GetPassword Then
            m.ChangePassword(m.GetPassword, txtPasswd.Text)
            isChange = True
        End If

        If ChkisActive.Checked <> m.IsApproved Then
            m.IsApproved = ChkisActive.Checked
            isChange = True
        End If

        If isChange Then
            Membership.UpdateUser(m)
        End If

        If OptMemberType.SelectedValue <> cm.Type Then
            cm.Type = OptMemberType.SelectedValue
            cm.Save()
        End If
        Response.Redirect(Request.Url.ToString)

    End Sub

    Protected Sub btnSendMail_Click(ByVal sender As Object, ByVal e As System.EventArgs) Handles btnSendMail.Click
        Dim result As Boolean = SendEMail(lblFrom.Text, "iT2ec Admin", lblTo.Text, "Your iT2ec Registration Confirmation ", MailContent.Value)
        If result Then
            lblMailStatus.Text = "You have sent the Email!"
        End If
    End Sub

End Class