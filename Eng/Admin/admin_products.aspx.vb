Imports iT2ec.BusinessLogicLayer
Partial Class Admin_admin_products
    Inherits System.Web.UI.Page

	

    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load
        If (Not Page.IsPostBack) Then

            LoadProductList()

        End If
    End Sub

    Private Sub LoadProductList()
        '   dgProducts.DataSource = ProductManager.GetProducts()
        ' dgProducts.DataBind()
    End Sub
End Class
