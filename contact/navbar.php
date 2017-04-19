<nav>
  <ul id="slide-out" class="side-nav fixed">
      <li class="hide-on-large-only" style="background-color: #F5F5F5; width:100%;">
        <a href="#" class="right" style="display:inline-block; padding:10px 10px 10px 10px;"><i class="material-icons circle red"></i></a>
        <a href="#" class="right" style="display:inline-block; padding:10px 10px 10px 10px;"><i class="material-icons">notifications</i></a>
        <a href="#" class="right" style="display:inline-block; padding:10px 10px 10px 10px;"><i class="material-icons">apps</i></a>
        
      </li>
      <li class="hide-on-large-only grey-text" style="color:#000000; font-size:22px;"><img src="pic/googlelogo.svg">รายชื่อติดต่อ</li>
      <li class=""><a href="index.php" class="waves-effect waves-teal"><i class="material-icons">contacts</i>รายชื่อติดต่อ</a></li>
      <li class=""><a href="Often.php" class="waves-effect waves-teal"><i class="material-icons">history</i>ผู้ที่คุณติดต่อบ่อยครั้ง</a></li>
      <li class=""><a href="Duplicate.php" class="waves-effect waves-teal"><i class="material-icons">content_copy</i>รายการซ้ำ</a></li>
      <li class="divider"></li>
      <li>
        <ul class="collapsible" data-collapsible="accordion">
          <li>
            <div class="collapsible-header active"><a class="waves-effect waves-teal grey-text text-darken-2"><i class="material-icons">expand_more</i>ป้ายกำกับ</a></div>
            <div class="collapsible-body">
              <div class="collection">
                <a class="collection-item" href="Family.php"><i class="material-icons">label</i><p> Family(2)</p></a>
                <a class="collection-item" onclick="$('#modal-AddTag').modal('open');"><i class="material-icons">add</i><p> สร้างป้ายกำกับ</p></a>
              </div>
            </div>
          </li>
        </ul>
      </li>
      <li class="divider"></li>
      <li>
        <ul class="collapsible" data-collapsible="accordion">
          <li>
            <div class="collapsible-header"><a class="waves-effect waves-teal grey-text text-darken-2"><i class="material-icons">expand_more</i>เพิ่มเติม</a></div>
            <div class="collapsible-body">
              <div class="collection">
                <a class="collection-item" onclick="$('#modal-Import').modal('open');"><p> นำเข้า</p></a>
                <a class="collection-item" onclick="$('#modal-Export').modal('open');"><p> ส่งออก</p></a>
                <a class="collection-item" onclick="$('#modal-Print').modal('open');"><p> พิมพ์</p></a>
                <a class="collection-item" onclick="$('#modal-Undo').modal('open');"><p> เลิกทำการเปลี่ยนแปลง</p></a>
                <a class="collection-item" href="Another.php" class="waves-effect waves-teal"><p> รายชื่อติดต่ออื่นๆ</p></a>
              </div>
            </div>
          </li>
        </ul>
      </li>
      <li class="divider"></li>
      <li class=""><a onclick="$('#modal-setting').modal('open');"><i class="material-icons">settings</i>การตั้งค่า</a></li>
      <li class=""><a onclick="$('#modal-AddComment').modal('open');"><i class="material-icons">sms_failed</i>ส่งคำติชม</a></li>
      <li class=""><a onclick="$('#modal-Help').modal('open');"><i class="material-icons">help</i>ความช่วยเหลือ</a></li>
      <li class=""><a href="#" class="waves-effect waves-teal"><i class="material-icons">help</i>ไปที่เวอร์ชันเก่า</a></li>
      </li>
    </ul>
  <a href="#" data-activates="slide-out" class="button-collapse white-text"><i class="material-icons">menu</i></a>
  <div class="nav-wrapper">
      <!-- <a href="#" class="brand-logo left hide-on-small-only">Google</a> -->
      <a href="#" class="brand-logo left"><img class="hide-on-small-only hide-on-med-only" src="pic/googlelogo_light.svg">รายชื่อติดต่อ</a>
      <ul class="right">
        <li class=""><a href="#"><i class="material-icons">search</i></a></li>
        <li class="hide-on-small-only"><a href="#"><i class="material-icons">apps</i></a></li>
        <li class="hide-on-small-only"><a href="#"><i class="material-icons">notifications</i></a></li>
        <li class="hide-on-small-only"><a href="#" style="padding-top:15px; padding-bottom:15px;"><i class="material-icons circle red"></i></a></li>
      </ul>
    </div>
