<?php
//dashboard_doctor.php
session_start();
if(isset($_SESSION["ID"])){
  if($_SESSION["ROLE"] == "Doctor"){
    //get doctor information here so we can display it below
    $dsn = "mysql:host=localhost;dbname=healthtrackerapp;charset=utf8mb4";

    $dbusername = "root";
    $dbpassword = "";
    $pdo = new PDO($dsn, $dbusername, $dbpassword);

    $stmtDR = $pdo->prepare("SELECT * FROM `doctors`
    WHERE `ID` = '$_SESSION[ID]'");

    $stmtDR->execute();
    $dr = $stmtDR->fetch();

    if ($stmtDR->errorInfo()[0] === "00000"){
      //now that we know they exist, lets try to create a user
      echo("Doctor was Targeted!");
    }
    ?>
   <html lang="en" dir="ltr">
       <head>
           <meta charset="utf-8">
           <title>WellnessTracker--Dashboard of doctors!</title>
           <link rel="stylesheet" href="css/main.css" />
           <link rel="stylesheet" href="css/dashboard_doctor.css" />
       </head>
       <body>
           <!-- fixed header begins -->
           <header>
               <div id=container_header>
                   <!-- clinic information showed in this div -->
                   <div id="clinicInfo"><?php echo($dr['MedicalEstablishment']); ?> | <?php echo($dr['MedicalLocation']); ?> </div>
                   <!-- logo showed in this div -->
                   <div id="logo2">
                       <img src="images/logo_small.png" alt="logo" />
                   </div>
                   <div id="container_header_right">
                       <!-- date of today showed in this div -->
                       <div id="date"><?php echo(date('Y-m-d')); ?></div>
                       <!-- greeting info showed in this div -->
                       <div id="greeting">Hi, <?php echo($dr['Fname']);?>!</div>
                       <!-- log out button showed in this div -->
                       <div id="logOut"><a href="logout.php">Log Out</a></div>
                   </div>
               <div>
          </header>
          <div class="placeholder"></div>
          <!-- main component of dashboard begins -->
          <div class="dash_content">
              <!-- menu of patients showed in this div -->
              <div id="menu">
                  <h1>Patients List</h2>
                  <!-- get the name of patients of this doctor and listed in li -->
                  <?php
                  //ok so im going to take the session ID for the DR
                  //im going to use that ID to then query all the DR-PATs that use that session id as the DrID
                  $stmtDRpat = $pdo->prepare("SELECT * FROM `dr-patients`
                  WHERE `DrID` = '$_SESSION[ID]'");
                  $stmtDRpat->execute();
                  $drpat = $stmtDRpat->fetchAll();
                  //im then going to loop through all DR-PATS that contain this DR
                  foreach($drpat as $dp){
                    //im then going to display the name of each user and a redirect to their personal page
                    $stmtpat = $pdo->prepare("SELECT * FROM `patients`
                    WHERE `ID` = '$dp[PatientID]'");
                    $stmtpat->execute();
                    $pat = $stmtpat->fetch();

                    if ($stmtpat->errorInfo()[0] === "00000"){
                      ?>
                      <ul>
                          <li><a href="#"><?php echo($pat['fName']);?> <?php echo($pat['lName']);?></a></li>
                      </ul>
                  </div>
                  <?php
                }
              }
              ?>
              <!-- overdue activities reminder showed in this div -->
              <div id="reminder">
                  <h1>Overdue Activities Reminder</h2>
                  <!-- reminder box used to show overdue activities and date -->
                  <!-- loop reminder box when needed -->
                  <div class="reminder_box">
                      <!-- get overdue date from database -->
                      <span>overdue Date</span>&nbsp;|&nbsp;
                      <!-- get overdue activities from database -->
                      <span>overdue Activity</span>
                  </div>
                  <div class="reminder_box">
                      <!-- get overdue date from database -->
                      <span>overdue Date</span>&nbsp;|&nbsp;
                      <!-- get overdue activities from database -->
                      <span>overdue Activity</span>
                  </div>
              </div>
              <!-- conversation showed in this div -->
               <div id="inbox">
                  <h1>Inbox</h2>
                  <!-- conversation box used to show conversations -->
                  <div class="conversation_box">
                      <!-- loop conversation_item when needed -->
                      <div class="conversation_item">
                          <!-- get time from database -->
                          <div class="item1">time</div>
                          <!-- get patient's name from database -->
                          <div class="item2">p_name</div>
                          <div class="item3">
                              <img src="images/patient_icon.png" alt="patients" />
                          </div>
                          <!-- get conversation from database -->
                          <div class="item4">conversationconversationconversationconversation</div>
                          <!-- get date from database -->
                          <div class="item5">date</div>
                      </div>
                      <div class="conversation_item">
                          <!-- get time from database -->
                          <div class="item1">time</div>
                          <!-- get patient's name from database -->
                          <div class="item2">p_name</div>
                          <div class="item3">
                              <img src="images/patient_icon.png" alt="patients" />
                          </div>
                          <!-- get conversation from database -->
                          <div class="item4">conversationconversationconversationconversation</div>
                          <!-- get date from database -->
                          <div class="item5">date</div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="placeholder">placeholder2</div>

       </body>
   </html>
   <?php
   }
}
