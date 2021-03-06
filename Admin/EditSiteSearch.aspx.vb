Imports iT2ec.BusinessLogicLayer

Partial Class Member_Admin_EditSiteSearch
    Inherits System.Web.UI.Page

    Protected Sub btnSave_Click(ByVal sender As Object, ByVal e As System.EventArgs) Handles btnSave.Click

        If ValidateCheck() Then

            Dim ds As SiteSearchBLL = New SiteSearchBLL()

            Dim result As Boolean

            result = ds.UpdateSiteSearch(SearchItemID, txtTitle.Text.Trim(), txtURL.Text.Trim, txtKey1.Text.Trim, txtKey2.Text.Trim, txtKey3.Text.Trim, txtDesc.Text.Trim, "chi")

            If result Then Response.Redirect("SiteSearch.aspx")
        End If
    End Sub

    Protected Function ValidateCheck() As Boolean

        Dim errStrBuilder As New StringBuilder

        If txtTitle.Text.Trim.Length = 0 Then errStrBuilder.Append("<li>請填寫标題。</Li>")

        If txtURL.Text.Trim.Length = 0 Then errStrBuilder.Append("<li>目的 URL。</Li>")

        If txtDesc.Text.Trim.Length = 0 Then errStrBuilder.Append("<li>請填寫簡單描述。</li>")

        If txtKey1.Text.Trim.Length = 0 Then errStrBuilder.Append("<li>第一個關鍵詞必須填寫。</li>")


        Dim errstr As String = errStrBuilder.ToString.Trim()

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
        Response.Redirect("SiteSearch.aspx")
    End Sub


    Protected Property SearchItemID() As Integer
        Get
            Return CInt(ViewState("SearchItemID"))
        End Get
        Set(ByVal value As Integer)
            ViewState("SearchItemID") = value
        End Set
    End Property

    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load

        If Not IsPostBack Then
            initialData()
        End If
    End Sub

    Protected Sub initialData()

        Dim pid As Integer = Integer.Parse(Request.QueryString("ID"))

        Dim ds2 As SiteSearchBLL = New SiteSearchBLL()

        Dim items As iT2ecMember.SiteSearchDataTable = ds2.GetDataByID(pid)

        Dim Item As iT2ecMember.SiteSearchRow = items(0)

        SearchItemID() = Item.ID

        txtTitle.Text = Item.Title
        txtURL.Text = Item.URL
        txtDesc.Text = Item.Description
        txtKey1.Text = Item.Key1
        txtKey2.Text = Item.Key2
        txtKey3.Text = Item.Key3
        
    End Sub


End Class
