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
        <title>Collabration of cloud </title>
    </head>
    <body>
        <div id="wrapper">
            <div id="search"><img src="../images/cloude4.jpg" width="250px;" height="100px;" style="margin: 4px 4px 4px 4px"></div>
            <div style="clear: both"></div>
            <div style="text-align: left;background-color:#525E6A;"><span><?php include './leftmenu.php'; ?></span></div>
            <div id="slider" style="height: 250px;"><?php include './slider.php'; ?></div>
            <div style="clear: both"></div>
            <div style="widows: 99%;font-size: 13px;line-height: 20px;">
                <!------------------------- START CODE FROM HERE  ------------------------------->
                <div style="padding: 10px;width: 98%;">
                    <br/>
                    <center>
                        <p style="line-height: 20px;">
                        <h4>COLLABORATION IN MULTI CLOUD COMPUTING ENVIRONMENTS</h4>
                        <br>
                        <form  action="../ShareServlet" method="post">
                            <table border="1" style="border-collapse: collapse;width: 70%;font-family: verdana;font-size: 13px;">
                                <tr id="tr" style="text-align: center"><th id="th" colspan="3">REQUEST FORM</th></tr>
                                <tr id="tr"  style="text-align: center">
                                    <td>
                                        <p style="padding: 7px;color: green">
                                            REQUEST SEND SUCCESSFULLY !!! 
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </center>
                </div>
                <div style="clear: both"></div>
                <!------------------------- START CODE FROM HERE  ------------------------------->
            </div>
            <div style="clear: both"></div>
            <br/><br/>            <br/><br/>            <br/><br/>            <br/><br/>
            <div id="footer">
                <center>
                    <p style="padding: 5px;color: white">
                        <?php include './footer.php'; ?>
                    </p>
                </center>
            </div>
        </div>
    </body>
</html>