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
   <?php include('navbar.php'); ?>
  </head>

  <body class="white">
    <div class="container" style="width:90%;">
      <p style="display:block; float:left; color:grey;">1 รายการซ้ำ<p>
      <p style="color: #4274FF; display:block; float:right;">รวมทั้งหมด<p>
        <div class="row" style="margin-top:30px;">
          <div class="col s12">
            <div class="card dup" style="margin-top:30px;">
              <div class="card-content dup">
                <ul class="collection">
                  <li class="collection-item dup"><h5>Jieb TruemoveH</h5></li>
                  <li class="collection-item dup avatar">
                    <i class="material-icons circle">account_circle</i>
                    <span class="title">Jieb TruemoveH</span>
                    <p>0954860000(Mobile)</p>
                  </li>
                  <li class="collection-item dup avatar">
                    <i class="material-icons circle">account_circle</i>
                    <span class="title">Jieb TruemoveH</span>
                    <p>0954860000(Mobile)</p>
                  </li>
                </ul>
              </div>
              <div class="card-action right-align">
                <a class="blue-text" href="#">รวม</a>
                <a class="blue-text" href="#">ปิด</a>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/editjs.js"></script>
  </body>
</html>
        