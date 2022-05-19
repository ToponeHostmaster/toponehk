Partial Class EditUser_Expos
    Inherits System.Web.UI.Page

    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load
        HyperLink1.NavigateUrl = "AddContactList.aspx"
    End Sub

    Protected Sub hp1_Click(ByVal sender As Object, ByVal e As System.EventArgs)
        Filter = CType(sender, LinkButton).Text
        ObjectDataSource2.SelectParameters(0).DefaultValue = Filter
    End Sub

    Private m_filter As String
    Property Filter() As String
        Get
            If m_filter Is Nothing Then
                Dim o As Object = ViewState("Filter")
                If Not o Is Nothing Then
                    m_filter = CStr(o)
                Else
                    m_filter = ""
                End If
            End If
            Return m_filter
        End Get
        Set(ByVal value As String)
            ViewState("Filter") = value
        End Set
    End Property

    Function linkClass(ByVal letter As String) As String
        If letter = Filter Then
            Return "selectedLetter"
        Else
            Return ""
        End If
    End Function

    Protected Sub showall_Click(ByVal sender As Object, ByVal e As System.EventArgs)
        Filter = ""
        ObjectDataSource2.SelectParameters(0).DefaultValue = Filter
    End Sub

    Public Function PreFormat(ByVal content As String) As String
        If Not content Is Nothing Then
            Return content.Replace(vbCrLf, "<br/>")
        Else
            Return Nothing
        End If
    End Function
End Class
