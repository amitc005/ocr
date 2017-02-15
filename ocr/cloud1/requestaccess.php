<?php
error_reporting(0);
session_start();
ob_start();
include './IConstat.php';
include './MySql.php';

if (isset($_POST["btnSubmit"])) {
    $data["master"] = "";
    $data["keypubic"] = "";
    $data["hasAccess"] = "N";
    $data["vendorId"] = $_SESSION["vendor"]["txtId"];
    $data["filename"] = $_POST["txtFileName"];
    $data["txtFileCloud1"] = $_POST["txtFileName"];
    $data["txtFileCloud2"] = $_POST["txtFileName"];
    $data["entryDate"] = date("d-m-y");
    $data["requestId"] = $_POST["txtId"];
    MysqlConnection::connect();
    MysqlConnection::insert("sharefileaccess", $data);
    header("location:requestsucess.php");
}
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
                        <h4>COLLABORATION IN MULTI-CLOUD COMPUTING ENVIRONMENTS</h4>
                        <br>
                        <form   method="post">
                            <table border="1" style="border-collapse: collapse;width: 70%;font-family: verdana;font-size: 13px;">
                                <tr id="tr" style="text-align: center"><th id="th" colspan="3">REQUEST FORM</th></tr>
                                <tr id="tr"  style="text-align: center">
                                    <td id="tr" style="width: 200px;">FILE NAME : </td>
                                    <td>
                                        <p style="padding: 7px;">
                                            <?php echo $_GET["txtFileName"] ?>
                                        </p>
                                        <input type="hidden" name="txtFileName" value="<?php echo $_GET["txtFileName"] ?>">
                                        <input type="hidden" name="txtId" value="<?php echo $_GET["txtId"] ?>">
                                    </td>
                                </tr>
                                <tr id="tr"  style="text-align: center">
                                    <td id="tr" style="width: 100px;">SEND KEY ON : </td>
                                    <td>
                                        <p style="padding: 7px;">
                                            <?php echo $_SESSION["vendor"]["email_id"] ?>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td align="center">
                                        <input type="submit" name="btnSubmit" value="Send Access Request">
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