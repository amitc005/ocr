<?php 
session_start();
ob_start();
 
?>
<style>

    .table{
        border-collapse: collapse;border-color: white;

    }
    .table td{
        padding: 15px;
        border-right: solid 1px white;
    }
    .table td a{
        font-size: 10px;
    }
</style>
<table class="table" >
    <tr >
        <td height="41" style="width: 16.28%" align="center" ><a href="index.php">HOME</a></td>
        <td  style="width: 16.28%"  align="center" ><a href="aboutus.php">ABOUT&nbsp;US</a></td>

        <?php
        if (empty($_SESSION["admin"]) && empty($_SESSION["vendor"])) {
            ?>
            <td  style="width: 14.28%"  align="center" ><a href="ownerlogin.php" style="color: orange">ADMIN&nbsp;LOGIN</a></td>
            <td  style="width: 14.28%"  align="center" ><a href="vendorlogin.php"  style="color: yellow"> VENDOR&nbsp;LOGIN</a></td>
            <?php
        }
        ?>
        <?php
        if (!empty($_SESSION["admin"])) {
            ?>
            <td  style="width: 14.28%"  align="center" ><a href="uploadfile.php" style="color: yellow">UPLOAD&nbsp;FILE</a></td>
            <td  style="width: 14.28%"  align="center" ><a href="viewupload.php" style="color: yellow">VIEW&nbsp;UPLOAD</a></td>
            <td  style="width: 14.28%"  align="center" ><a href="addnewvendor.php" style="color: yellow">ADD&nbsp;VENDOR</a></td>
            <td  style="width: 14.28%"  align="center" ><a href="viewvendor.php"  style="color: orange">VIEW&nbsp;VENDOR</a></td>
            <td  style="width: 14.28%"  align="center" ><a href="shareadminrequst.php"  style="color: orange">VENDOR&nbsp;REQUEST</a></td>
        <?php } ?>

        <?php
        if (!empty($_SESSION["vendor"])) {
            ?>
            <td  style="width: 16.28%"  align="center" ><a href="userreqiust.php"  style="color: orange">DOWNLOAD&nbsp;RECORDS</a></td>
        <?php } ?>
        <?php
        if (!empty($_SESSION["admin"]) || !empty($_SESSION["vendor"])) {
            ?>
            <td  style="width: 14.28%;border-right: 0px; "   align="center"  ><a style="color: yellow" href="logout.php"> LOG&nbsp;OUT</a></td>
        <?php } ?>
    </tr>
</table>