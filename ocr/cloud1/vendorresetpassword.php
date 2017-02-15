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
            <div id="search">
                <div id="search"><img src="../images/header-logo.jpg" width="250px;" height="100px;" style="margin: 4px 4px 4px 4px"></div>
                <div style="clear: both"></div>
                <div style="text-align: left;background-color:#525E6A;"><span><?php include './leftmenu.php'; ?></span></div>
                <div id="slider" style="height: 250px;"><?php include './slider.php'; ?></div>
                <div style="clear: both;">&nbsp;</div>
                <center>
                    <div style="widows: 98%;font-size: 13px;line-height: 20px;">
                        <div style="float: left;width: 20%">
                            <div style="margin-bottom: 50px;float: left;width: 20%;margin-left: 20px">
                                <div id="homediv" align="middle"><img src="../images/EHR_stethoputer.jpg" width="150px" height="150px;" style="border-radius:15px;" align="middle"></div>
                                <br/>
                                <div id="homediv" align="middle"><img src="../images/healthrecord.jpg" width="150px" height="150px;" style="border-radius:15px;" align="middle"></div>
                                <br/>
                            </div>
                        </div>
                        <div style="float: left;width: 50%">
                            <p style="text-align: justify">
                                <br/>
                                Doctors diagnose and treat illness and injury. 
                                They take a patient?s medical history, examine areas of the body
                                that feel unhealthy or painful, order and interpret diagnostic tests,
                                and plan and implement courses of treatment. They often counsel patients
                                on diet, hygiene and lifestyle changes that can improve well-being. 
                                They may set up their own practices or work for medical corporations, 
                                such as hospitals. Because the practice of medicine is complex, many 
                                doctors specialize in particular medical conditions or areas of the body
                            </p>
                            <br/>
                            <p style="text-align: justify">
                                <br/>
                                Doctors begin their training with a bachelor?s degree that requires four 
                                years of study. Though specific degrees are not mandated, necessary subjects
                                include biology, chemistry, physics, math and English. Undergraduates must 
                                then receive acceptable scores on the Medical College Admission Test before 
                                they are considered for medical school. This advanced education takes at least
                                four years and includes classroom, laboratory and practical learning.
                                The expense of the process left at least 85 percent of medical school 
                                grads in debt for educational expenses. After medical school, graduates
                                are required to undergo a residency program in a hospital that lasts from 
                                three to eight years, depending on the specialty. Finally, all states require
                                physicians to have a license, which mandates education and passing written 
                                and practical exams; a further credential is supplied when a specialist 
                                becomes board-certified.
                            </p>
                        </div>
                        <div style="float: left;width: 28%">
                            <br/>
                            <br/>
                            <form name="frmRegistration" id="frmRegistration" method="post" action="../PForgot">
                                <div style="width: 90%;height: auto;border: solid 1px gray">
                                    <div style="width: 100%;height: auto;border-bottom:  solid 1px gray;background-color: rgb(240,240,240);height: 40px;">
                                        <h4 style="padding-top: 10px;">UPDATE PASSWORD</h4>
                                    </div>
                                    <table>
                                        <%                                            Object flag = request.getParameter("flag");
                                        if (flag != null) {
                                        if (flag.toString().equals("true")) {
                                        %>
                                        <tr style="height: 30px;color: green;font-size: 12px;"><td>Password Change !!!</td></tr>
                                        <%
                                        } else {
                                        %>
                                        <tr style="height: 30px;color: red;font-size: 12px;"><td> Invalid User!!!</td></tr>
                                        <%
                                        }
                                        }
                                        %>
                                        <tr  style="height: 30px;"><td><label>EMAIL ID&nbsp;:&nbsp;</label></td></tr>
                                        <tr  style="height: 30px;"><td><input type="email" class="input" required="" maxlength="30" minlength="3" name="email_id"></td></tr>
                                        <tr  style="height: 30px;"><td><label>NAME OF HOME TOWN&nbsp;:&nbsp;</label></td></tr>
                                        <tr  style="height: 30px;"><td><input type="text" class="input" required="" maxlength="30" minlength="3" name="answer" placeholder="secret answer"></td></tr>
                                        <tr style="height: 30px;"><td><label>PASSWORD&nbsp;:&nbsp;</label></td></tr>
                                        <tr style="height: 30px;"><td><input type="password" class="input" required="" maxlength="30" minlength="3" name="password"></td></tr>
                                        <tr style="height: 30px;"><td><input type="submit" class="button"  required="" value="Update"></td></tr>
                                        <tr style="height: 30px;"><td>&nbsp;</td></tr>
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
