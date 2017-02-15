<?php
error_reporting(0);
session_start();
ob_start();
include './IConstat.php';
include './MySql.php';


$query = "SELECT * FROM `pregistration` ORDER BY `txtId` ASC ";
MysqlConnection::connect();
$resource = MysqlConnection::executeQuery($query);
$result = MysqlConnection::toArrays($resource);
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
                        <div style="width: 95%;float: right;margin-right: 30px;">
                            <table border="1" style="border-collapse: collapse;width: 100%;font-family: verdana;font-size: 13px;">
                                <tr id="tr" style="text-align: center">
                                    <th id="th">#</th>
                                    <th id="th">#</th>
                                    <th id="th">FULL NAME</th>
                                    <th id="th">CONTACT NO</th>
                                    <th id="th">EMAIL_ID</th>
                                </tr>
                                <?php
                                $srno = 1;
                                foreach ($result as $value) {
                                    ?>
                                    <tr id="tr"  style="text-align: center">
                                        <td><?php echo $srno++ ?></td>   
                                        <td><a href="#"></a></td>   
                                        <td><?php echo $value["full_name"] ?></td>   
                                        <td><?php echo $value["contact_number"] ?></td>   
                                        <td><?php echo $value["email_id"] ?></td>   
                                    </tr>
                                    <?php
                                }
                                ?>
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
                        <?php include './footer.php'; ?>
                    </p>
                </center>
            </div>
        </div>
    </body>
</html>




