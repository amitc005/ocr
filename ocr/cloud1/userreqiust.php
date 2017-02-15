<?php
error_reporting(0);
session_start();
ob_start();
include './IConstat.php';
include './MySql.php';

$query = "SELECT * FROM `sharefile` ORDER BY `sharefile`.`txtId` ASC ";
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
                                    <th id="th" style="width: 20px;">#</th>
                                    <th id="th">UPLOAD BY</th>
                                    <th id="th">FILE NAME</th>
                                    <th id="th">UPLOAD DATE</th>
                                    <th id="th">REQUEST</th>
                                    <th id="th">RESPONSE</th>
                                </tr>
                                <?php
                                $srno = 1;
                                foreach ($result as $value) {
                                    $status = getRequestStatus($_SESSION["vendor"]["txtId"], $value["txtId"]);
                                    ?>
                                    <tr id="tr"  style="text-align: center;font-size: 11px;">
                                        <td><?php echo $srno++ ?></td>   
                                        <td><?php echo "Admin" ?></td>   
                                        <td ><?php echo $value["filename"] ?></td>   
                                        <td><?php echo $value["entryDate"] ?></td>   
                                        <td>
                                            <?php
                                            if (!empty($status["vendorId"])) {
                                                ?>
                                                <a href="#" style="color: green;font-size: 11px;;font-weight: normal">Already Sent</a>
                                                <?php
                                            } else {
                                                ?>
                                                <a href="requestaccess.php?txtId=<?php echo $value["txtId"] ?>&txtFileName=<?php echo $value["filename"] ?>" style="color: blue;font-size: 11px;;font-weight: normal">request Access</a>
                                                <?php
                                            }
                                            ?>
                                        </td>   
                                        <td>
                                            <?php
                                            if (!empty($status["master"])) {
                                                ?>
                                                <a href="downloadfile.php?txtId=<?php echo $value["txtId"] ?>"   style="color: blue;font-size: 11px;;font-weight: normal">download</a>
                                                <?php
                                            }
                                            ?>
                                        </td>   
                                        <?php
                                    }
                                    ?>
                                </tr>
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




<?php

function getRequestStatus($vendorTxtId, $txtId) {
    $query = "SELECT master,requestId,vendorId FROM `sharefileaccess` where requestId = $txtId AND vendorId = $vendorTxtId";
    MysqlConnection::connect();
    $resource = MysqlConnection::executeQuery($query);
    $result = MysqlConnection::toArrays($resource);
    return $result[0];
}
?>