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
    <div class="collection often">
      <ul class="collection often">
        <li class='collection-item often' style="color: #616161;">Family(2)</li>
      </ul>
      <a class="collection-item often avatar" onclick="$('#modal-Family').modal('open');">
        <div class="row">
          <div class="col s1">
            <i class="material-icons circle">account_circle</i>
          </div>
          <div class="col s4">
            <p>ป่าป๊า</p>
          </div>
          <div class="col s4 hide-on-small-only hide-on-med-only">
            <p>+66816160000</p>
          </div>
          <div class="col s3 right-align grey-text hide-on-small-only hide-on-med-only">
            <i class="material-icons">grade</i>
            <i class="material-icons">mode_edit</i>
            <i class="material-icons">more_vert</i>
          </div>
        </div>
      </a>
      <a class="collection-item often avatar" onclick="$('#modal-Family').modal('open');">
        <div class="row">
          <div class="col s1">
            <i class="material-icons circle">account_circle</i>
          </div>
          <div class="col s4">
            <p>หม่าม้า</p>
          </div>
          <div class="col s4 hide-on-small-only hide-on-med-only">
            <p>+66816160000</p>
          </div>
          <div class="col s3 right-align grey-text hide-on-small-only hide-on-med-only">
            <i class="material-icons">grade</i>
            <i class="material-icons">mode_edit</i>
            <i class="material-icons">more_vert</i>
          </div>
        </div>
      </a>
    </div>

    <!-- <a class="waves-effect waves-light btn view" onclick="$('#modal-Family').modal('open');">Add Tag</a> -->
    <!-- Modal Family -->
    <div id="modal-Family" class="modal">
      <div class="modal-footer">
        <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">ไปยัเวอร์ชันเก่า</a>
        <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">ยกเลิก</a>
      </div>
      <div class="modal-content">
        <h4><i class="material-icons circle">account_circle</i>ป่าป๊า</h4>
        <p>รายละเอียดการติดต่อ</p><br>
        <p><i class="material-icons">phone</i><a href="#">&nbsp;0816160000</a>.มือถือ</p>
      </div> 
    </div>

    <a class="btn-floating btn-large waves-effect red"><i class="material-icons">add</i></a>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/editjs.js"></script>
  </body>
</html>
        