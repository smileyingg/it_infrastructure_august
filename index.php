<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
<?php include 'script_choice.php'; ?>

<style>
  .h-form .form-body .h-form-label {
    height: auto !important;
  }
</style>

<body>
  <?php include 'header.php'; ?>
  <div class="container-fluid">
    <div class="col s12">
      <h4 style="text-align:center;">แบบประเมินความพึงพอใจการร่วมงานสัมมนา "การบริหารจัดการ IT Infrastructure ในยุคดิจิทัล"</h4>
      <h4 style="text-align:center;">เดือน สิงหาคม 2562 เวลา 13.30-16.30 น. ชั้น 16 ห้อง 16-2 อาคารไทยซัมมิททาวเวอร์ ถ.เพชรบุรีตัดใหม่</h4><br />
      <div class="card">

        <!-- Start Form -->
        <iframe id="iframe" name="iframe" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
        <!-- <iframe id="iframe" name="iframe" src="#" ></iframe> -->
        <form id="form_survey" method="POST">

          <!-- Description  -->
          <div class="card-header">
            <h5>โปรดเลือกคำตอบที่ตรงกับระดับความพึงพอใจของท่าน โดยท่านจะใช้เวลาราว 3-5 นาที ในการทำแบบสำรวจความพึงพอใจนี้</h5>
          </div><br />
          <!-- End Description  -->

          <!-- Date -->
          <div class="card-body">
            <h5>ท่านเข้าร่วมงานสัมมนาในวันใด</h5><br />

            <div>
              <label>
                <input class="with-gap" name="date_event" type="radio" value="วันพฤหัสบดีที่ 15 สิงหาคม 2562" required />
                <span for="">วันพฤหัสบดีที่ 15 สิงหาคม 2562</span>
              </label>

              <label>
                <input class="with-gap" name="date_event" type="radio" value="วันพฤหัสบดีที่ 29 สิงหาคม 2562" required />
                <span for="">วันพฤหัสบดีที่ 29 สิงหาคม 2562</span>
              </label>
            </div><br />

            <!-- Q1. -->
            <h5>1. ด้านเนื้อหา</h5><br />

            <table class="table table-bordered table-responsive">
              <thead class="thead-light">
                <tr style="text-align:center;">
                  <th scope="col">รายการประเมิน</th>
                  <th scope="col" style="width: 7%;">มากที่สุด</th>
                  <th scope="col" style="width: 7%;">มาก</th>
                  <th scope="col" style="width: 7%;">ปานกลาง</th>
                  <th scope="col" style="width: 7%;">น้อย</th>
                  <th scope="col" style="width: 7%;">น้อยที่สุด</th>
                </tr>
              </thead>
              <tbody>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">1.1 เนื้อหาที่บรรยายแต่ละหัวข้อเป็นประโยชน์โดยตรงต่อธุรกิจ</th>
                  <td><input type="radio" name="q1_s1" id="q1_s1_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q1_s1" id="q1_s1_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q1_s1" id="q1_s1_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q1_s1" id="q1_s1_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q1_s1" id="q1_s1_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">1.2 ได้ความรู้ และมีความเข้าใจเพิ่มขึ้นหลังจากเข้าร่วม</th>
                  <td><input type="radio" name="q1_s2" id="q1_s2_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q1_s2" id="q1_s2_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q1_s2" id="q1_s2_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q1_s2" id="q1_s2_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q1_s2" id="q1_s2_c1" data-col="1" value="1" required></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- End Q1. -->
          <!-- Q2. -->
          <div class="card-body">
            <h5>2. ด้านการถ่ายทอดเนื้อหา</h5><br />

            <table class="table table-bordered table-responsive">
              <thead class="thead-light">
                <tr style="text-align:center;">
                  <th scope="col">รายการประเมิน</th>
                  <th scope="col" style="width: 7%;">มากที่สุด</th>
                  <th scope="col" style="width: 7%;">มาก</th>
                  <th scope="col" style="width: 7%;">ปานกลาง</th>
                  <th scope="col" style="width: 7%;">น้อย</th>
                  <th scope="col" style="width: 7%;">น้อยที่สุด</th>
                </tr>
              </thead>
              <tbody>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">2.1 มีการถ่ายทอดได้ตรงกับหัวข้อสัมมนา และอย่างครบถ้วน</th>
                  <td><input type="radio" name="q2_s1" id="q2_s1_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q2_s1" id="q2_s1_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q2_s1" id="q2_s1_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q2_s1" id="q2_s1_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q2_s1" id="q2_s1_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">2.2 มีการถ่ายทอดได้อย่างชัดเจน เข้าใจง่าย</th>
                  <td><input type="radio" name="q2_s2" id="q2_s2_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q2_s2" id="q2_s2_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q2_s2" id="q2_s2_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q2_s2" id="q2_s2_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q2_s2" id="q2_s2_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">2.3 มีการสร้างบรรยากาศที่ดีในการถ่ายทอด</th>
                  <td><input type="radio" name="q2_s3" id="q2_s3_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q2_s3" id="q2_s3_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q2_s3" id="q2_s3_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q2_s3" id="q2_s3_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q2_s3" id="q2_s3_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">2.4 เปิดโอกาสให้ผู้เข้าร่วมได้มีส่วนร่วม</th>
                  <td><input type="radio" name="q2_s4" id="q2_s4_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q2_s4" id="q2_s4_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q2_s4" id="q2_s4_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q2_s4" id="q2_s4_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q2_s4" id="q2_s4_c1" data-col="1" value="1" required></td>
                </tr>

              </tbody>
            </table>
          </div>
          <!-- End Q2. -->

          <!-- Q3. -->
          <div class="card-body">
            <h5>3. ด้านสถานที่และอุปกรณ์</h5><br />

            <table class="table table-bordered table-responsive">
              <thead class="thead-light">
                <tr style="text-align:center;">
                  <th scope="col">รายการประเมิน</th>
                  <th scope="col" style="width: 7%;">มากที่สุด</th>
                  <th scope="col" style="width: 7%;">มาก</th>
                  <th scope="col" style="width: 7%;">ปานกลาง</th>
                  <th scope="col" style="width: 7%;">น้อย</th>
                  <th scope="col" style="width: 7%;">น้อยที่สุด</th>
                </tr>
              </thead>
              <tbody>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">3.1 ความเหมาะสมของสถานที่จัดงาน และการเดินทาง</th>
                  <td><input type="radio" name="q3_s1" id="q3_s1_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q3_s1" id="q3_s1_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q3_s1" id="q3_s1_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q3_s1" id="q3_s1_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q3_s1" id="q3_s1_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">3.2 ความเหมาะสมของวันและเวลาที่จัดสัมมนา</th>
                  <td><input type="radio" name="q3_s2" id="q3_s2_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q3_s2" id="q3_s2_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q3_s2" id="q3_s2_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q3_s2" id="q3_s2_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q3_s2" id="q3_s2_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">3.3 ความพร้อมของอุปกรณ์นำเสนอ ภาพ เครื่องเสียง</th>
                  <td><input type="radio" name="q3_s3" id="q3_s3_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q3_s3" id="q3_s3_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q3_s3" id="q3_s3_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q3_s3" id="q3_s3_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q3_s3" id="q3_s3_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">3.4 ของว่างรับรอง</th>
                  <td><input type="radio" name="q3_s4" id="q3_s4_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q3_s4" id="q3_s4_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q3_s4" id="q3_s4_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q3_s4" id="q3_s4_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q3_s4" id="q3_s4_c1" data-col="1" value="1" required></td>
                </tr>

              </tbody>
            </table><br />


            <h5>วันและเวลาที่สะดวกเข้าร่วมในครั้งถัดไป</h5><br />

            <div>
              <label>
                <input class="with-gap" name="q3_time" type="radio" value="ช่วงเช้า (9:00 - 12:00 น.)" required />
                <span for="">ช่วงเช้า (9:00 - 12:00 น.)</span>
              </label>

              <label>
                <input class="with-gap" name="q3_time" type="radio" value="ช่วงบ่าย (13:00 - 16:00 น.)" required />
                <span for="">ช่วงบ่าย (13:00 - 16:00 น.)</span>
              </label>
            </div>

          </div>
          <!-- End Q3. -->

          <!-- Q4. -->
          <div class="card-body">
            <h5>4. ด้านการจัดงาน</h5><br />

            <table class="table table-bordered table-responsive">
              <thead class="thead-light">
                <tr style="text-align:center;">
                  <th scope="col">รายการประเมิน</th>
                  <th scope="col" style="width: 7%;">มากที่สุด</th>
                  <th scope="col" style="width: 7%;">มาก</th>
                  <th scope="col" style="width: 7%;">ปานกลาง</th>
                  <th scope="col" style="width: 7%;">น้อย</th>
                  <th scope="col" style="width: 7%;">น้อยที่สุด</th>
                </tr>
              </thead>
              <tbody>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">4.1 การประชาสัมพันธ์งาน</th>
                  <td><input type="radio" name="q4_s1" id="q4_s1_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q4_s1" id="q4_s1_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q4_s1" id="q4_s1_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q4_s1" id="q4_s1_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q4_s1" id="q4_s1_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">4.2 การลงทะเบียนเข้าร่วมงาน</th>
                  <td><input type="radio" name="q4_s2" id="q4_s2_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q4_s2" id="q4_s2_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q4_s2" id="q4_s2_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q4_s2" id="q4_s2_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q4_s2" id="q4_s2_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">4.3 การอำนวยความสะดวกโดยเจ้าหน้าที่</th>
                  <td><input type="radio" name="q4_s3" id="q4_s3_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q4_s3" id="q4_s3_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q4_s3" id="q4_s3_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q4_s3" id="q4_s3_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q4_s3" id="q4_s3_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">4.4 ความสะดวกในการลงทะเบียนเข้าร่วมงาน (ผ่าน Application)</th>
                  <td><input type="radio" name="q4_s4" id="q4_s4_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q4_s4" id="q4_s4_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q4_s4" id="q4_s4_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q4_s4" id="q4_s4_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q4_s4" id="q4_s4_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">4.5 ช่องทางการรับข่าวสาร (ผ่าน Application) เช่น เอกสารเพิ่มเติม, แบบสอบถาม</th>
                  <td><input type="radio" name="q4_s5" id="q4_s5_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q4_s5" id="q4_s5_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q4_s5" id="q4_s5_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q4_s5" id="q4_s5_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q4_s5" id="q4_s5_c1" data-col="1" value="1" required></td>
                </tr>

              </tbody>
            </table>
          </div>
          <!-- End Q4. -->

          <!-- ประเภทการบริการที่สนใจ -->
          <div class="card-body">
            <h5>ประเภทการบริการที่สนใจ</h5><br />

            <table class="table table-bordered table-responsive">
              <thead class="thead-light">
                <tr style="text-align:center;">
                  <th scope="col">ประเภทการบริการ</th>
                  <th scope="col" style="width: 12%;">มีความสนใจ/<br />ต้องการบริการในขณะนี้</th>
                  <th scope="col" style="width: 12%;">ยังไม่สนใจ</th>

                </tr>
              </thead>
              <tbody>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">Monitoring as a Service</th>
                  <td><input type="radio" name="q5_s1" id="q5_s1_c1" onclick="checkInterested();" value="มีความสนใจ/ต้องการบริการในขณะนี้" required></td>
                  <td><input type="radio" name="q5_s1" id="q5_s1_c2" onclick="checkInterested();" value="ยังไม่สนใจ" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">Software Defined Infrastructure</th>
                  <td><input type="radio" name="q5_s2" id="q5_s2_c1" onclick="javascript:checkInterested();" value="มีความสนใจ/ต้องการบริการในขณะนี้" required></td>
                  <td><input type="radio" name="q5_s2" id="q5_s2_c2" onclick="javascript:checkInterested();" value="ยังไม่สนใจ" required></td>
                </tr>

              </tbody>
            </table>
          </div>
          <!-- End -->

          <!-- Detial. -->
          <div class="card-body" id="ifYes" style="display:none ">
            <h5>กรุณากรอกรายละเอียดต่อไปนี้ <span class="required" style="color:red;">*</span></h5><br />
            <div class="col-sm-6">
              <div class="input-group mx-sm-5 mb-3">
                <div class="input-group-prepend">
                  <span style="width: 120px;" class="input-group-text" id="inputGroup-sizing-default">ชื่อบริษัท</span>
                </div>
                <input type="text" class="form-control" id="company_name" name="company_name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input-group mx-sm-5 mb-3">
                <div class="input-group-prepend">
                  <span style="width: 120px;" class="input-group-text" id="inputGroup-sizing-default">ชื่อผู้ให้ข้อมูล</span>
                </div>
                <input type="text" class="form-control" id="customer_name" name="customer_name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input-group mx-sm-5 mb-3">
                <div class="input-group-prepend">
                  <span style="width: 120px;" class="input-group-text" id="inputGroup-sizing-default">โทรศัพท์</span>
                </div>
                <input type="tel" class="form-control" id="customer_telephone" name="customer_telephone" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="xxxxxxxxxx" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" title="กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input-group mx-sm-5 mb-3">
                <div class="input-group-prepend">
                  <span style="width: 120px;" class="input-group-text" id="inputGroup-sizing-default">อีเมล</span>
                </div>
                <input class="form-control" id="customer_email" name="customer_email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="example@example.com" type="email" pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*" title="กรุณาตรวจสอบรูปแบบ E-mail" />
              </div>
            </div>

          </div>
          <!-- End detial. -->



          <!-- Next Seminar -->
          <div class="card-header">
            <h5>หัวข้อสัมมนาที่ต้องการเข้าร่วมในครั้งถัดไป</h5>
          </div>

          <div class="card-body">
            <label class="container">
              <textarea class="form-control" name="next_seminar_detail" id="next_seminar_detail" style="width:80%; height:50%;"></textarea>
            </label>
          </div>
          <!-- End Next Seminar -->

          <!-- Comment. -->
          <div class="card-header">
            <h5>ข้อเสนอแนะเพิ่มเติม</h5>
          </div>

          <div class="card-body">
            <label class="container">
              <textarea class="form-control" name="suggestions_detail" id="suggestions_detail" style="width:80%; height:50%;"></textarea>
            </label>
          </div>
          <!-- End Comment. -->

          <!-- Button submit -->
          <div class="card-body">
            <div class="form-action" style="text-align:center;">
              <button class="btn btn-outline-success" type="submit" name="submit" value="submit">ส่งแบบสอบถาม</button>
            </div>
          </div>

        </form>
        <!-- End form -->

      </div>
    </div>
  </div><br />
  <!-- End container-fluid -->
  <?php include 'footer.php'; ?>

  <!-- script submit -->
  <script>
    $("#form_survey").on("submit", function(e) {

      e.preventDefault();


      $.ajax({
        url: "checksubmit.php",
        type: "post",
        data: $(this).serialize(),
        success: function(result) {
          jQuery("#form_survey input[type=radio]").prop("checked", false);
          console.log("result= " + result);
          if (result == "1") {
            swal({
              position: 'center',
              type: 'success',
              title: 'บันทึกข้อมูลเรียบร้อย',
              showConfirmButton: true,
            }).then((result) => {
              if (result.value) {
                window.location = "thankyou.php";
              }
            });
          } else {
            swal({
              position: 'center',
              type: 'warning',
              title: 'กรุณาใส่คำตอบให้ครบ',
              showConfirmButton: true,
            });
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          swal(
            'เกิดข้อผิดพลาด!',
            'ลองอีกครั้ง!',
            'error'
          );
        }
      });

    });
  </script>
  <!-- end script submit -->

  <script>
    //   $(document).ready(function() {
    //     $('#dtHorizontalExample').DataTable({
    //       "scrollX": true
    //     });
    //     $('.dataTables_length').addClass('bs-select');
    //   });
    // 
  </script>

  <style>
    .dtHorizontalExampleWrapper {
      max-width: 600px;
      margin: 0 auto;
    }

    #dtHorizontalExample th,
    td {
      white-space: nowrap;
    }

    table.dataTable thead .sorting:after,
    table.dataTable thead .sorting:before,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_asc_disabled:after,
    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_desc:before,
    table.dataTable thead .sorting_desc_disabled:after,
    table.dataTable thead .sorting_desc_disabled:before {
      bottom: .5em;
    }
  </style>

</body>

</html>