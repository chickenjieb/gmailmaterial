<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/editcss.css" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Nav bar -->
    <nav>
    <ul id="slide-out" class="side-nav fixed">
      <li class=""><a href="List.php" class="waves-effect waves-teal"><i class="material-icons">view_stream</i>กำหนดเวลา</a></li>
      <li class=""><a href="Day.php" class="waves-effect waves-teal"><i class="material-icons">view_day</i>วัน</a></li>
      <li class="active"><a href="3Day.php" class="waves-effect waves-teal"><i class="material-icons">view_column</i>3 วัน</a></li>
      <li class=""><a href="Week.php" class="waves-effect waves-teal"><i class="material-icons">view_column</i>สัปดาห์</a></li>
      <li class="Month.php"><a href="Month.php" class="waves-effect waves-teal"><i class="material-icons">view_module</i>เดือน</a></li>
      <li class=""><a href="Search.php" class="waves-effect waves-teal"><i class="material-icons">search</i>ค้นหา</a></li>
      <li class="divider"></li>
      <li class=""><a href="" class="waves-effect waves-teal"><i class="material-icons">account_circle</i>chickenjieb@gmail.com</a></li>
      <li class=""><a href="" class="waves-effect waves-teal">กิจกรรม</a></li>
      <li class=""><a href="" class="waves-effect waves-teal">แจ้งเตือน</a></li>
      <li class=""><a href="" class="waves-effect waves-teal"><i class="material-icons">account_circle</i>chickenjieb@gmail.com</a></li>
      <li class=""><a href="" class="waves-effect waves-teal">Samsung Calendar</a></li>
      <li class=""><a href="" class="waves-effect waves-teal"><i class="material-icons">cake</i>เพิ่มเติม</a></li>
      <li class=""><a href="" class="waves-effect waves-teal">วันเกิด</a></li>
      <li class=""><a href="" class="waves-effect waves-teal">วันหยุด</a></li>
      <li class="divider"></li>
      <li class=""><a href="Setting.php" class="waves-effect waves-teal"><i class="material-icons">settings</i>การตั้งค่า</a></li>
      <li class=""><a href="Help.php" class="waves-effect waves-teal"><i class="material-icons">help</i>ความช่วยเหลือและความคิดเห็น</a></li>
      </li>
    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse" hide-on-large-only><i class="material-icons grey-text">menu</i></a>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo left black-text" hide-on-med-and-down>เมษายน</a>
        <ul class="right">
          <li><a href=""><i class="material-icons grey-text">perm_contact_calendar</i></a></li>
          <li><a href=""><i class="material-icons grey-text">more_vert</i></a></li>
        </ul>
      </div>
  </nav>
 
  </head>

  <body style="background-color: #FFFFFF;">
    <div class="row">
      <div class="col s1 day">
        <table class="bordered day grey-text centered" style="margin-top: 30px;">
          <thead>
            <tr>
              <th>
                <td></td>
                <td></td>
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            for($i=1; $i<=24; $i++){
              $time = $i%24;
              if($time<10){$time = "0".$time;}
              echo "<tr><td>".$time.":00</td></tr>";
            }
          ?>
          </tbody>
        </table>
      </div>

      <div class="col s11 day-content">
        <table class="bordered outside-table-week">
          <thead class="outside-table-week">
            <tr>
                <th><h4>7</h4><h6>ศ.</h6></th>
                <th><h4>8</h4><h6>ส.</h6></th>
                <th><h4>9</h4><h6>อา.</h6></th>
            </tr>
          </thead>

          <tbody>
          <?php 
            for($i=0; $i<24; $i++){
              echo "<tr class='new-row-3day'>
                      <td class='inside-table-week'></td>
                      <td class='inside-table-week'></td>
                      <td class='inside-table-week'></td>
                    </tr>";
            }
          ?>
            
            </tbody>
        </table>
      </div>
    </div>

    <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
    
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/editjs.js"></script>


  </body>
</html>