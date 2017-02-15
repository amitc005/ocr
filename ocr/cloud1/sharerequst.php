<?php 
error_reporting(0);
session_start();
ob_start();
include './IConstat.php';
include './MySql.php';
?>
<html>
    <head>
        <link href="../css/style.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <div id="wrapper">
            <div id="search"><img src="../images/cloude4.jpg" width="250px;" height="100px;" style="margin: 4px 4px 4px 4px"></div>
            <div style="clear: both"></div>
            <div style="text-align: left;background-color:#525E6A;"><span><?php include './leftmenu.php';?></span></div>
            <div id="slider" style="height: 250px;"><?php include './slider.php';?></div>
            <div style="clear: both"></div>
            <div style="widows: 99%;font-size: 13px;line-height: 20px;">
                <!------------------------- START CODE FROM HERE  ------------------------------->
                <div style="padding: 10px;width: 98%;">
                    <br/>
                    <center>
                        <p style="line-height: 20px;">
                        <h2>Welcome to private cloud Record</h2>
                        <br>
                        <div style="width: 85%;float: right;margin-right: 30px;">
                            <table border="1" style="border-collapse: collapse;width: 100%;font-family: verdana;font-size: 13px;">
                                <tr id="tr" style="text-align: center">
                                    <th id="th">#</th>
                                    <th id="th">UPLOAD BY</th>
                                    <th id="th">FILE NAME</th>
                                    <th id="th">UPLOAD DATE</th>
                                    <th id="th">REQUEST</th>
                                    <th id="th">RESPONSE</th>
                                </tr>
                                <%                                    int i = 1;
                                    ArrayList<ShareDTO> arrayList = ShareService.getAllShareList();
                                    for (ShareDTO dTO : arrayList) {
                                %>
                                <tr id="tr"  style="text-align: center">
                                    <td><%=i%></td>   
                                    <td><%=dTO.getMaster()%></td>   
                                    <td><%=dTO.getFilename()%></td>   
                                    <td><%=dTO.getEntryDate()%></td>     
                                    <td>
                                        <a href="chooseuser.jsp" style="color: blue;font-size: 12px;;font-weight: normal">
                                            GRANT ACCESS
                                        </a>
                                    </td>   
                                </tr>
                                <%
                                        i++;
                                    }%>
                            </table>
                        </div>

                    </center>
                </div>
                <div style="clear: both"></div>
                <!------------------------- START CODE FROM HERE  ------------------------------->



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




