using System;
using System.Collections;
using System.Configuration;
using System.Data;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.HtmlControls;
using System.Web.UI.WebControls;
using System.IO;
using System.Text;
using MailUtility;

public partial class action_page : System.Web.UI.Page
{
    private string name = string.Empty;
    private string email = string.Empty;
	private string message = string.Empty;

    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
           
            name = Request.Form.Get("name").ToString().Trim();
		    email = Request.Form.Get("email").ToString().Trim();
			message = Request.Form.Get("message").ToString().Trim();

            //Build a confirm information when submit successful.Defaul english.

            confirmInfo.Text = "Thank you for your enquiry, we will reply you soon!";
            
            string body = GetContent();

            Mail m = new Mail();

            MailEntity entity = new MailEntity();
            entity.Body = body;
            entity.Subject = "Topone contact message or Enquiry(SCH)";

            entity.From = email;

            String receipient;

            receipient = "trevor@topone.hk";               
            entity.To.Add(receipient);

            entity.ReadReceipt = false;

            m.Send(entity);

        }
    }

    public string GetContent()
    {
        string path = Server.MapPath("sendenquiry.txt");

        string content = File.ReadAllText(path);

        content = content.Replace("$csName$", name);		
        content = content.Replace("$Email$", email);
        content = content.Replace("$Message$", message);
        return content;
    }

    protected void btnOK_Click(object sender, EventArgs e)
    {
        Response.Redirect("index.html"); 
    }
}