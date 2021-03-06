Imports iT2ec.BusinessLogicLayer
Imports System.IO
Imports System.Text.RegularExpressions

Partial Class AddContactList
    Inherits System.Web.UI.Page


    Protected Sub btnAdd_Click(ByVal sender As Object, ByVal e As System.EventArgs) Handles btnAdd.Click

        If ValidateCheck() Then

            Dim ds As ContactListBLL = New ContactListBLL()

            Dim result As Boolean

            result = ds.AddData(txtFirstName.Text, txtLastName.Text, txtChineseName.Text, txtAddress.Text, txtEmail.Text, txtTel.Text, txtFax.Text)

            If result Then Response.Redirect("Contacts.aspx?type=5")

        End If
    End Sub

    Protected Function ValidateCheck() As Boolean

        Dim errStrBuilder As New StringBuilder

        If txtFirstName.Text.Trim.Length = 0 Then errStrBuilder.Append("<li>請填寫名字。</Li>")

        If txtLastName.Text.Trim.Length = 0 Then errStrBuilder.Append("<li>請填寫姓氏。</li>")

        If txtChineseName.Text.Trim.Length = 0 Then errStrBuilder.Append("<li>請填寫中文姓名。</Li>")

        If txtEmail.Text.Trim.Length = 0 Then errStrBuilder.Append("<li>請填寫電郵地址。</Li>")

        If txtTel.Text.Trim.Length = 0 Then errStrBuilder.Append("<li>請填寫電話號碼。</Li>")

        If txtFax.Text.Trim.Length = 0 Then errStrBuilder.Append("<li>請填寫傳真。</Li>")

        If txtAddress.Text.Trim.Length = 0 Then errStrBuilder.Append("<li>請填寫地址。</Li>")

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
        Response.Redirect("Contacts.aspx?type=5")
    End Sub

End Class