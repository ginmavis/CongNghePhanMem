
<?php 
$TwoDay =time()+(1*24*60*60);  
$MaxDate = date('Y-m-d',$TwoDay); 
$DateNow = date('Y-m-d');
?>
 <div id="datlich">

  <div class="form-group  container-fluid">
<!-- chọn ngày -->
<div class="row">
 <div class="col-5 choseDate mx-auto">
          <h2 class="" style="text-align: center;">Đặt lịch</h2>
          <label for="">Chọn ngày (Hôm nay hoặc mai) :</label>
          <form action="" method="post">
          <div class="d-flex">
          <input
            type="date"
            id="date"
            name="date"
            class="form-control col-9"
            min="<?=$DateNow?>"
            max="<?=$MaxDate ?>"
            value="<?=$DateNow?>"
            required
           
          
          />
          <button type="submit" name="btnChoseDate" class="col-2 mx-3 btn btn-success">
            Xem lịch
          </button>
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
$qr = "SELECT * FROM test where ngay='". $date ."'";

if(isset($_POST['btnChoseDate'])){
  $qr = "SELECT * FROM test where ngay='". $_POST['date'] ."'";

}
 
$result = mysqli_query($conn,$qr);
$am7_8=false;
$am8_9=false;
$am9_10=false;

    while($row = mysqli_fetch_assoc($result)){
        if($row['khung_gio'] == '7h-8h') $am7_8 = true;
        if($row['khung_gio'] == '8h-9h')$am8_9 =true;
        if($row['khung_gio'] == '9h-10h') $am9_10=true;
  }
 



if($am7_8){
  echo'<button
          class="col time btn btn-primary p-2 m-2 btn-outline-none"
          disabled
          id="1"
          value="7h-8h"
        >
          7h-8h <br />
          <span>Đã đặt</span>
        </button>';
}else{
   echo'<button
          class="col time btn btn-primary p-2 m-2 btn-outline-none"
          
          id="1"
          value="7h-8h"
        >
          7h-8h <br />
          <span>Còn trống</span>
        </button>';
}

if($am8_9){
  echo'  <button
          class="col time btn btn-primary p-2 m-2 btn-outline-none"
          id="2"
          value="8h-9h"
          disabled
          >
          8h-9h <br />
          <span>Đã đặt</span>
        </button>';
}else{
  echo'  <button
          class="col time btn btn-primary p-2 m-2 btn-outline-none"
          id="2"
          value="8h-9h"
        >
          8h-9h <br />
          <span>Còn trống</span>
        </button>';
}

if($am9_10){
   echo' <button
          class="col time btn btn-primary p-2 m-2 btn-outline-none"
          id="3"
          value="9h-10h"
          disabled
        >
          9h-10h <br />
          <span>Đã đặt</span>
        </button>';
}else{
   echo' <button
          class="col time btn btn-primary p-2 m-2 btn-outline-none"
          id="3"
          value="9h-10h"
        >
          9h-10h <br />
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
       <option class="p-2" value=""> NGUYỄN QUANG BẢY </option>
  <option class="p-2" value=""> ĐỖ GIA TUYỂN </option>
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

