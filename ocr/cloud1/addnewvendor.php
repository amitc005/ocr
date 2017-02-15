<?php
error_reporting(0);
session_start();
ob_start();
include './IConstat.php';
include './MySql.php';

if (isset($_POST["btnSubmit"])) {
    unset($_POST["btnSubmit"]);
    unset($_POST["repassword"]);
    $email_id = $_POST["email_id"];
    MysqlConnection::connect();
    $sql = "SELECT txtId FROM pregistration WHERE email_id = '$email_id' ";
    $resource = MysqlConnection::executeQuery($sql);
    $array = MysqlConnection::toArrays($resource);
    if (sizeof($array)) {
        header("location:addnewvendor.php?flag=false");
    } else {
        MysqlConnection::insert("pregistration", $_POST);
        header("location:viewvendor.php");
    }
}
?>
<html>
    <head>
        <link href="../css/style.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <div id="wrapper">
            <div id="search">
                <div id="search"><img src="../images/ocr_icon.jpg" width="250px;" height="100px;" style="margin: 4px 4px 4px 4px"></div>
                <div style="clear: both"></div>
                <div style="text-align: left;background-color:#525E6A;"><span><?php include './leftmenu.php'; ?></span></div>
                <div id="slider" style="height: 250px;"><?php include './slider.php'; ?></div>
                <div style="clear: both"></div>
                <center>
                    <div style="widows: 98%;font-size: 13px;line-height: 20px;">
                        <br/>
                        <div style="float: left;width: 20%">

                            <div style="margin-bottom: 50px;float: left;width: 20%;margin-left: 20px">
                                <div id="homediv" align="middle"><img src="../images/cloude3.jpg" width="150px" height="150px;" style="border-radius:15px;" align="middle"></div>
                                <br/>
                                <div id="homediv" align="middle"><img src="../images/cloude6.jpg" width="150px" height="150px;" style="border-radius:15px;" align="middle"></div>
                                <br/>

                            </div>
                        </div>
                        <div style="float: left;width: 50%">
                            <br>
                            <p style="text-align: justify">
                                In July 2010, Rackspace Hosting and NASA jointly launched an open-source cloud-software initiative known as OpenStack. The OpenStack project intended to help organizations offer cloud-computing services running on standard hardware. The early code came from NASA's Nebula platform as well as from Rackspace's Cloud Files platform.
                                On March 1, 2011, IBM announced the IBM SmartCloud framework to support Smarter Planet.[29] Among the various components of the Smarter Computing foundation.
                            </p>
                            <br>
                            <br>

                            <p style="text-align: justify">
                                The main enabling technology for cloud computing is virtualization. Virtualization software separates a physical computing device into one or more "virtual" devices, each of which can be easily used and managed to perform computing tasks. With operating system?level virtualization essentially creating a scalable system of multiple independent computing devices, idle computing resources can be allocated and used more efficiently. Virtualization provides the agility required to speed up IT operations, and reduces cost by increasing infrastructure utilization. Autonomic computing automates the process through which the user can provision resources on-demand. By minimizing user involvement, automation speeds up the process, reduces labor costs and reduces the possibility of human errors.[34]

                                Users routinely face difficult business problems. Cloud computing adopts concepts from Service-oriented Architecture (SOA) that can help the user break these problems into services that can be integrated to provide a solution. Cloud computing provides all of its resources as services, and makes use of the well-established standards and best practices gained in the domain of SOA to allow global and easy access to cloud services in a standardized way.
                            </p>
                        </div>
                        <?php
                        if ($_GET["flag"]) {
                            echo "<p style=color:red>User already exists !!</p>";
                        }
                        ?>
                        <div style="float: left;width: 28%">
                            <form name="frmRegistration" id="frmRegistration"  method="post">
                                <br/>
                                <div style="width: 90%;height: auto;border: solid 1px gray">
                                    <div style="width: 100%;height: auto;border-bottom:  solid 1px gray;background-color: rgb(240,240,240);height: 40px;">
                                        <h4 style="padding-top: 10px;">VENDOR REGISTRATION FORM</h4>
                                    </div>
                                    <table>
                                        <tr style="height: 30px;"><td><label>FULL NAME&nbsp;:&nbsp;</label></td></tr>
                                        <tr style="height: 30px;"><td><input type="text" autofocus="" class="input" required="10"  maxlength="30" minlength="3" id="full_name" name="full_name"></td></tr>
                                        <tr style="height: 30px;"><td><label>CONTACT NUMBER&nbsp;:&nbsp;</label></td></tr>
                                        <tr style="height: 30px;"><td><input type="text" class="input" required=""  maxlength="10" minlength="3" id="contact_number" name="contact_number"></td></tr>
                                        <tr style="height: 30px;"><td><label>EMAIL ID&nbsp;:&nbsp;</label></td></tr>
                                        <tr style="height: 30px;"><td><input type="email" class="input" required=""  maxlength="30" minlength="3" id="email_id" name="email_id"></td></tr>
                                        <tr style="height: 30px;"><td><label>PASSWORD&nbsp;:&nbsp;</label></td></tr>
                                        <tr style="height: 30px;"><td><input type="password" class="input" required="" maxlength="30"  minlength="3" id="password" name="password"></td></tr>
                                        <tr style="height: 30px;"><td><label>RE PASSWORD&nbsp;:&nbsp;</label></td></tr>
                                        <tr style="height: 30px;"><td><input type="Password" class="input" required="" maxlength="30"  minlength="3" id="repassword" name="repassword"></td></tr>
                                        <tr style="height: 30px;"><td><input type="submit" class="button" required="" name="btnSubmit" value="Register"></td></tr>
                                        <tr style="height: 30px;"><td>&nbsp;</tr>
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

<script>
    function validateData() {
//             
        var val1 = document.getElementById("full_name").value;
        if (val1 == "") {
            alert("Enter proper Full Name");
            document.getElementById("full_name").focus();
            return false;
        }
        var conatct = document.getElementById("contact_number").value;
        if (conatct.length < 10) {
            alert("Enter proper Contact No");
            document.getElementById("contact_number").focus();
            return false;
        }
        var email = document.getElementById("email_id").value;
        if (email == "") {
            alert("Enter proper Email EMail");
            document.getElementById("email_id").focus();
            return false;
        }
        var user = document.getElementById("password").value;
        if (user == "") {
            alert("Enter proper passwords");
            document.getElementById("password").focus();
            return false;
        }


    }
    function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }
</script>