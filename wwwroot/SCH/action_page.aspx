<%@ Page Language="C#" CodeFile="action_page.aspx.cs" Inherits="action_page" %>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1/DTD/xhtml1-transitional.dtd">
  <HTML xmlns="http://www.w3.org/1999/xhtml">
    
    <head>
      <title>第一资讯科技有限公司</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="TopOne provides one-stop IT services for our customers including IT support, Server Maintenance, Email service, Web Hosting and Training." />
	<meta name="keywords" content="IT Support, IT Outsourcing, Computer Maintenance, Server Maintenance, Exchange Email" />
			<!--[if lte IE 8]>
				<script src="css/ie/html5shiv.js"></script>
			<![endif]-->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.dropotron.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/skel-layers.min.js"></script>
	<script src="js/init.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="js/jquery.zaccordion.js"></script>
	<script charset="UTF-8" src="js/validate3.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-72604428-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-72604428-1');
</script>

      <script type="text/javascript">
        $(document).ready(function () {
            $("#example14").height($(window).height());
            $("#example14 li").height($(window).height());
            $("#example14 img").width($(window).width());

            $("#example14").zAccordion({
                tabWidth: "6%",
                width: "100%",
                height: "100%"
            });

            $(window).resize(function () {
                $("#example14").height($(window).height());
                $("#example14 li").height($(window).height());
                $("#example14 img").width($(window).width());

                $("#example14").zAccordion({
                    tabWidth: "6%",
                    width: "100%",
                    height: "100%"
                });
            });
        });
      </script>
      <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-wide.css" />
      </noscript>
      <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/ie/v8.css" />
      <![endif]-->
    </head>
    <form id="form1" runat="server">
      
      <body>
        <!-- Header -->
        <div id="header">
          <!-- Logo -->
          <div style="top:-200px; float:left; position:relative; width:0px;">
            <h1>
              <a href="index.html" id="logo"><img src="images/logo.png" alt="" id="toplogo"/></a>
            </h1>
          </div>
          <!-- Nav -->
          <!-- #BeginLibraryItem "/Library/c_nav_01.lbi" -->
          <nav id="nav">
            <ul>
              <li class="current">
                <a href="index.html"><div id="home_text">首页</div><img src="images/logo_nav.png" alt=""/></a>
              </li>
              <li>
                <a href="about_us.html">关于我们</a>
                <ul>
                  <li>
                    <a href="ab_company.html">公司简介</a>
                  </li>
                  <li>
                    <a href="ab_news.html">最新消息</a>
                  </li>
                  <li>
                    <a href="ab_business_distribution.html">业务分布</a>
                  </li>
                  <li>
                    <a href="ab_global_support.html">环球支援 </a>
                  </li>
                  <li>
                    <a href="ab_tech_partners.html">合作伙伴</a>
                    <ul>
                      <li>
                        <a href="ab_tech_partners.html">技术合作伙伴</a>
                      </li>
                      <li>
                        <a href="ab_business_partners.html">增值服务合作伙伴</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              </li>
              <li>
                <a href="it_support.html">电脑支援</a>
                <ul>
                  <li>
                    <a href="it_services.html">服务简介</a>
                  </li>
                  <li>
                    <a href="it_services_charges.html">服务收费</a>
                  </li>
                  <li>
                    <a href="it_services_pledge.html">服务承诺</a>
                  </li>
                  <li>
                    <a href="it_corporate_customers.html">公司客户</a>
                    <ul>
                      <li>
                        <a href="it_success_stories.html">成功个案</a>
                      </li>
                      <li>
                        <a href="it_customers.html">客户好评</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="it_customer_platform.html">客户平台</a>
                  </li>
                  <li>
                    <a href="it_remote_support.html">远端支援</a>
                  </li>
                  <li>
                    <a href="it_sendbig_service.html">SendBig 服务</a>
                  </li>
                  <li>
                    <a href="it_monitoring_and_warning_service.html">监控及预警服务</a>
                  </li>
                  <li>
                    <a href="it_regular_inspection.html">定期检查</a>
                  </li>
                  <li>
                    <a href="it_emergency_borrowed_hardware_service.html">紧急暂借硬件服务</a>
                  </li>
                  <li>
                    <a href="it_pc_data_encryption.html">电脑资料加密</a>
                  </li>
                  <li>
                    <a href="it_computer_data_destruction.html">电脑资料销毁</a>
                  </li>
                  <li>
                    <a href="it_training.html">培训</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="cloud_service.html">云端服务</a>
                <ul>
                  <li>
                    <a href="cs_cloud_introduction.html">云端简介</a>
                  </li>
                  <li>
                    <a href="cs_email_hosting.html">电邮寄存</a>
                    <ul>
                      <li>
                        <a href="cs_email_office_365_email.html">Office 365电邮</a>
                      </li>
                      <li>
                        <a href="cs_email_google_email.html">Google电邮</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="cs_microsoft_office_365_rental.html">Office 365计划</a>
                  </li>
                  <li>
                    <a href="cs_cloud_server.html">云端服务器</a>
                  </li>
                  <li>
                    <a href="cs_microsoft_sharepoint_services.html">SharePoint服务</a>
                  </li>
                  <li>
                    <a href="cs_microsoft_office_rental.html">MS Office租赁</a>
                  </li>
                  <li>
                    <a href="cs_cloud_backup.html">云端备份</a>
                  </li>
                  <li>
                    <a href="cs_cloud_antivirus.html">云端防毒</a>
                  </li>
                  <li>
                    <a href="cs_web_hosting.html">网页寄存</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="system_development.html">系统开发</a>
              </li>
              <li>
                <a href="solution.html">解决方案</a>
                <ul>
                  <li>
                    <a href="sol_vpn.html">系统安全</a>
                    <ul>
                      <li>
                        <a href="sol_vpn.html">VPN 安全远端存取</a>
                      </li>
                      <li>
                        <a href="sol_security_token.html">保安编码器</a>
                      </li>
                      <li>
                        <a href="sol_endpoint_protector.html">Endpoint protector</a>
                      </li>
                      <li>
                        <a href="sol_online_mgt_sys.html">上网行为管理系统</a>
                      </li>
                      <li>
                        <a href="sol_window_mgt.html">桌面管理</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="sol_virtualization.html">虚拟化</a>
                    <ul>
                      <li>
                        <a href="sol_virtualization.html#p1">服务器虚拟化</a>
                      </li>
                      <li>
                        <a href="sol_virtualization.html#p2">网路虚拟化</a>
                      </li>
                      <li>
                        <a href="sol_virtualization.html#p3">桌面平台虚拟化</a>
                      </li>
                      <li>
                        <a href="sol_virtualization.html#p4">应用程序虚拟化</a>
                      </li>
                      <li>
                        <a href="sol_virtualization.html#p5">储存装置虚拟化</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="sol_wc.html">无线网路</a>
                    <ul>
                      <li>
                        <a href="sol_wc.html">无线控制器</a>
                      </li>
                      <li>
                        <a href="sol_wap.html">无线存取点</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="sol_web_design.html">网页设计</a>
                    <ul>
                      <li>
                        <a href="sol_web_design.html">创意-设计</a>
                      </li>
                      <li>
                        <a href="sol_web_program.html">功能-程序</a>
                      </li>
                      <li>
                        <a href="sol_web_system.html">功能-更新系统功能</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="sol_video_conference.html">视像会议</a>
                  </li>
                  <li>
                    <a href="sol_network_cabling.html">网络布线</a>
                  </li>
                  <li>
                    <a href="sol_window_data.html">数据恢复</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="promotion.html">推广优惠</a>
              </li>
              <li>
                <a href="contact_us.html">联络我们</a>
              </li>
            </ul>
          </nav>
          <!-- #EndLibraryItem -->
        </div>
        <!-- Main -->
        <!-- #BeginLibraryItem "/Library/c_mini_nav.lbi" -->
        <div id="mini_nav">
          <div id="mini_nav_inside">
            <a href="http://www.topone.hk" target="_blank">繁</a>|
            <a href="http://www.itsupportchina.com" target="_blank">简</a>|
            <a href="http://www.hongkongitsupport.com">Eng</a>
          </div>
        </div>
        <!-- #EndLibraryItem -->
        </div>
        <!-- Banner -->
        <section id="banner">
          <div style="position: relative; margin:0 auto; margin-top:0px; margin-bottom:0px; display:block; max-width:1200px; max-height:350px; height:auto 0; padding-left:0px; padding-top:0px; z-index:0; text-align:center; top:0px;">
            <ul id="example14">
              <li>
                <a href="it_services.html"><img src="images/banner_01.jpg" alt=""  border="0" style="max-width:1200px;"/></a>
              </li>
              <li>
                <a href="cs_cloud_introduction.html"><img src="images/banner_02.jpg" alt=""  border="0" style="max-width:1200px;"/></a>
              </li>
              <li>
                <a href="system_development.html"><img src="images/banner_03.jpg" alt=""  border="0" style="max-width:1200px;"/></a>
              </li>
              <li>
                <a href="sol_virtualization.html"><img src="images/banner_04.jpg" alt=""  border="0" style="max-width:1200px;"/></a>
              </li>
            </ul>
            <div>
        </section>
        <div align="left">
          <table border="0" cellpadding="0" cellspacing="0" width="1000">
            <tr>
              <td width="783" align="left" valign="top">
                <div align="left">
                  <table border="0" cellpadding="0" cellspacing="0" width="783">
                    <tr>
                      <td width="767">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="767">
                        <div align="left">
                          <table style="margin-left:50px;" border="0" width="601" cellpadding="5" cellspacing="0">
                            <tr>
                              <td width="400" valign="top">&nbsp;</td>
                            </tr>
                            <tr>
                              <td width="400" align="center" valign="middle" colspan="2">
                                <asp:TextBox ID="confirmInfo" runat="server" BorderStyle="None" Font-Bold="True" Font-Size="Medium" Width="520px"></asp:TextBox>
                              </td </tr>
                              <tr>
                                <td width="400" valign="top" class="style1">&nbsp;</td>
                              </tr>
                              <tr>
                                <td width="400" valign="top" align="center">
                                  <asp:Button ID="btnOK" runat="server" Text="OK" OnClick="btnOK_Click"></asp:Button>
                              </tr>
                          </table>
                        </div>
                        <p align="justify" style="line-height:200%; margin-right:65px; margin-left:50px;">&nbsp;</p>
                        <p align="left" style="margin-left:50px;">&nbsp;</p>
                        </td>
                        </tr>
                  </table>
                </div>
                </td>
                </tr>
          </table>
        </div>
    </form>
    </BODY>
  
  </HTML>