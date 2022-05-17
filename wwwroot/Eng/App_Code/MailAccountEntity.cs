using System;
using System.Collections.Generic;
using System.Web;

/// <summary>
/// Summary description for MailAccountEntity
/// </summary>
[Serializable]
public class MailAccountEntity
{
    private String userName;
    /**/
    /// <summary>
    /// 邮箱用户名
    /// </summary>
    public String UserName
    {
        get
        {
            return userName;
        }
        set
        {
            userName = value;
        }
    }

    private String password;
    /**/
    /// <summary>
    /// 邮箱密码
    /// </summary>
    public String Password
    {
        get
        {
            return password;
        }
        set
        {
            password = value;
        }
    }

    private Int32 port;
    /**/
    /// <summary>
    /// 邮箱port
    /// </summary>
    public Int32 Port
    {
        get
        {
            return port;
        }
        set
        {
            port = value;
        }
    }

    private String host;
    /**/
    /// <summary>
    /// 邮箱host，Smtp
    /// </summary>
    public String Host
    {
        get
        {
            return host;
        }
        set
        {
            host = value;
        }
    }

   


}