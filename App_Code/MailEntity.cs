using System;
using System.Collections.Generic;
using System.Web;


namespace MailUtility
{
    /// <summary>
    /// Summary description for MailEntity
    /// </summary>
    public class MailEntity
    {

        private String subject;
        /**/
        /// <summary>
        /// 邮件主题
        /// </summary>
        public String Subject
        {
            get
            {
                return subject;
            }
            set
            {
                subject = value;
            }
        }

        private String body;
        /**/
        /// <summary>
        /// 邮件内容
        /// </summary>
        public String Body
        {
            get
            {
                return body;
            }
            set
            {
                body = value;
            }
        }

        private List<String> to = new List<String>();
        /**/
        /// <summary>
        /// 收件人
        /// </summary>
        public List<String> To
        {
            get
            {
                return to;
            }
            set
            {
                to = value;
            }
        }

        private String from;

        public string From
        {
            get
            {
                return from;
            }
            set
            {
                from = value;
            }

        }

        private Boolean readReceipt;

        public Boolean ReadReceipt
        {
            get
            {
                return readReceipt;
            }
            set
            {
                readReceipt = value;
            }
        }


    }
}