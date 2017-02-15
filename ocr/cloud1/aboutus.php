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
            <div id="search"><img src="../images/cloude4.jpg" width="250px;" height="100px;" style="margin: 4px 4px 4px 4px"></div>
            <div style="clear: both"></div>
            <div style="text-align: left;background-color:#525E6A;"><span><?php include './leftmenu.php';?></span></div>
            <div id="slider" style="height: 250px;"><?php include './slider.php';?></div>
            <div style="clear: both"></div>
            <div style="widows: 99%;font-size: 13px;line-height: 20px;">
                <!------------------------- START CODE FROM HERE  ------------------------------->
                <br/>
                <div style="padding: 10px;width: 98%">
                    <h2>Data Storage And Synchronization In Private Cloud</h2>
                    <br>
                    <p style="line-height: 20px;text-align: justify">
                        Usage of cloud systems for data storage has many advantages over the traditional approaches. It is already widely used and its popularity is still fast-growing. The systems must be implemented and maintained in a way that not only satisfies the performance and resource availability requirements, but also fully addresses the questions of security, privacy and data ownership. However, concerns related to those questions very often lead to considerations of a private cloud implementation. In this paper, we explore a private cloud implementation suitable for small to medium businesses. We introduce main types of cloud computing as basic service models and analyze private cloud systems features. Advantages and disadvantages in comparison to public cloud services are considered. Implementation of private cloud solutions in a lab environment allowed us to examine the ease of the setup and maintenance as well as the usability of the chosen solutions and their applicability for the target user group.
                    </p>
                </div>
                <br/>
                <div style="padding: 10px;width: 98%">
                    <h2>Definition</h2>
                    <br>
                    <p style="line-height: 20px;text-align: justify">
                        The term ?personal health record? is not new.
                        The earliest mention of the term was in an article indexed by 
                        PubMed dated June 1978, and even earlier in 1956 reference is 
                        made to a personal health log.However, most scientific articles 
                        written about PHRs have been published since 2000.
                        The term "PHR" has been applied to both paper-based and 
                        computerized systems; current usage usually implies an electronic 
                        application used to collect and store health data. In recent years,
                        several formal definitions of the term have been proposed by various 
                        organizations
                        It is important to note that PHRs are not the same as electronic health
                        records (EHRs). The latter are software systems designed for use by health
                        care providers. Like the data recorded in paper-based medical records,
                        the data in EHRs are legally mandated notes on the care provided by 
                        clinicians to patients. There is no legal mandate that compels a consumer 
                        or patient to store her personal health information in a PHR.
                    </p>
                </div>
                <br/>
                <div style="padding: 10px;width: 98%">
                    <h2>Benefits</h2>
                    <br>
                    <p style="line-height: 20px;text-align: justify">
                        PHRs grant patients access to a wide range of health information sources,
                        best medical practices and health knowledge. All of an individual?s 
                        medical records are stored in one place instead of paper-based files
                        in various doctors? offices. Upon encountering a medical condition, 
                        a patient?s health information is only a few clicks away.
                        Moreover, PHRs can benefit clinicians. 
                        PHRs offer patients the opportunity to submit their data to their clinicians' 
                        EHRs. This helps clinicians make better treatment decisions by providing more 
                        continuous data.
                        PHRs have the potential to help analyze an individual?s 
                        health profile and identify health threats and improvement
                        opportunities based on an analysis of drug interaction, current best medical 
                        practices, gaps in current medical care plans, and identification of medical 
                        errors. Patient illnesses can be tracked in conjunction with healthcare 
                        providers and early interventions can be promoted upon encountering deviation
                        of health status. PHRs also make it easier for clinicians to care for their
                        patients by facilitating continuous communication as opposed to episodic.
                        Eliminating communication barriers and allowing documentation flow between 
                        patients and clinicians in a timely fashion can save time consumed by 
                        face-to-face meetings and telephone communication. Improved communication
                        can also ease the process for patients and caregivers to ask questions,
                        to set up appointments, to request refills and referrals, and to report
                        problems. Additionally, in the case of an emergency a PHR can quickly 
                        provide critical information to proper diagnosis or treatment.
                    </p>
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




