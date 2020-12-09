<?php
//dashboard_doctor.php
session_start();
if(isset($_SESSION["ID"])){
  if($_SESSION["ROLE"] == "Doctor"){

    //get doctor information here so we can display it below

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
                   <div id="clinicInfo">clinic name and address</div>
                   <!-- logo showed in this div -->
                   <div id="logo2">
                       <img src="images/logo_small.png" alt="logo" />
                   </div>
                   <div id="container_header_right">
                       <!-- date of today showed in this div -->
                       <div id="date">today's date</div>
                       <!-- greeting info showed in this div -->
                       <div id="greeting">Hi, Dr.Smith!</div>
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
                  <ul>
                      <li><a href="#">name of patient 1</a></li>
                      <li><a href="#">name of patient 2</a></li>
                      <li><a href="#">name of patient 3</a></li>
                      <li><a href="#">name of patient 4</a></li>
                  </ul>
              </div>
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
