<html>
    <head>
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <div id="wrapper">
            <div id="search">
                <div id="search"><img src="../images/cloude4.jpg" width="250px;" height="100px;" style="margin: 4px 4px 4px 4px"></div>
                <div style="clear: both"></div>
                <div style="text-align: left;background-color:#525E6A;"><span><%@include file="leftmenu.jsp" %></span></div>
                <div id="slider" style="height: 250px;"><%@include file="slider.jsp" %></div>
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
                                UpToDate provides nearly 1,500 patient education topics that facilitate 
                                clinician-patient communication. These materials educate and promote shared 
                                decision-making based on medical evidence, clinical recommendations, 
                                and patient preference. Engaging patients in their medical care and treatment 
                                decisions often reduces costs and leads to better outcomes.
                                UpToDate patient articles include full-color pictures, graphics,
                                and charts to help the reader understand his or her condition and 
                                to reinforce key messages regarding care.


                            </p>
                            <br>
                            <br>
                            <p style="text-align: justify">
                                A personal health record, or PHR, is a health record where health data 
                                and information related to the care of a patient is maintained by the 
                                patient.[1] This stands in contrast to the more widely used electronic 
                                medical record, which is operated by institutions (such as hospitals)
                                and contains data entered by clinicians or billing data to support insurance
                                claims. The intention of a PHR is to provide a complete and accurate summary 
                                of an individual's medical history which is accessible online. 
                                The health data on a PHR might include patient-reported outcome data,
                                lab results, data from devices such as wireless electronic weighing scales 
                                or collected passively from a smartphone.
                            </p>
                        </div>
                        <div style="float: left;width: 28%">
                            <form name="frmRegistration" id="frmRegistration" action="../DLogin" method="post">
                                <div style="width: 90%;height: auto;border: solid 1px gray">
                                    <div style="width: 100%;height: auto;border-bottom:  solid 1px gray;background-color: rgb(240,240,240);height: 40px;">
                                        <h4 style="padding-top: 10px;">ADMIN LOGIN FORM</h4>
                                    </div>
                                    <table>
                                        <%                                            if (request.getParameter("flage") != null) {
                                                if (request.getParameter("flage").equals("false")) {
                                        %>
                                        <tr style="height: 30px;color: red;font-size: 12px;"><td>Invalid Details !!! </td></tr>
                                        <%                                            }
                                            }
                                        %>
                                        <tr  style="height: 30px;"><td><label>EMAIL ID&nbsp;:&nbsp;</label></td></tr>
                                        <tr  style="height: 30px;"><td><input type="email"  class="input" required="" maxlength="30" minlength="3" name="email_id"></td></tr>
                                        <tr style="height: 30px;"><td><label>PASSWORD&nbsp;:&nbsp;</label></td></tr>
                                        <tr style="height: 30px;"><td><input type="password" class="input" required="" maxlength="30" minlength="3" name="password"></td></tr>
                                        <tr style="height: 30px;"><td><input type="submit" class="button"  required="" value="Login"></td></tr>
                                        <tr style="height: 30px;"><td><a href="presetpassword.jsp" style="color: blue;font-size: 12px;;font-weight: normal">Forgot Password ?</a></td></tr>
                                        <tr style="height: 30px;"><td><a href="index.jsp" style="color: blue;font-size: 12px;;font-weight: normal">BACK</a></td></tr>
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
                            <%@include file="footer.jsp" %>
                        </p>
                    </center>
                </div>
            </div>
    </body>
</html>
