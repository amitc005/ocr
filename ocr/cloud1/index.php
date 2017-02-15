<?php 
error_reporting(E_ALL);
session_start();
ob_start();
include './IConstat.php';
include './MySql.php';
?>
<html>
    <head>
        <link href="../css/style.css" rel="stylesheet">
        <title>OCR APPLICATION</title>
    </head>
    <body>
        <div id="wrapper">
            <div id="search">
                <div id="search">
                    <table style="width: 100%">
                        <tr>
                            <td>
                                <img src="../images/ocr_icon.jpg" width="250px;" height="100px;" style="margin: 4px 4px 4px 4px">
                            </td>
                            <td style="text-align: right">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div style="clear: both"></div>
            <div style="text-align: left;background-color:#525E6A;"><span><?php include './leftmenu.php';?></span></div>
            <div id="slider" style="height: 250px;"><?php include './slider.php';?></div>
            <div style="clear: both"></div>
            <br/>
            <div style="widows: 99%;font-size: 13px;line-height: 20px;">

                <center>
                    <div style="padding: 10px;width: 100%">
                        <div style="width: 96%;float: left">
                            <div >
                                <img src="../images/cloude4.jpg" style="float: left;margin-right: 10px;"/> 
                                <p style="line-height: 20px;">
                                <h2 style="text-transform: capitalize">TITLE HERE</h2>
                                <br>
                                <p style="text-align: justify">
                                    Cloud computing architecture refers to the components and subcomponents required for cloud computing. 
                                    These components typically consist of a front end platform (fat client, thin client, mobile device), 
                                    back end platforms (servers, storage), a cloud based delivery, and a network (Internet, Intranet, Intercloud). 
                                    Combined, these components make up cloud computing architecture.
                                    Cloud computing architectures consist of front-end platforms called clients or cloud clients. 
                                </p>
                            </div>
                            <br>
                            <br>
                            <div >
                                <img src="../images/cloude8.jpg" style="float: left;margin-right: 10px;"/> 
                                <p style="line-height: 20px;">
                                <h3>WHAT MEAN BY SAAS?</h3>
                                <br>
                                <p style="text-align: justify">
                                    In the software as a service (SaaS) model, users gain access to application software and databases. Cloud providers manage the infrastructure and platforms that run the applications. SaaS is sometimes referred to as "on-demand software" and is usually priced on a pay-per-use basis or using a subscription fee.In the SaaS model, cloud providers install and operate application software in the cloud and cloud users access the software from cloud clients. Cloud users do not manage the cloud infrastructure and platform where the application runs. This eliminates the need to install and run the application on the cloud user's own computers, which simplifies maintenance and support. Cloud applications differ from other applications in their scalability?which can be achieved by cloning tasks onto multiple virtual machines at run-time to meet changing work demand.[72] Load balancers distribute the work over the set of virtual machines. This process is transparent to the cloud user, who sees only a single access-point. To accommodate a large number of cloud users, cloud applications can be multitenant, meaning that any machine may serve more than one cloud-user organization.
                                </p>
                            </div>
                            <br>
                            <br>
                            <div >
                                <img src="../images/cloude2_1.jpg" style="float: left;margin-right: 10px;"/> 
                                <p style="line-height: 20px;">
                                <h3> WHAT MEAN BY PAAS ?</h3>
                                <br>

                                <p style="text-align: justify">
                                    PaaS vendors offers a development environment to application developers. The provider typically develops toolkit and standards for development and channels for distribution and payment. In the PaaS models, cloud providers deliver a computing platform, typically including operating system, programming-language execution environment, database, and web server. Application developers can develop and run their software solutions on a cloud platform without the cost and complexity of buying and managing the underlying hardware and software layers. With some PaaS offers like Microsoft Azure and Google App Engine, the underlying computer and storage resources scale automatically to match application demand so that the cloud user does not have to allocate resources manually. The latter has also been proposed by an architecture aiming to facilitate real-time in cloud environments.[65][need quotation to verify] Even more specific application types can be provided via PaaS, such as media encoding as provided by services like bitcodin.com[66] or media.io.[67]
                                    <br>
                                    <br>
                                <div>
                                    <img src="../images/cloude3.jpg" style="float: left;margin-right: 10px;"/> 
                                    <p style="line-height: 20px;">
                                    <h3>WHATS IS MEAN BY IAAS?</h3>
                                    <br>
                                    <p style="text-align: justify">
                                        In the most basic cloud-service model - and according to the IETF (Internet Engineering Task Force) - providers of IaaS offer computers ? physical or (more often) virtual machines ? and other resources. IaaS refers to online services that abstract user from the detail of infrastructure like physical computing resources, location, data partitioning, scaling, security, backup etc. A hypervisor, such as Xen, Oracle VirtualBox, KVM, VMware ESX/ESXi, or Hyper-V runs the virtual machines as guests. Pools of hypervisors within the cloud operational system can support large numbers of virtual machines and the ability to scale services up and down according to customers' varying requirements. IaaS clouds often offer additional resources such as a virtual-machine disk-image library, raw block storage, file or object storage, firewalls, load balancers, IP addresses, virtual local area networks (VLANs), and software bundles.[60] IaaS-cloud providers supply these resources on-demand from their large pools of equipment installed in data centers. For wide-area connectivity, customers can use either the Internet or carrier clouds (dedicated virtual private networks).
                                </div>
                            </div>
                        </div>
                </center>


                <div style="clear: both"></div>
            </div>
            <div style="clear: both"></div>
            <br/><br/>
            <div id="footer">
                <center>
                    <p style="padding: 5px;color: white">
                        <?php include './footer.php';?>
                    </p>
                </center>
            </div>
        </div>
    </body>
</html>
