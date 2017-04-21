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

  <body>
    <div class="container often">
      <div class="collection often">
        <ul class="collection often">
          <li class='collection-item often' style="color: #616161;">ผู้ที่คุณติดต่อบ่อยครั้ง</li>
        </ul>
        <?php 
          for($i=0; $i<15; $i++){
            echo "<a class='collection-item often avatar hoverable' onclick='clickOften()'>
              <div class='row'>
                <div class='col s1'>
                  <span class='circle orange white-text'>J</span>
                </div>
                <div class='col s4'>
                  <p>junior8807@yahoo.co.th</p>
                </div>
                <div class='col s4 hide-on-small-only hide-on-med-only'>
                  <p>junior8807@yahoo.co.th</p>
                </div>
                <div class='col s3 right-align grey-text hide-on-small-only hide-on-med-only'>
                  <i class='material-icons'>star_border</i>
                  <i class='material-icons'>person_add</i>
                  <i class='material-icons'>more_vert</i>
                </div>
              </div>
            </a>";
          } 
        ?>
      </div>
    </div>

    <!-- <a class="waves-effect waves-light btn view" onclick="$('#modal-Family').modal('open');">Add Tag</a> -->
    <!-- Modal Family -->
    <div id="modal-Often" class="modal">
      <div class="modal-footer">
        <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">ไปยัเวอร์ชันเก่า</a>
        <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">ยกเลิก</a>
      </div>
      <div class="modal-content">
        <h4><i class="material-icons circle">account_circle</i>ป่าป๊า</h4>
        <p>รายละเอียดการติดต่อ</p><br>
        <p><i class="material-icons">email</i><a href="#">&nbsp;junior8807@yahoo.co.th</a></p>
      </div>
    </div>

    <a class="btn-floating btn-large waves-effect red"><i class="material-icons">add</i></a>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/editjs.js"></script>
  </body>
</html>
        