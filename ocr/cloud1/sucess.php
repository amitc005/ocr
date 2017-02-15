<?php 
error_reporting(0);
session_start();
ob_start();
include './IConstat.php';
include './MySql.php';
?>
<%@page import="java.awt.*" %>
<%@page import="java.util.*" %>
<%@page import="com.main.services.*" %>
<html>
    <head>
        <link href="../css/style.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <div id="wrapper">
            <div id="search"><img src="../images/header-logo.jpg" width="250px;" height="100px;" style="margin: 4px 4px 4px 4px"></div>
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
                        <h2>Welcome to Personal Health Record</h2>
                        <br>
                        <h3 style="color: green">
                            File Share Successfully With All key !!!
                        </h3>
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
                           <?php include './footer.php';?>
                    </p>
                </center>
            </div>
        </div>
    </body>
</html>




