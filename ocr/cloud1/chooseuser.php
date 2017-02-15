<?php
error_reporting(0);
session_start();
ob_start();
include './IConstat.php';
include './MySql.php';

require 'PHPMailer-master/PHPMailerAutoload.php';

$fileName = $_GET["filename"];

require 'mail.inc.php';

if (isset($_POST["btnSubmit"])) {
    $txtId = $_GET["txtId"];
    $txtMaster = $_POST["txtMaster"];
    $keypubic = $_POST["txtMaster"];
    $hasAccess = "Y";

    $query = "UPDATE `sharefileaccess` SET `master` = '$txtMaster'  ,`keypubic` = '$txtMaster', `hasAccess` = 'Y' WHERE  `txtId` = $txtId;";
    //MysqlConnection::connect();
    //MysqlConnection::executeQuery($query);

    sendInquiryNewsLetter(strtolower($_POST["vendorEmail"]), $txtMaster);
  //  header("location:shareadminrequst.php");
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
                        <h4>COLLABORATION IN MULTI CLOUD COMPUTING ENVIRONMENTS</h4>
                        <br>
                        <form  method="post">
                            <table border="1" style="border-collapse: collapse;width: 70%;font-family: verdana;font-size: 13px;">
                                <tr id="tr" style="text-align: center"><th id="th" colspan="3">APPROVE REQUEST</th></tr>

                                <tr id="tr"  style="text-align: center">
                                    <td id="tr">MASTER KEY</td>
                                    <td><input style="width: 90%" type="text"  name="txtMaster" id="txtMaster" value="<?php echo md5(time()) ?>"></td>
                                </tr>
                                <input type="hidden" value="<?php echo $_GET["txtId"] ?>" name="txtId">
                                <tr id="tr"  style="text-align: center">
                                    <td id="tr">VENDOR NAME</td>
                                    <td><input style="width: 90%" type="text" name="txtVendorname" id="txtMaster" value="<?php echo $_GET["fullName"] ?>"></td>
                                </tr>

                                <tr id="tr"  style="text-align: center">
                                    <td id="tr">VENDOR EMAIL</td>
                                    <td><input style="width: 90%" type="text" name="vendorEmail" id="txtMaster" value="<?php echo $_GET["email_id"] ?>"></td>
                                </tr>
                                <tr id="tr"  style="text-align: center">
                                    <td id="tr">FILE NAME</td>
                                    <td><input style="width: 90%" type="text" name="txtFileName" id="txtMaster" value="<?php echo $fileName ?>"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td align="center">
                                        <input type="submit" name="btnSubmit" value="Submit" >
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


<?php
//
function sendInquiryNewsLetter($useremail, $selected) {
    date_default_timezone_set('Etc/UTC');
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->SMTPAuth = true;
  $mail->Username = "mrunali7khedikar@gmail.com";
    $mail->Password = "shiprashipra";
    $mail->setFrom('mrunali7khedikar@gmail.com', 'Cloud Collabration');
    $mail->addAddress($useremail, 'User ');
    $mail->Subject = 'Cloud Collabration File Access Key '.$selected;
    $mail->msgHTML("'Cloud Collabration File Access Key'.$selected");
    $mail->AltBody = 'Cloud Collabration File Access Key'.$selected;
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }

}

?>


