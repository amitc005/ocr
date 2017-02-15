<?php 
error_reporting(0);
session_start();
ob_start();
include './IConstat.php';
include './MySql.php';
?>
<html>
    <head>
        <link href="../css/style.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <div id="wrapper">
            <div id="search"><img src="../images/header-logo.jpg" width="250px;" height="100px;" style="margin: 4px 4px 4px 4px"></div>
            <div style="clear: both"></div>
            <div style="text-align: left;background-color:#525E6A;"><span><?php include './leftmenu.php';?></span></div>
            <div id="slider" style="height: 250px;"><?php include './slider.php';?></div>
            <div style="clear: both"></div>
            <div style="widows: 99%;font-size: 13px;line-height: 20px;">

                <!------------------------- START CODE FROM HERE  ------------------------------->

                <div style="padding: 10px;width: 98%;">
                    <br/>
                    <center>
                        <p style="line-height: 20px;">
                        <h2>Welcome to Personal Health Record</h2>
                        <br>

                        <form name="frmSeeFile" id="frmSeeFile" action="../FindKey">

                            <div style="width: 30%;float: left">
                                <table>
                                    <tr style="height: 35px;">
                                        <td>Enter  Key</td>
                                    </tr>
                                    <tr style="height: 35px;">
                                        <td><input type="text" name="txtfind" ></td>
                                    </tr>
                                    <tr style="height: 35px;">
                                        <td><input type="submit" name="find" value="Find"></td>
                                    </tr>

                                    <%                                        Object object = request.getParameter("flag");
                                        if (object != null && object.toString().equals("false")) {
                                    %>
                                    <tr>
                                        <td colspan="2" style="color: red">Invalid Key !!!</td>
                                    </tr>
                                    <%
                                        }
                                    %>
                                </table>
                            </div>
                        </form>
                        <div style="width: 65%;float: right;margin-right: 30px;">
                            <table border="1" style="border-collapse: collapse;width: 100%;font-family: verdana;font-size: 13px;">
                                <tr id="tr" style="text-align: center">
                                    <th id="th">Download</th>
                                    <th id="th">Person Name</th>
                                    <th id="th">File Path</th>
                                </tr>
                                <%                                    ArrayList<DoctorDTO> arrayList = DoctorService.getDataListId(request.getSession().getAttribute("docprimary").toString());
                                    for (DoctorDTO dTO : arrayList) {
                                %>
                                <tr id="tr"  style="text-align: center">
                                    <td style="width: 80px;">
                                        <%
                                            Object objectkey = request.getParameter("flag");
                                            if (objectkey != null && objectkey.toString().equals(dTO.getKeyGenerated())) {
                                        %>
                                        <a  href="../upload/<%=dTO.getFilePath()%>" style="font-weight: normal;font-size: 12px;color: blue" target="_blank">download</a>
                                        <%
                                            } else {
                                                out.print("");
                                            }
                                        %>
                                    </td>
                                    <td style="width: 180px;"><%=dTO.getPaitentName()%></td>
                                    <td>
                                        <p style="padding: 10px;font-size: 12px;">    <%=dTO.getFilePath()%></p>
                                    </td>
                                </tr>
                                <%     }%>
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
                           <?php include './footer.php';?>
                    </p>
                </center>
            </div>
        </div>
    </body>
</html>




