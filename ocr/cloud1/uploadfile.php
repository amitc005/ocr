<html>
    <head>
        <link href="../css/style.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <div id="wrapper">
            <div id="search"><img src="../images/ocr_icon.jpg" width="250px;" height="100px;" style="margin: 4px 4px 4px 4px"></div>
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
                        <form enctype="multipart/form-data"  method="post">
                            <table border="1" style="border-collapse: collapse;width: 70%;font-family: verdana;font-size: 13px;">
                                <tr id="tr" style="text-align: center">
                                    <th id="th" colspan="3">UPLOAD FILE FIRST</th>
                                </tr>
                                <tr id="tr"  style="text-align: center">
                                    <td id="tr">#</td>
                                    <td><input name="file"  type="file"></td>
                                    <td><input type="submit" name="btnSubmit"  value="Upload"></td>
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
		<?php
error_reporting(E_ALL);
session_start();
ob_start();
include './IConstat.php';
include './MySql.php';
include './collabration.inc.php';

if (isset($_POST["btnSubmit"])) {
    $server_name = $_SERVER["SERVER_NAME"] . "/CloudCollabration/";

    $filename = $_FILES["file"]["name"];
    $explode = explode(".", $filename);
    $extention = $explode[1];
    $filetype = $_FILES["file"]["type"];
    $filesize = $_FILES["file"]["size"];
    if(fileCheck($filetype)){
		$upload_path = MysqlConnection::uploadFile($_FILES["file"], "../proxy/");
		$filenamecloud1 = $_SESSION["filecloud1"];
		$filenamecloud2 = $_SESSION["filecloud2"];
		$query = "INSERT INTO `sharefile` ("
				. "`txtFileCloud1`, "
				. "`txtFileCloud2`, "
				. "`filename`, "
				. "`extention`, "
				. "`fileType`, "
				. "`fileSize`, "
				. "`entryDate`"
				. ") VALUES ("
				. "  '$filenamecloud1', '$filenamecloud2', '" . $filename . "', '$extention','$filetype','$filesize', '" . date("d-m-y") . "');";
		MysqlConnection::connect();
		MysqlConnection::executeQuery($query);
		header("location:viewupload.php");
	}else{
		echo '<script>alert("file formate is not supported") </script>';
	}
}
 
 
 function fileCheck($fileType){
	 return $fileType == "image/jpeg" || $fileType == "image/png" ;
 }
 
 function fileSizeCheck($fileSize){
	 
 }

?>
    </body>
</html>
<?php

function splitFile($upload_path, $file_name) {
    $parts_num = 2;
    $w = new split_merge();
    $w->split_file($upload_path, $file_name, $parts_num) or die('Error spliting file');
    echo 'File Splitted succesfully';
}
?>