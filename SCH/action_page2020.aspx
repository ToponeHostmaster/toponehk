<%@ Page Language="C#" CodeFile="action_page2020.aspx.cs" Inherits="action_page" %>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1/DTD/xhtml1-transitional.dtd">
    <HTML xmlns="http://www.w3.org/1999/xhtml">
        
        <head>
            <title>Topone Information Technology Ltd.</title>
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

            <script>
                var RC2KEY = 'sitekey',
             doSubmit = false;
    
                function reCaptchaVerify(response) {
                    if (response === document.querySelector('.g-recaptcha-response').value) {
                        doSubmit = true;
                    }
                }
    
                function reCaptchaExpired() {
                    /* do something when it expires */
                }
    
                function reCaptchaCallback() {
                    grecaptcha.render('id', {
                        'sitekey': RC2KEY,
                        'callback': reCaptchaVerify,
                        'expired-callback': reCaptchaExpired
                    });
                }
    
                document.forms['form-name'].addEventListener('submit', function (e) {
                    if (doSubmit) {
                        /* submit form or do something else */
                    }
                })
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
        <script>
</script>
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
                    <!-- #BeginLibraryItem "/Library/c_nav_01a.lbi" -->
                    <nav id="nav">
                        <ul>
                            <li>
                                <a href="index.html">
                        <div id="home_text">Home</div><img src="images/logo_nav.png" alt="" />
                    </a>
                            </li>
                            <li class="current">
                                <a href="about_us.html">About Us</a>
                                <ul>
                                    <li>
                                        <a href="ab_company.html">Company Profile</a>
                                    </li>
                                    <li>
                                        <a href="ab_news.html">News & Events</a>
                                    </li>
                                    <li>
                                        <a href="ab_business_distribution.html">Services</a>
                                    </li>
                                    <li>
                                        <a href="ab_global_support.html">Locations </a>
                                    </li>
                                    <li>
                                        <a href="ab_parnter.html">Partners</a>
                                        <ul>
                                            <li>
                                                <a href="ab_tech_partners.html">Technical Partners</a>
                                            </li>
                                            <li>
                                                <a href="ab_business_partners.html">Value Added Service Partners</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="it_support.html">IT Outsource</a>
                                <ul>
                                    <li>
                                        <a href="it_services.html">Overview</a>
                                    </li>
                                    <li>
                                        <a href="it_services_charges.html">Support Plan</a>
                                        <ul>
                                            <li>
                                                <a href="it_services_plan1.html">Comprehensive Protection</a>
                                            </li>
                                            <li>
                                                <a href="it_services_plan7.html">Smart Choice</a>
                                            </li>
                                            <li>
                                                <a href="it_services_plan3.html">Economy</a>
                                            </li>
                                            <li>
                                                <a href="it_services_plan4.html">Social enterprise</a>
                                            </li>
                                            <li>
                                                <a href="it_services_plan5.html">Premium</a>
                                            </li>
                                            <li>
                                                <a href="it_services_plan6.html">Optional</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="it_services_pledge.html">Quality of Services</a>
                                    </li>
                                    <li>
                                        <a href="it_corporate_customers.html">Customer</a>
                                        <ul>
                                            <li>
                                                <a href="it_success_stories.html">Success Stories</a>
                                            </li>
                                            <li>
                                                <a href="it_stories_share.html">Solution share</a>
                                            </li>
                                            <li>
                                                <a href="it_customers.html">Testimonials</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="it_customer_platform.html">Customer Center</a>
                                    </li>
                                    <li>
                                        <a href="it_remote_support.html">Remote Support</a>
                                    </li>
                                    <li>
                                        <a href="it_sendbig_service.html">SendBig Service</a>
                                    </li>
                                    <li>
                                        <a href="it_maintenance_service.html">Webpage Maintenance</a>
                                    </li>
                                    <li>
                                        <a href="it_monitoring_and_warning_service.html">Monitoring Service</a>
                                    </li>
                                    <li>
                                        <a href="it_dns_service.html">Google Cloud DNS service</a>
                                    </li>
                                    <li>
                                        <a href="it_regular_inspection.html">Preventive Checking</a>
                                    </li>
                                    <li>
                                        <a href="it_emergency_borrowed_hardware_service.html">Hardware on Loan</a>
                                    </li>
                                    <li>
                                        <a href="it_pc_data_encryption.html">Data Encryption</a>
                                    </li>
                                    <li>
                                        <a href="it_computer_data_destruction.html">Data Wiping</a>
                                    </li>
                                    <li>
                                        <a href="it_training.html">Training</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="supportsystem.html">Support System</a>
                                <ul>
                                    <li>
                                        <a href="supportsystem.html">Overview</a>
                                    </li>
                                    <li>
                                        <a href="supportsystem_record.html">Ticket Record</a>
                                    </li>
                                    <li>
                                        <a href="supportsystem_resource.html">Asset Management</a>
                                    </li>
                                    <li>
                                        <a href="supportsystem_monitor.html">Monitoring & Checking</a>
                                    </li>
                                    <li>
                                        <a href="supportsystem_contact.html">Contact Management</a>
                                    </li>
                                    <li>
                                        <a href="supportsystem_doc.html">File Management</a>
                                    </li>
                                    <li>
                                        <a href="supportsystem_permission.html">Permission Control</a>
                                    </li>
                                    <li>
                                        <a href="supportsystem_delivery.html">Delivery & Installation</a>
                                    </li>
                                    <li>
                                        <a href="supportsystem_budget.html">Budget & Contract Renew</a>
                                    </li>
                                    <li>
                                        <a href="supportsystem_reporting.html">Comprehensive report</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="cloud_service.html">Rental service</a>
                                <ul>
                                    <li>
                                        <a href="cs_cloud_introduction.html">Cloud Overview</a>
                                    </li>
                                    <li>
                                        <a href="cs_email_hosting.html">Email Hosting</a>
                                        <ul>
                                            <li>
                                                <a href="cs_email_office_365_email.html">Office 365 Email</a>
                                            </li>
                                            <li>
                                                <a href="cs_email_google_email.html">Gmail</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="cs_microsoft_email_backup.html">Email & SharePoint Backup</a>
                                    </li>
                                    <li>
                                        <a href="cs_microsoft_office_365_rental.html">Office 365 Business Plan</a>
                                    </li>
                                    <li>
                                        <a href="cs_cloud_server.html">Microsoft Azure</a>
                                    </li>
                                    <li>
                                        <a href="cs_microsoft_sharepoint_services.html">Microsoft SharePoint</a>
                                    </li>
                                    <li>
                                        <a href="cs_microsoft_office_rental.html">Microsoft Office 365</a>
                                    </li>
                                    <li>
                                        <a href="cs_cloud_backup.html">Cloud Backup</a>
                                    </li>
                                    <li>
                                        <a href="cs_cloud_antivirus.html">Cloud Antivirus</a>
                                    </li>
                                    <li>
                                        <a href="cs_web_hosting.html">Website Hosting</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="system_development.html">Programming</a>
                                <ul>
                                    <li>
                                        <a href="sd_introduction.html">Introduction</a>
                                    </li>
                                    <li>
                                        <a href="sd_order_system.html">Order System</a>
                                    </li>
                                    <li>
                                        <a href="sd_factory_system.html">Factory Management System</a>
                                    </li>
                                    <li>
                                        <a href="sd_RS.html">Tax & Reconciliation System</a>
                                    </li>
                                    <li>
                                        <a href="sd_WeChat.html">WeChat Public Platform</a>
                                    </li>
                                    <li>
                                        <a href="sd_apps.html">Mobile Application </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="solution.html">Solution</a>
                                <ul>
                                    <li>
                                        <li>
                                            <a href="sol_vpn.html">System Safety</a>
                                            <ul>
                                                <li>
                                                    <a href="sol_vpn.html">VPN Secure Remote Access</a>
                                                </li>
                                                <li>
                                                    <a href="sol_security_token.html">Security Token</a>
                                                </li>
                                                <li>
                                                    <a href="sol_endpoint_protector.html">Endpoint protector</a>
                                                </li>
                                                <li>
                                                    <a href="sol_online_mgt_sys.html">Internet Access Management</a>
                                                </li>
                                                <li>
                                                    <a href="sol_window_mgt.html">Desktop Management</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="sol_virtualization.html">Virtualization</a>
                                            <ul>
                                                <li>
                                                    <a href="sol_virtualization.html#p1">Server Virtualization</a>
                                                </li>
                                                <li>
                                                    <a href="sol_virtualization.html#p2">Network Virtualization</a>
                                                </li>
                                                <li>
                                                    <a href="sol_virtualization.html#p3">Desktop Virtualization</a>
                                                </li>
                                                <li>
                                                    <a href="sol_virtualization.html#p4">Application Virtualization</a>
                                                </li>
                                                <li>
                                                    <a href="sol_virtualization.html#p5">Storage Virtualization</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="sol_wc.html">Wireless Networking</a>
                                            <ul>
                                                <li>
                                                    <a href="sol_wc.html">Wireless Controller</a>
                                                </li>
                                                <li>
                                                    <a href="sol_wap.html">Wireless Access Point</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="sol_web_design.html">Website Design</a>
                                            <ul>
                                                <li>
                                                    <a href="sol_web_design.html">Creativity - Web Designer</a>
                                                </li>
                                                <li>
                                                    <a href="sol_web_program.html">Functionality - Web Programming</a>
                                                </li>
                                                <li>
                                                    <a href="sol_web_system.html">Functionality - CMS Demo</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="cs_cloud_introduction.html">Cloud Services</a>
                                        </li>
                                        <li>
                                            <a href="sol_video_conference.html">Video Conferencing</a>
                                        </li>
                                        <li>
                                            <a href="sol_network_cabling.html">Structure Cabling</a>
                                        </li>
                                        <li>
                                            <a href="sol_window_data.html">Data Recovery</a>
                                        </li>
                                </ul>
                                </li>
                                <li>
                                    <a href="contact_us.html">Contact Us</a>
                                </li>
                        </ul>
                    </nav>
                    <!-- #EndLibraryItem -->
                </div>
                <!-- Main -->
                <!-- #BeginLibraryItem "/Library/c_mini_nav.lbi" -->
                <div id="mini_nav">
                    <div id="mini_nav_inside">
                        <a href="../index.html" target="_blank">繁</a>|
                        <a href="./sch/index.html" target="_blank">簡</a>|
                        <a href="./index.html">Eng</a>
                    </div>
                </div>
                <!-- #EndLibraryItem -->
                </div>
                <!-- Banner -->
                <section id="banner">
                    <div style="position: relative; margin:0 auto; margin-top:0px; margin-bottom:0px; display:block; max-width:1200px; max-height:350px; height:auto 0; padding-left:0px; padding-top:0px; z-index:0; text-align:center; top:0px;">
                        <ul id="example14">
                            <li>
                                <a href="it_services.html"><img src="images/banner_01_e.jpg" alt=""  border="0" style="max-width:1200px;"/></a>
                            </li>
                            <li>
                                <a href="cs_cloud_introduction.html"><img src="images/banner_02_e.jpg" alt=""  border="0" style="max-width:1200px;"/></a>
                            </li>
                            <li>
                                <a href="system_development.html"><img src="images/banner_03_e.jpg" alt=""  border="0" style="max-width:1200px;"/></a>
                            </li>
                            <li>
                                <a href="sol_virtualization.html"><img src="images/banner_04_e.jpg" alt=""  border="0" style="max-width:1200px;"/></a>
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