<?php
error_reporting(0);
session_start();
ob_start();
include './IConstat.php';
include './MySql.php';


if (isset($_POST["btnSubmit"])) {
    $username = $_POST["email_id"];
    $password = $_POST["password"];
    $query = "SELECT *  FROM  `pregistration` WHERE email_id = '" . $username . "' AND password = '" . $password . "'";
    MysqlConnection::connect();
    $resource = MysqlConnection::executeQuery($query);
    $array = MysqlConnection::toArrays($resource);
    $result = $array[0];
    $_SESSION["vendor"] = $result;

    if (sizeof($result) == 0) {
        header("location:vendorlogin.php?flag=error");
    } else {
        header("location:userreqiust.php");
    }
}
?>
<html>
    <head>
        <link href="../css/style.css" rel="stylesheet">
        <title>Cloud Collabration</title>
    </head>
    <body>
        <div id="wrapper">
            <div id="search">
                <div id="search"><img src="../images/cloude4.jpg" width="250px;" height="100px;" style="margin: 4px 4px 4px 4px"></div>
                <div style="clear: both"></div>
                <div style="text-align: left;background-color:#525E6A;"><span><?php include './leftmenu.php'; ?></span></div>
                <div id="slider" style="height: 250px;"><?php include './slider.php'; ?></div>
                <div style="clear: both"></div>
                <center>
                    <div style="widows: 98%;font-size: 13px;line-height: 20px;">
                        <br/>
                        <div style="float: left;width: 20%">
                            <div style="margin-bottom: 50px;float: left;width: 20%;margin-left: 20px">
                                <div id="homediv" align="middle"><img src="../images/cloude1.jpg" width="150px" height="150px;" style="border-radius:15px;" align="middle"></div>
                                <br/>
                                <div id="homediv" align="middle"><img src="../images/cloude7.jpg" width="150px" height="150px;" style="border-radius:15px;" align="middle"></div>
                                <br/>
                            </div>
                        </div>
                        <div style="float: left;width: 50%">
                            <br>
                            <p style="text-align: justify">
                                In the software as a service (SaaS) model, users gain access to application software and databases. 
                                Cloud providers manage the infrastructure and platforms that run the applications. 
                                SaaS is sometimes referred to as "on-demand software" and is usually priced on a pay-per-use basis or using a subscription fee.
                                In the SaaS model, cloud providers install and operate application software in the cloud and cloud users access the software from 
                                cloud clients.
                            </p>
                            <br>
                            <br>
                            <p style="text-align: justify">
                                Cloud computing architecture refers to the components and subcomponents required for cloud computing. 
                                These components typically consist of a front end platform (fat client, thin client, mobile device), 
                                back end platforms (servers, storage), a cloud based delivery, and a network (Internet, Intranet, Intercloud). 
                                Combined, these components make up cloud computing architecture.
                                Cloud computing architectures consist of front-end platforms called clients or cloud clients. 
                            </p>
                        </div>
                        <div style="float: left;width: 28%">
                            <?php
                            if (isset($_GET["flag"])) {
                                echo "<p style='color: red'>Invalid Username and password !!!</p>";
                            }
                            ?>
                            <form name="frmRegistration" id="frmRegistration"   method="post">
                                <div style="width: 90%;height: auto;border: solid 1px gray">
                                    <div style="width: 100%;height: auto;border-bottom:  solid 1px gray;background-color: rgb(240,240,240);height: 40px;">
                                        <h4 style="padding-top: 10px;">VENDOR LOGIN FORM</h4>
                                    </div>
                                    <table>
                                        <tr  style="height: 30px;"><td><label>EMAIL ID&nbsp;:&nbsp;</label></td></tr>
                                        <tr  style="height: 30px;"><td><input type="email"  class="input" required="" maxlength="30" minlength="3" name="email_id"></td></tr>
                                        <tr style="height: 30px;"><td><label>PASSWORD&nbsp;:&nbsp;</label></td></tr>
                                        <tr style="height: 30px;"><td><input type="password" class="input" required="" maxlength="30" minlength="3" name="password"></td></tr>
                                        <tr style="height: 30px;"><td><input type="submit" class="button" name="btnSubmit"  required="" value="Login"></td></tr>
                                        <tr style="height: 30px;"><td>&nbsp;</td></tr>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </center>


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
