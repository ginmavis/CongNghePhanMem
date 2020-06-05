
<?php 
$TwoDay =time()+(1*24*60*60);  
$MaxDate = date('Y-m-d',$TwoDay); 
$DateNow = date('Y-m-d');
$data1=  $_SESSION['UserData'];
?>
 <div id="datlich" class="pt-2">
   
  <div class="form-group  container-fluid">
<!-- chọn ngày -->
<div class="row">
 <div class="col-5 choseDate mx-auto">
          <h2 class="" style="text-align: center;">Đặt lịch 

        <button class='btn btn-success icon' data-toggle='modal' data-target='#addnew'><i class='fa fa-plus-circle'></i></button>
        <button class='btn btn-primary icon'> <i class='	fa fa-download'></i></button>

 
        </h2>
          
          <label  for="">Chọn ngày (Hôm nay hoặc mai) :</label>
          <form action="" method="post">
          <div class="d-flex">
          <input
            type="date"
            id="date"
            name="date"
            class="form-control col-9"
            min="<?=$DateNow?>"
            max="<?=$MaxDate ?>"
          
            required
           
          
          />
          <button type="submit" name="btnChoseDate" class="col-2 mx-3 btn btn-success">
            Xem lịch
          </button>
          </div>
        </form>
        </div>
        
</div>


  </div>
<div class="row moctime">
  
        <h4 class="col-12 center m-0">Buổi sáng</h4>
      
        <?php
$conn = mysqli_connect('localhost','root','root','clinic');
if(!$conn){
    echo 'fail';
    exit();
}
$date= date('Y-m-d');


if(isset($_POST['btnChoseDate'])){
  $qr = "SELECT * FROM orders where date='". $_POST['date'] ."'";

}else{
  $qr = "SELECT * FROM orders where date='". $date ."'";

}
 
$result = mysqli_query($conn,$qr);
$am7_8=false;
$am8_9=false;
$am9_10=false;
$am10_11=false;
$am11_12=false;
$pm12_13=false;
$pm13_14=false;
$pm14_15=false;
$pm15_16=false;
$pm16_17=false;


if($r= mysqli_num_rows($result)>0){
  while($row = mysqli_fetch_assoc($result)){
        if($row['time'] == '7h-8h') $am7_8 = true;
        if($row['time'] == '8h-9h')$am8_9 =true;
        if($row['time'] == '9h-10h') $am9_10=true;
        if($row['time'] == '10h-11h') $am10_11=true;
        if($row['time'] == '11h-12h') $am11_12=true;
        if($row['time'] == '12h-13h') $pm12_13=true;
        if($row['time'] == '13h-14h') $pm13_14=true;
        if($row['time'] == '14h-15h') $pm14_15=true;
        if($row['time'] == '15h-16h') $pm15_16=true;
        if($row['time'] == '16h-17h') $pm16_17=true;
  }
}


// 7h-8h
if($am7_8){
  echo'<button
          class="col time btn btn-info p-2 m-2 btn-outline-none"
          disabled
          id="time0"
          value="7h-8h"
        >
          7h-8h <br />
          <span>Đã đặt</span>
        </button>';
}else{
   echo'<button
          class="col time btn btn-primary p-2 m-2 btn-outline-none"
          
          id="time0"
          value="7h-8h"
        >
          7h-8h <br />
          <span>Còn trống</span>
        </button>';
}
// 8h-9h
if($am8_9){
  echo'  <button
          class="col time btn btn-info p-2 m-2 btn-outline-none"
          id="time1"
          value="8h-9h"
          disabled
          >
          8h-9h <br />
          <span>Đã đặt</span>
        </button>';
}else{
  echo'  <button
          class="col time btn btn-primary p-2 m-2 btn-outline-none"
          id="time1"
          value="8h-9h"
        >
          8h-9h <br />
          <span>Còn trống</span>
        </button>';
}
//9-10h
if($am9_10){
   echo' <button
          class="col time btn btn-info p-2 m-2 btn-outline-none"
          id="time2"
          value="9h-10h"
          disabled
        >
          9h-10h <br />
          <span>Đã đặt</span>
        </button>';
}else{
   echo' <button
          class="col time btn btn-primary p-2 m-2 btn-outline-none"
          id="time2"
          value="9h-10h"
        >
          9h-10h <br />
          <span>Còn trống</span>
        </button>';
}
// 10-11h
if($am10_11){
   echo' <button
          class="col time btn btn-info p-2 m-2 btn-outline-none"
          id="time2"
          value="10h-11h"
          disabled
        >
          10h-11h <br />
          <span>Đã đặt</span>
        </button>';
}else{
   echo' <button
          class="col time btn btn-primary p-2 m-2 btn-outline-none"
          id="time2"
          value="10h-11h"
        >
          10h-11h <br />
          <span>Còn trống</span>
        </button>';
}


