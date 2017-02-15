<?php
error_reporting(0);
session_start();
ob_start();
include './IConstat.php';
include './MySql.php';
include './collabration.inc.php';

$txtId = $_GET["txtId"];
$query = "SELECT * FROM `sharefileaccess` WHERE requestId = $txtId ";
MysqlConnection::connect();
$resource = MysqlConnection::executeQuery($query);
$result = MysqlConnection::toArrays($resource);
$record = $result[0];

if (isset($_POST["btnSubmit"]) || isset($_POST["hid"])) {
    $txtValidateMaster = $_POST["txtValidateMaster"];
    $query = "SELECT * FROM `sharefileaccess`, `sharefile` "
            . "  WHERE `sharefileaccess`.`master` = '$txtValidateMaster'  "
            . "  AND  `sharefileaccess`.`requestId` = '$txtId'"
            . "  AND `sharefileaccess`.`requestId` = `sharefile`.`txtId` ";
    MysqlConnection::connect();
    $resource = MysqlConnection::executeQuery($query);
    $resultarray = MysqlConnection::toArrays($resource);
    $resut = $resultarray[0];
    if (isset($_POST["btnCollaborate"])) {
        collaborateFile("../filemerge/" . $resut["filename"], $resut["txtFileCloud1"], $resut["txtFileCloud2"]);
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
                        <form   method="post">
                            <table border="1" style="border-collapse: collapse;width: 70%;font-family: verdana;font-size: 13px;">
                                <tr id="tr" style="text-align: center"><th id="th" colspan="3">VALIDATE REQUEST</th></tr>
                                <tr id="tr"  style="text-align: center">
                                    <td id="tr">MAIN FILE</td>
                                    <td><?php echo $record["filename"] ?></td>
                                </tr>
                                <tr id="tr"  style="text-align: center">
                                    <td id="tr">MASTER KEY</td>
                                    <td><input style="width: 90%" type="text"  name="txtValidateMaster" id="txtValidateMaster" value="<?php echo $_POST["txtValidateMaster"] ?>" ></td>
                                </tr>
                                <input type="hidden" name="txtId" value="<?php echo $_GET["txtId"] ?>">
                                <input type="hidden" name="hid" value="*">
                                <?php
                                if (!empty($resut) || isset($_POST["hid"])) {
                                    ?>
                                    <tr id="tr"  style="text-align: center;">
                                        <td id="tr">CLOUD 1 </td>
                                        <td><?php echo $resut["txtFileCloud1"] ?></td>
                                    </tr>
                                    <tr id="tr"  style="text-align: center">
                                        <td id="tr">CLOUD 2 </td>
                                        <td><?php echo $resut["txtFileCloud2"] ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                <?php
                                if (isset($_POST["btnCollaborate"])) {
                                    ?> 
                                    <tr  id="tr"  style="text-align: center">
                                        <td></td>
                                        <td colspan="2" style="text-align: center">
                                            <a href="../filemerge/<?php echo $record["filename"] ?>" target="_blank" style="color: blue;font-size: 12px;">DOWNLOAD FROM PROXY</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>    
                                <tr>
                                    <td></td>
                                    <td align="center">
                                        <?php
                                        if (isset($_POST["hid"])) {
                                            ?>
                                            <input type="submit" name="btnCollaborate" value="Collaborate File">
                                            <?php
                                        } else {
                                            ?>
                                            <input type="submit" name="btnSubmit" value="Validate">
                                            <?php
                                        }
                                        ?>
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

function collaborateFile($merged_file_name, $part1, $part2) {
    $w = new split_merge();
    $w->merge_file($merged_file_name, $part1, $part2) or die('Error spliting file');
}
?>