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
        <li>
          <div class="userView">
            <div class="background">
              <img src="pic/bgnav.jpg">
            </div>
            <a href="#"><img class="circle" src="pic/user.png"></a>
            <a href="#"><span class="white-text name">Jutatip Marirak</span></a>
            <a href="#"><span class="white-text email">chickenjieb@gmail.com</span></a>
          </div>
        </li>
        <li class=""><a href="AllMailBox.php" class="waves-effect waves-teal"><i class="material-icons">label</i>กล่องจดหมายทั้งหมด</a></li>
        <li class="divider"></li>
        <li class=""><a href="index.php" class="waves-effect waves-teal"><i class="material-icons">label</i>หลัก</a></li>
        <li class=""><a href="Social.php" class="waves-effect waves-teal"><i class="material-icons">group</i>โซเชียล</a></li>
        <li class=""><a href="Promotion.php" class="waves-effect waves-teal"><i class="material-icons">label</i>โปรโมชัน</a></li>
        <li class=""><a href="Update.php" class="waves-effect waves-teal"><i class="material-icons">error</i>อัพเดท</a></li>
        <li class=""><a href="Forum.php" class="waves-effect waves-teal"><i class="material-icons">forum</i>ฟอรัม</a></li>
        <li class="divider"></li>
        <label>ป้ายกำกับล่าสุด</label>
        <li class=""><a href="Personal.php" class="waves-effect waves-teal"><i class="material-icons">label</i>Personal</a></li>
        <li class=""><a href="Receipts.php" class="waves-effect waves-teal"><i class="material-icons">label</i>Receipts</a></li>
        <li class=""><a href="Travel.php" class="waves-effect waves-teal"><i class="material-icons">label</i>Travel</a></li>
        <li class=""><a href="Work.php" class="waves-effect waves-teal"><i class="material-icons">label</i>Work</a></li>
        <li class="divider"></li>
         <label>ป้ายกำกับทั้งหมด</label>
        <li class=""><a href="BookMark.php" class="waves-effect waves-teal"><i class="material-icons">star</i>ติดดาว</a></li>
        <li class=""><a href="Important.php" class="waves-effect waves-teal"><i class="material-icons">label</i>สำคัญ</a></li>
        <li class=""><a href="Sent.php" class="waves-effect waves-teal"><i class="material-icons">send</i>ส่งแล้ว</a></li>
        <li class=""><a href="OutMail.php" class="waves-effect waves-teal"><i class="material-icons">send</i>กล่องจดหมายออก</a></li>
        <li class=""><a href="Draft.php" class="waves-effect waves-teal"><i class="material-icons">settings</i>ร่างจดหมาย</a></li>
        <li class=""><a href="AllMail.php" class="waves-effect waves-teal"><i class="material-icons">email</i>อีเมลล์ทั้งหมด</a></li>
        <li class="active"><a href="JunkMail.php" class="waves-effect waves-teal"><i class="material-icons">warning</i>จดหมายขยะ</a></li>
        <li class=""><a href="Bin.php" class="waves-effect waves-teal"><i class="material-icons">delete</i>ถังขยะ</a></li>
        <li class=""><a href="Personal.php" class="waves-effect waves-teal"><i class="material-icons">label</i>Personal</a></li>
        <li class=""><a href="Receipts.php" class="waves-effect waves-teal"><i class="material-icons">label</i>Receipt</a></li>
        <li class=""><a href="Travel.php" class="waves-effect waves-teal"><i class="material-icons">label</i>Travel</a></li>
        <li class=""><a href="Work.php" class="waves-effect waves-teal"><i class="material-icons">label</i>Work</a></li>
        <li class="divider"></li>
        <li class=""><a href="Setting.php" class="waves-effect waves-teal"><i class="material-icons">settings</i>การตั้งค่า</a></li>
        <li class=""><a href="Help.php" class="waves-effect waves-teal"><i class="material-icons">help</i>ความช่วยเหลือและความคิดเห็น</a></li>
      </ul>
      <a href="#" data-activates="slide-out" class="button-collapse" hide-on-large-only><i class="material-icons">menu</i></a>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo left" hide-on-med-and-down>จดหมายขยะ</a>
        <ul class="right">
          <li><a href="sass.html"><i class="material-icons">search</i></a></li>
        </ul>
      </div>
    </nav>
  </head>

  <body>
    <div class="row">
      <div class="card grey lighten-3">
        <div class="card-content black-text">
          <p>รายการที่อยู่ในจดหมายขยะเกิน 30 วันจะถูกลบทิ้งโดยอัตโนมัติ</p>
        </div>
        <div class="card-action">
          <a href="#" style="color: #000000;">ล้างจดหมายขยะเลย</a>
        </div>
      </div>
    </div>
    <?php include('maillist.php'); ?>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/editjs.js"></script>
  </body>
</html>
        
