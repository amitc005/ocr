<?php
error_reporting(0);
session_start();
ob_start();
include './IConstat.php';
include './MySql.php';

$query = "SELECT * FROM `sharefile` ORDER BY `txtId` DESC ";
MysqlConnection::connect();
$resource = MysqlConnection::executeQuery($query);
$result = MysqlConnection::toArrays($resource);

if (isset($_GET["deleteid"])) {
    $deleteid = $_GET['deleteid'];
    $sqery = "DELETE FROM sharefile WHERE txtId = $deleteid";
    MysqlConnection::connect();
    $resource = MysqlConnection::executeQuery($sqery);
    header("location:viewupload.php");
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
                        <h4>COLLABORATION IN MULTICLOUD COMPUTING ENVIRONMENTS</h4>
                        <br>
                        <div style="width: 95%;float: right;margin-right: 30px;">
                            <table border="1" style="border-collapse: collapse;width: 100%;font-family: verdana;font-size: 13px;">
                                <tr id="tr" style="text-align: center">
                                    <th id="th">#</th>
                                    <th id="th">#</th>
                                    <th id="th">CLOUD 1</th>
                                    <th id="th">CLOUD 2</th>
                                    <th id="th">ENTRY DATE</th>
                                    <th id="th">DOWNLOAD</th>
                                </tr>
                                <?php
                                $srno = 1;
                                foreach ($result as $value) {
                                    ?>
                                    <tr id="tr"  style="text-align: center">
                                        <td  style="width: 30px;"><?php echo $srno++ ?></td>
                                        <td  style="width: 66px;"><a style="color: blue;font-size: 11px;" onclick="return   deleteRecord('')"  href="viewupload.php?deleteid=<?php echo $value["txtId"] ?>">delete</a></td>
                                        <td style="font-size: 11px;">
                                            <?php
                                            $explode = explode("/", $value["txtFileCloud1"]);
                                            echo $explode[2];
                                            $subexplode = explode("_", $explode[2]);
                                            ?>
                                            <a href="<?php echo $value["txtFileCloud1"] ?>" style="color: blue;font-size: 11px;" target="_blank">--</a>
                                        </td>
                                        <td style="font-size: 11px;">
                                            <?php
                                            $explode = explode("/", $value["txtFileCloud2"]);
                                            echo $explode[2];
                                            ?>
                                            <a href="<?php echo $value["txtFileCloud2"] ?>"  style="color: blue;font-size: 11px;"  target="_blank">--</a>
                                        </td>
                                        <td style="font-size: 11px;"><?php echo $value["entryDate"] ?></td>
                                        <td  style="width: 66px;"><a target="_blank" style="color: blue;font-size: 11px;" href="../proxy/<?php echo $subexplode[0]."_".$subexplode[3] ?>">download</a></td>
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

<script>
    function deleteRecord(id) {
        if (confirm("Are you want to delete this record ?")) {
            return true;
        }
        return false;
    }
</script>