</nav>



  <!-- <a class="waves-effect waves-light btn view" onclick="$('#modal-setting').modal('open');">Setting</a> -->
  <!-- Modal Setting -->
  <div id="modal-setting" class="modal">
    <div class="modal-content">
      <h5>การตั้งค่า</h5>
      <p>ภาษา</p>
      <a href="#" style="color: #4274FF;">เปลี่ยนการตั้งค่าภาษาสำหรับผลิตภัณฑ์ Google ทั้งหมด</a>
      <p>รหัสประเทศของหมายเลขโทรศัพท์</p>
      <div class="input-field col s6">
        <select>
          <option value="1" selected>United States</option>
          <option value="2">United Kingdom</option>
          <option value="3">Thailand</option>
        </select>
      </div>
      <p>การจัดเรียง</p>
      <form action="#">
        <p>
          <input name="group1" type="radio" id="test1" />
          <label for="test1">ชื่อ</label>
        </p>
        <p>
          <input name="group1" type="radio" id="test2" />
          <label for="test2">นามสกุล</label>
        </p>
      </form>
    </div>
    <div class="modal-footer">
      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat" style="color: #4274FF">บันทึก</a>
      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">ยกเลิก</a>
    </div>
  </div>


  <!-- <a class="waves-effect waves-light btn view" onclick="$('#modal-AddTag').modal('open');">Add Tag</a> -->
  <!-- Modal Add Tag -->
  <div id="modal-AddTag" class="modal">
    <div class="modal-content">
      <label for="AddTag" style="color: #4274FF">สร้างป้ายกำกับ</label>
      <input id="AddTag" type="text" class="validate" placeholder="สร้างป้ายกำกับ">
    </div>
    <div class="modal-footer">
      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat" style="color: #4274FF">บันทึก</a>
      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">ยกเลิก</a>
    </div>
  </div>


  <!-- <a class="waves-effect waves-light btn view" onclick="$('#modal-AddComment').modal('open');">Add Comment</a> -->
  <!-- Modal Add Comment -->
  <div id="modal-AddComment" class="modal" style="width: 360px;">
    <div class="modal-content" style="background-color: #607D8B; height: 54.8px; color: white; padding-top: 10px;">
      <h5 style="font-size: 20px;">ส่งความคิดเห็น</h5>
    </div>
    <div class="modal-content">
        <form class="col s12">
              <textarea id="textarea1" class="materialize-textarea" placeholder="อธิบายปัญหาหรือแชร์ไอเดียของคุณ"></textarea>
        </form>
        <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
        <label for="filled-in-box">ใส่ภาพหน้าจอ</label>
        <p style="font-size: 12px;">ไปที่หน้าความช่วยเหลือทางกฎหมายเพื่อขอให้เปลี่ยนแปลงเนื้อหาเนื่องด้วยเหตุผลทางกฎหมาย ความคิดเห็นของคุณ ข้อมูลเพิ่มเติม และอีเมลจะส่งไปยัง Google ดูนโยบายความเป็นส่วนตัวและข้อกำหนดในการให้บริการ</p>
      </div>
    <div class="modal-footer">
      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat" style="color: #4274FF">ส่ง</a>
      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">ยกเลิก</a>
    </div>
  </div>


  <!-- <a class="waves-effect waves-light btn view" onclick="$('#modal-Import').modal('open');">Import</a> -->
  <!-- Modal Import -->
  <div id="modal-Import" class="modal" style="width: 90%;">
    <div class="modal-content" style="background-color: #2A56C6; color: white;">
      <div class="circle" style="height:60px; width: 60px; background-color: #3B78E7; float:left;"><i class="material-icons" style="margin-top: 15px;
    margin-left: 18px;">import_contacts</i></div>
      <h5>นำเข้ารายชื่อติดต่อจากบัญชีอื่นๆ</h5>
    </div>
    <div class="modal-content">
      
      <div class="collection import">
        <a href="#" class="collection-item"><img src="pic/yahoo.png">Yahoo Mail</a>
        <a href="#" class="collection-item"><img src="pic/outlook.png">Outlook.com</a>
        <a href="#" class="collection-item"><img src="pic/aol.png">AOL</a>
        <a href="#" class="collection-item"><i class="material-icons">email</i>ผู้ให้บริการอีเมลรายอื่น<br><span style="font-size: 12px; margin-left: 120px; line-height:14px;">Apple, IG,Naver และอีกกว่า 200 รายการ</span></a>
        <a href="#" class="collection-item"><i class="material-icons">import_contacts</i>ไฟล์ CSV หรือ vCard</a>
      </div>          
    </div>
    <div class="modal-footer">
      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat" style="color: #4274FF">ยกเลิก</a>
    </div>
  </div>


  <!-- <a class="waves-effect waves-light btn view" onclick="$('#modal-Export').modal('open');">Export</a> -->
  <!-- Modal Export -->
  <div id="modal-Export" class="modal">
    <div class="modal-content">
      <h5>ส่งออกจากเวอร์ชันเก่าใช่ไหม</h5>
      <p>Google Contacts เวอร์ชันตัวอย่างนี้ยังไม่รองรับการส่งออก</p>         
    </div>
    <div class="modal-footer">
      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat" style="color: #4274FF">ไปที่เวอร์ชันเก่า</a>
      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">ยกเลิก</a>
    </div>
  </div>

  <!-- <a class="waves-effect waves-light btn view" onclick="$('#modal-Print').modal('open');">Print</a> -->
  <!-- Modal Print -->
  <div id="modal-Print" class="modal">
    <div class="modal-content">
      <h5>พิมพ์จากเวอร์ชันเก่าใช่ไหม</h5>
      <p>Google Contacts เวอร์ชันตัวอย่างนี้ยังไม่รองรับการพิมพ์</p>         
    </div>
    <div class="modal-footer">
      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat" style="color: #4274FF">ไปที่เวอร์ชันเก่า</a>
      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">ยกเลิก</a>
    </div>
  </div>


  <!-- <a class="waves-effect waves-light btn view" onclick="$('#modal-Undo').modal('open');">Undo</a> -->
  <!-- Modal Undo -->
  <div id="modal-Undo" class="modal">
    <div class="modal-content">
      <h5>เลิกทำการเปลี่ยนแปลงในรายการ</h5>
      <p>เปลี่ยนรายการรายชื่อติดต่อกลับเป็นสถานะใดๆ ใน 30 วันที่ผ่านมา เรียนรู้เพิ่มเติม เลิกทำการเปลี่ยนแปลงจาก</p>
      <form action="#">
        <p>
          <input name="Undo" type="radio" id="Undo1" />
          <label for="Undo1">10 นาทีที่แล้ว</label>
        </p>
        <p>
          <input name="Undo" type="radio" id="Undo2" />
          <label for="Undo2">1 ชั่วโมงที่ผ่านมา</label>
        </p>
        <p>
          <input name="Undo" type="radio" id="Undo3" />
          <label for="Undo3">เมื่อวานนี้</label>
        </p>
        <p>
          <input name="Undo" type="radio" id="Undo4" />
          <label for="Undo4">1 สัปดาห์ที่ผ่านมา</label>
        </p>
        <p>
          <input name="Undo" type="radio" id="Undo5" />
          <label for="Undo5">กำหนดเอง</label>
        </p>
      </form>
    </div>
    <div class="modal-footer">
      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat" style="color: #4274FF">ยืนยัน</a>
      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">ยกเลิก</a>
    </div>
  </div>

  <!-- Modal Help -->
  <!-- <a class="modal-trigger waves-effect waves-light btn" href="#modal1">Modal</a> -->
  <div id="modal-Help" class="modal bottom-sheet">
    <div class="modal-content help" style="background-color: #757575;">
          <h5 style="color: white; margin-left:24px;">ความช่วยเหลือ</h5><br>
          <div class="input-field" style="background-color: white; margin-left:10px; margin-right:10px;">
            <i class="material-icons prefix">search</i>
            <input id="icon_prefix" type="text" class="validate" placeholder="ค้นหาความช่วยเหลือ">
          </div>
    </div>
    <div class="modal-content help">
      <ul class="collection help">
          <li class="collection-item">ยอดนิยม</li>
      </ul>
      <div class="collection help" style="margin-bottom: 5px;">
        <a href="#" class="collection-item"><i class="material-icons">assignment</i>นำเข้า กู้คืน หรือสำรองข้อมูลรายชื่อติดต่อ</a>
        <a href="#" class="collection-item"><i class="material-icons">assignment</i>จัดกลุ่มรายชื่อติดต่อ</a>
        <a href="#" class="collection-item"><i class="material-icons">assignment</i>แก้ไขข้อผิดพลาดในการซิงค์กับแปบ Gmail บน Android</a>
        <a href="#" class="collection-item"><i class="material-icons">assignment</i>ดู Google Contacts บนอุปกรณ์เคลื่อนที่</a>
        <a href="#" class="collection-item"><i class="material-icons">assignment</i>ส่งหรือยกเลิกการส่งข้อความ Gmail</a>
        <a href="#" class="collection-item" style="color:#4B8BF5;">เรียกดูบทความทั้งหมด</a>
        <a href="#" class="collection-item" style="color:#4B8BF5;">ไปที่พอรัมความช่วยเหลือ</a>
      </div>
      <div class="collection help">
          <a href="#" class="collection-item"><i class="material-icons">feedback</i>ส่งความคิดเห็น</a>
      </div>
    </div>
  </div>