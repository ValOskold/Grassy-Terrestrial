<?php
//dashboard_patient.php
session_start();
if(isset($_SESSION["ID"])){
  if($_SESSION["ROLE"] == "Patient"){
    ?>
   <html lang="en" dir="ltr">
       <head>
           <meta charset="utf-8">
           <title>WellnessTracker--Dashboard of patients!</title>
           <link rel="stylesheet" href="css/main.css" />
           <link rel="stylesheet" href="css/dashboard_patient.css" />
       </head>
       <body>
           <!-- fixed header begins -->
           <header>
               <div id=container_header>
                   <!-- clinic information + doctor's name showed in this div -->
                   <div id="clinicInfo">clinic name | Assigned with Dr.Smith</div>
                   <!-- logo showed in this div -->
                   <div id="logo2">
                       <img src="images/logo_small.png" alt="logo" />
                   </div>
                   <div id="container_header_right">
                       <!-- date of today showed in this div -->
                       <div id="date">today's date</div>
                       <!-- greeting info showed in this div -->
                       <div id="greeting">Hi, Melanie!</div>
                       <!-- log out button showed in this div -->
                       <div id="logOut"><a href="logout.php">Log Out</a></div>
                   </div>
               <div>
          </header>
          <div class="placeholder"></div>
          <!-- main components of dashboard begins -->
          <div class="dash_content">
              <!-- menu of activitis showed in this div -->
              <div id="menu">
                  <h1>Past Activity</h2>
                  <!-- get the name of activities of this patient from database and listed in td -->
                  <table class="menu_table">
                      <tr>
                          <td class="td01"><img src="images/activity_icon01.png"/></td>
                          <td class="td02"><a href="#">Activity 1</a></td>
                      </tr>
                      <tr>
                          <td class="td01"><img src="images/activity_icon02.png"/></td>
                          <td class="td02"><a href="#">Activity 2</a></td>
                      </tr>
                      <tr>
                          <td class="td01"><img src="images/activity_icon03.png"/></td>
                          <td class="td02"><a href="#">Activity 3</a></td>
                      </tr>
                      <tr>
                          <td class="td01"><img src="images/activity_icon04.png"/></td>
                          <td class="td02"><a href="#">Activity 4</a></td>
                      </tr>
                  </table>
               </div>
              <!-- upcoming activities showed in this div -->
              <div id="reminder">
                  <h1>Upcoming Activities</h2>
                  <!-- reminder box used to show activities and date -->
                  <!-- loop reminder box when needed -->
                  <div class="reminder_box">
                      <!-- get data of activity from database -->
                      <div class="dateTd">Date</div>
                      <!-- get name of activity from database -->
                      <div class="activityTd">Activities</div>
                      <!-- get dueday of activity from database -->
                      <div class="duedayTd">due in 3 days</div>
                      <div class="checkboxTd">
                          <form>
                              <input type="checkbox" name="check_activity" id="check_activity" class="check_activity">
                          </form>
                      </div>
                  </div>
                  <div class="reminder_box">
                      <div class="dateTd">Date</div>
                      <div class="activityTd">Activities</div>
                      <div class="duedayTd">due in 3 days</div>
                      <div class="checkboxTd">
                          <form>
                              <input type="checkbox" name="check_activity" id="check_activity2" class="check_activity">
                          </form>
                      </div>
                  </div>
              </div>
              <!-- conversation showed in this div -->
               <div id="inbox">
                  <h1>Doctor's Comments</h2>
                  <!-- conversation box used to show conversations -->
                  <div class="conversation_box">
                      <!-- loop conversation_item when needed -->
                      <div class="conversation_item">
                          <!-- get time from database -->
                          <div class="item1">time</div>
                          <!-- get patient's name from database -->
                          <div class="item2">d_name</div>
                          <div class="item3">
                              <img src="images/activity_icon01.png" />
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
                          <div class="item2">d_name</div>
                          <div class="item3">
                              <img src="images/activity_icon02.png" />
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