// 11-12h
if($am11_12){
   echo' <button
          class="col time btn btn-info p-2 m-2 btn-outline-none"
          id="time2"
          value="11h-12h"
          disabled
        >
          11h-12h <br />
          <span>Đã đặt</span>
        </button>';
}else{
   echo' <button
          class="col time btn btn-primary p-2 m-2 btn-outline-none"
          id="time2"
          value="11h-12h"
        >
          11h-12h <br />
          <span>Còn trống</span>
        </button>';
}
?>
 <h4 class="col-12 center m-0">Buổi chiều</h4>
<?php
// 12-13h
if($pm12_13){
   echo' <button
          class="col time btn btn-info p-2 m-2 btn-outline-none"
          id="time2"
          value="12h-13h"
          disabled
        >
          12h-13h <br />
          <span>Đã đặt</span>
        </button>';
}else{
   echo' <button
          class="col time btn btn-primary p-2 m-2 btn-outline-none"
          id="time2"
          value="12h-13h"
        >
          12h-13h <br />
          <span>Còn trống</span>
        </button>';
}
// 13-14h
if($pm13_14){
   echo' <button
          class="col time btn btn-info p-2 m-2 btn-outline-none"
          id="time2"
          value="13h-14h"
          disabled
        >
          13h-14h <br />
          <span>Đã đặt</span>
        </button>';
}else{
   echo' <button
          class="col time btn btn-primary p-2 m-2 btn-outline-none"
          id="time2"
          value="13h-14h"
        >
          13h-14h <br />
          <span>Còn trống</span>
        </button>';
}
// 14-15h
if($pm14_15){
   echo' <button
          class="col time btn btn-info p-2 m-2 btn-outline-none"
          id="time2"
          value="14h-15h"
          disabled
        >
          14h-15h <br />
          <span>Đã đặt</span>
        </button>';
}else{
   echo' <button
          class="col time btn btn-primary p-2 m-2 btn-outline-none"
          id="time2"
          value="14h-15h"
        >
          14h-15h <br />
          <span>Còn trống</span>
        </button>';
}
//15-16h
if($pm15_16){
   echo' <button
          class="col time btn btn-info p-2 m-2 btn-outline-none"
          id="time2"
          value="15h-16h"
          disabled
        >
          15h-16h <br />
          <span>Đã đặt</span>
        </button>';
}else{
   echo' <button
          class="col time btn btn-primary p-2 m-2 btn-outline-none"
          id="time2"
          value="15h-16h"
        >
          15h-16h <br />
          <span>Còn trống</span>
        </button>';
}
// 16-17h
if($pm16_17){
   echo' <button
          class="col time btn btn-info p-2 m-2 btn-outline-none"
          id="time2"
          value="16h-17h"
          disabled
        >
          16h-17h <br />
          <span>Đã đặt</span>
        </button>';
}else{
   echo' <button
          class="col time btn btn-primary p-2 m-2 btn-outline-none"
          id="time2"
          value="16h-17h"
        >
          16h-17h <br />
          <span>Còn trống</span>
        </button>';
}


?>

</div>
<!-- list time -->

<!-- chọn khoa -->
<div class="row">
    <div class="col-8 pb-3">      
          <h4 class="m-0"><label for="">Chọn khoa :</label></h4>
          <select  class="khoadt form-control p-0" size="3" name="" id="">
          <?php
             $listkhoa=json_decode($data['listkhoa'],true);
      foreach($listkhoa as $item =>$r){
          echo'<option class="p-2" value="'.$r["id"].'">'.$r["Name"].'</option>';
      }
    ?>
          </select>
        </div>

        <!-- chọn bác sĩ -->
        <div class="col-4 pb-3">

        <h4 class="m-0"> <label for="">Chọn bác sĩ :  </label></h4>
        <select class="bacsi form-control p-0"  size="3"  name="" id="">
       <option class="p-2" value="3"> NGUYỄN QUANG BẢY </option>
  <option class="p-2" value="4"> ĐỖ GIA TUYỂN </option>
        </select>
        </div>
