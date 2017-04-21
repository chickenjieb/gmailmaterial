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
        <?php 
          for($i=0; $i<20; $i++){
            echo "<a class='collection-item often avatar' onclick='clickOften()'>
              <div class='row'>
                <div class='col s1'>
                  <span class='circle cyan white-text'>P</span>
                </div>
                <div class='col s4'>
                  <p>ป่าป๊า</p>
                </div>
                <div class='col s4 hide-on-small-only hide-on-med-only'>
                  <p>+66816160000</p>
                </div>
                <div class='col s2'>
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
    
    <a class="btn-floating btn-large waves-effect red"><i class="material-icons">add</i></a>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/editjs.js"></script>
  </body>
</html>
