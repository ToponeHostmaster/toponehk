using System;
using System.Collections.Generic;
using System.Web;
using System.Net.Mail;
using System.Net;
using System.Configuration;
using System.Web.Configuration;
using System.Net.Configuration;

namespace MailUtility
{
    /// <summary>
    /// Summary description for Mail
    /// </summary>
    /// 

    public class Mail
    {
        public Mail()
        {
            //
            // TODO: Add constructor logic here
            //
        }

        /**//// <summary> 
        /// 邮件发送 
        /// </summary> 
        /// <param name="mailEntity"></param> 
        /// <returns></returns> 
        public Boolean Send ( MailEntity mailEntity ) { 
            Boolean isSucSended = true;                                                 

             try { 
                  
                 MailMessage mail = new MailMessage();
                    //'set the addresses 
                 mail.From = new MailAddress(mailEntity.From);          

                    if (mailEntity.To.Count > 0)
                    {
                        foreach (string ccItem in mailEntity.To)
                        {
                            mail.To.Add(ccItem);
                        }
                    }
                              
                    //'set the content 
                    mail.Subject = mailEntity.Subject;
                    mail.Body = mailEntity.Body;
                    mail.IsBodyHtml = true;
                                                   
                    //邮件编码 
                        mail.BodyEncoding = System.Text.Encoding.UTF8;
                        mail.SubjectEncoding = System.Text.Encoding.UTF8;   
                    //邮件收件人（列表） 

                    mail.DeliveryNotificationOptions = DeliveryNotificationOptions.OnFailure; 

                    if (mailEntity.ReadReceipt)
                    {
                        mail.Headers.Add("Disposition-Notification-To", HttpContext.Current.Session["Email"].ToString());
                    }

                    SmtpClient smtp = new SmtpClient();
                    // smtp.Credentials = CType(CredentialCache.DefaultNetworkCredentials, ICredentialsByHost)
                    
                    smtp.EnableSsl = false;

                    try
                    {
                        smtp.Send(mail);                        
                    }
                    catch (SmtpFailedRecipientsException ex)
                    {
                        int i = 0;
                        for (i = 0; i <= ex.InnerExceptions.Length - 1; i++)
                        {

                            SmtpStatusCode status = ex.InnerExceptions[i].StatusCode; 
                            if (status == SmtpStatusCode.MailboxBusy | status == SmtpStatusCode.MailboxUnavailable)
                            {
                                //Console.WriteLine("Delivery failed - retrying in 5 seconds.") 
                                System.Threading.Thread.Sleep(5000);
                                smtp.Send(mail);
                            }
                            else
                            {
                                //Console.WriteLine("Failed to deliver message to {0}", ex.FailedRecipient(i)) ;                              /
                                isSucSended = false; 
                            }
                        }
                    }
             }
             catch (SmtpFailedRecipientException ex)                
             {                 
                 isSucSended = false;
             }
             catch (System.Exception ex)
             {
                 isSucSended = false;
             }    
            return isSucSended; 
        } 

        /**//// <summary> 
        /// 获取MailAccount(SmtpAddress,UserName,Password,Port) 
        /// </summary> 
        /// <returns></returns> 
        private MailAccountEntity GetConfig() { 
            MailAccountEntity mailAccount = new MailAccountEntity (); 
            {

                //读取Config的中MailSettings配置段 

                Configuration config = WebConfigurationManager.OpenWebConfiguration("~/"); 
                MailSettingsSectionGroup mailSettings = NetSectionGroup.GetSectionGroup(config).MailSettings; 
                SmtpSection stmpSection = mailSettings.Smtp; 
                { 
                    mailAccount.Host = stmpSection.Network.Host; 
                    mailAccount.UserName = stmpSection.Network.UserName; 
                    mailAccount.Password = stmpSection.Network.Password; 
                    mailAccount.Port = stmpSection.Network.Port; 
                } 
            } 
            return mailAccount; 
        } 
    }
}