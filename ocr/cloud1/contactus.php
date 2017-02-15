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
            <div style="text-align: left;background-color:#525E6A;"><span><%@include file="leftmenu.jsp" %></span></div>
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
                        <table border="1" style="border-collapse: collapse;width: 70%;font-family: verdana;font-size: 13px;">
                            <tr id="tr" style="text-align: center">
                                <th id="th">Person Name</th>
                                <th id="th">Email ID</th>
                                <th id="th">Contact No.</th>
                            </tr>
                            <tr id="tr"  style="text-align: center">
                                <td id="tr">S1</td>
                                <td>S1</td>
                                <td>S1</td>
                            </tr>
                            <tr id="tr"  style="text-align: center">
                                <td>S2</td>
                                <td>S2</td>
                                <td>S2</td>
                            </tr>
                            <tr id="tr"  style="text-align: center">
                                <td>S3</td>
                                <td>S3</td>
                                <td>S3</td>
                            </tr>
                            <tr id="tr"  style="text-align: center">
                                <td>S4</td>
                                <td>S4</td>
                                <td>S4</td>
                            </tr>
                            <tr id="tr"  style="text-align: center">
                                <td>S5</td>
                                <td>S5</td>
                                <td>S5</td>
                            </tr>
                        </table>
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




