<?php
error_reporting(0);
session_start();
ob_start();
include './IConstat.php';
include './MySql.php';

if (isset($_POST["btnLogin"])) {
    $username = $_POST["email_id"];
    $password = $_POST["password"];
    $query = "SELECT *  FROM  `dregistration` WHERE email_id = '" . $username . "' AND password = '" . $password . "'";
    MysqlConnection::connect();
    $resource = MysqlConnection::executeQuery($query);
    $array = MysqlConnection::toArrays($resource);
    $result = $array[0];
    $_SESSION["admin"] = $result;
    if (sizeof($result) == 0) {
        header("location:ownerlogin.php?flag=error");
    } else {
        header("location:uploadfile.php");
    }
}
?>
<html>
    <head>
        <link href="../css/style.css" rel="stylesheet">
        <title>CLOUD COLLABRATION</title>
    </head>
    <body>
        <div id="wrapper">
            <div id="search">
                <div id="search"><img src="../images/cloude4.jpg" width="250px;" height="100px;" style="margin: 4px 4px 4px 4px"></div>
                <div style="clear: both"></div>
                <div style="text-align: left;background-color:#525E6A;"><span><?php include './leftmenu.php'; ?></span></div>
                <div id="slider" style="height: 250px;"><?php include './slider.php'; ?></div>
                <div style="clear: both;">&nbsp;</div>
                <center>
                    <div style="widows: 98%;font-size: 13px;line-height: 20px;">
                        <div style="float: left;width: 20%">
                            <div style="margin-bottom: 50px;float: left;width: 20%;margin-left: 20px">
                                <div id="homediv" align="middle"><img src="../images/cloude8.jpg" width="150px" height="150px;" style="border-radius:15px;" align="middle"></div>
                                <br/>
                                <div id="homediv" align="middle"><img src="../images/cloude6.jpg" width="150px" height="150px;" style="border-radius:15px;" align="middle"></div>
                                <br/>
                            </div>
                        </div>
                        <div style="float: left;width: 50%">
                            <p style="text-align: justify">
                                <br/>
                                Usage of cloud systems for data storage has many advantages over the traditional approaches. 
                                It is already widely used and its popularity is still fast-growing. 
                                The systems must be implemented and maintained in a way that not only satisfies the performance and resource availability requirements,
                                but also fully addresses the questions of security, privacy and data ownership. 
                                The systems must be implemented and maintained in a way that not only satisfies the performance and resource availability requirements,
                            </p>
                            <br/>
                            <p style="text-align: justify">
                                <br/>
                                Usage of cloud systems for data storage has many advantages over the traditional approaches. 
                                It is already widely used and its popularity is still fast-growing. 
                                The systems must be implemented and maintained in a way that not only satisfies the performance and resource availability requirements, 
                                but also fully addresses the questions of security, privacy and data ownership. 
                            </p>
                        </div>
                        <div style="float: left;width: 28%">
                            <br/>
                                    <?php
                                if (isset($_GET["flag"])) {
                                    echo "<p style='color: red'>Invalid Username and password !!!</p>";
                                }
                                ?>
                            <br/>
                            <form name="frmRegistration" id="frmRegistration" method="post" >
                                <div style="width: 90%;height: auto;border: solid 1px gray">
                                    <div style="width: 100%;height: auto;border-bottom:  solid 1px gray;background-color: rgb(240,240,240);height: 40px;">
                                        <h4 style="padding-top: 10px;">OWNER  LOGIN FORM</h4>
                                    </div>
                                    <table>
                                        <tr  style="height: 30px;"><td><label>EMAIL ID&nbsp;:&nbsp;</label></td></tr>
                                        <tr  style="height: 30px;"><td><input type="email" autofocus="" class="input" required="" maxlength="30" minlength="3" name="email_id"></td></tr>
                                        <tr style="height: 30px;"><td><label>PASSWORD&nbsp;:&nbsp;</label></td></tr>
                                        <tr style="height: 30px;"><td><input type="password" class="input" required="" maxlength="30" minlength="3" name="password"></td></tr>
                                        <tr style="height: 30px;"><td><input type="submit" name="btnLogin" class="button"  required="" value="Login"></td></tr>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </center>
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