</div>
<div class="row">
<!-- chọn chuyên ngành -->
        <div class="chuyennganh col-8">
       <h4 class="m-0"><label class='' for=''>Chọn mục khám: </label></h4>
  <div class="form-check ">
    <input
      class=""
      name=""
      type="checkbox"
      id="chuyennganh_0"
      value="300000"
    />
    <label class="" for="chuyennganh_0"
      >Xét nghiệm huyết học : 300000 VND </label
    >
  </div>
  <div class="form-check">
    <input
      class=""
      name=""
      type="checkbox"
      id="chuyennganh_1"
      value="400000"
    />
    <label class="" for="chuyennganh_1"
      >Xét nghiệm nước tiểu 10 thông số : 400000 VND  </label
    >
  </div>
  <div class="form-check">
    <input
      class=""
      name=""
      type="checkbox"
      id="chuyennganh_2"
      value="200000"/>
    <label class="" for="chuyennganh_2"
      >Xét nghiệm sinh hóa : 200000 VND  </label
    >
  </div>         
    </div>
    <!-- tong tien -->
    <div class="total col-4">
      <h4 class="m-0"><label for="">Tổng tiền : </label></h4>
      <div class="d-flex">
          <input class="form-control " name="tongtien" type="text" value="" disabled >
          
         <div class="d-flex mx-2 " style="align-items: center;">VND</div>
        </div>
      
    </div>
    </div>
<!-- btn datlich -->
     <div class="form-group row ">
         <div class="mx-auto">
            <button class="btndatlich btn btn-success">Đặt lịch</button>
        </div>
     </div>
      <!--  -->
</div>


<script>
    //dat lich
  var data_chuyennganh = [];
  var totalPoints = 0;
  $("#datlich .khoadt option").each(function () {
    $(this).on("click", function () {
      let idkhoa = this.value;

      // get list doctor
      $.post(
        "../Ajax/GetListDoctor",
        { idkhoa: idkhoa, dbbacsi: "doctor" },
        function (data) {
          data = JSON.parse(data);
          let x = "";
          for (i in data) {
            x +=
              "<option class='p-2' value='" +
              data[i].id +
              "' > " +
              data[i].Name +
              " </option>";
          }

          $("#datlich .bacsi").html(x);
        }
      );
      //

      //get list chuyen nganh

      $("#datlich .chuyennganh").load(
        "../Ajax/GetListSpeciality",
        {
          idkhoa: idkhoa,
          dbchuyennganh: "speciality",
        },
        function (data) {
          data = JSON.parse(data);
          let x = "  <h4><label class='' for=''>Chọn mục khám: </label></h4>";
          for (i in data) {
            x +=
              ' <div class="form-check ">' +
              `<input class="" name="" type="checkbox" id="${data[i].id}" value="${data[i].Price}"> ` +
              `<label class="" for="${data[i].id}">${data[i].Name} : ${data[i].Price} VND  </label>` +
              "</div>";
          }
          $("#datlich .chuyennganh").html(x);
          totalPoints = 0;
          AddEvenClick();
          // datlich();
        }
      );

      //
    });
  });

  datlich();

  // tinh tong tien
  var id_speciality = [];
  function AddEvenClick() {
    $("#datlich .chuyennganh .form-check  input[type='checkbox']").each(
      function () {
           id_speciality = [];
        $(this).on("click", "", function () {
          if ($(this).is(":checked")) {
            totalPoints += parseInt($(this).val());
            let count = id_speciality.push($(this).attr("id"));
          } else {
            totalPoints -= parseInt($(this).val());
            let count = id_speciality.pop($(this).attr("id"));
          }
          // console.log(totalPoints);
          $("#datlich .total div input").val(totalPoints);
        });
      }
    );
  }

  AddEvenClick();

  function datlich() {
    const date = document.getElementById("date");
    var khung_gio;
    var id_department;
    var id_doctor;

    // get value moctime
    const moc_time = document.getElementsByClassName("time");

    for (var i in moc_time) {
      moc_time[i].onclick = function () {
        khung_gio = this.value;
      };
    }

    // btn dat lich
    $("#datlich .btndatlich").on("click", function () {
      if (!date.checkValidity()) {
        alert("Chọn hôm nay hoặc ngày mai");
        return;
      }
      if ($.trim(khung_gio) == "") {
        alert("Chưa chọn khung giờ");
        return;
      }

      id_department = $("#datlich .khoadt option:checked").val();
      id_doctor = $("#datlich .bacsi option:checked").val();
      // id_speciality = $("#datlich .chuyennganh checkbox:checked").attr("id");
      // alert(id_department + "--" + id_doctor + "--" + id_speciality);
      console.log(id_speciality);
      console.log(khung_gio);
      console.log(date.value);

      // post
      $.post(
        "../User/nguoidungdatlich",
        {
          id_user : <?=$data1['id']?>,
          id_department: id_department,
          id_doctor: id_doctor,
          id_speciality: id_speciality,
          data_date: date.value,
          data_time: khung_gio,
        },
        function (str) {
          alert(str);
          location.reload();
        }
      );

      //
    });
  }
  //
</script>

