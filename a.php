<?php 
$TwoDay =time()+(1*24*60*60);  
$MaxDate = date('Y-m-d',$TwoDay); 
$DateNow= date('Y-m-d');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
  </head>
  <body>

    <div class="datlich">
      <div class="form-group row container-fluid">
        <div class="col-4 choseDate mx-auto">
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
            onclick="dl_checkdate()"
            onkeyup="dl_checkdate()"
          
          />
          <button type="submit" name="btnChoseDate" class="col-2 mx-3 btn btn-success">
            Xem lịch
          </button>
        </form>
        </div>
        </div>
      

      <div class="container-fluid row moctime">
        <h4 class="col-12 center">Buổi sáng</h4>
        <br />
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

     
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script>
      var data_date;
      var data_time;

      var date = document.getElementById("date");
      
     
      function dl_checkdate(){
         if (!date.checkValidity()) {
          alert("Chọn hôm nay hoặc ngày mai");
          return;
        }
        
      }
      var moc_time = document.getElementsByClassName("time");
      for (var i in moc_time) {
        moc_time[i].onclick = function () {
          console.log(this.id);
          data_time = this.value;
          console.log(data_time);
          data_date = date.value;
          console.log(data_date);
        };
      }

      // var btnSave = document.getElementById("btnSave");
     

      $("#btnSave").on("click", function (event) {
        
        if (!date.checkValidity()) {
          alert("Bạn chưa chọn đúng ngày");
          return;
        }
      
     

         $.post('datlich.php',
         {data_date:data_date,
          data_time:data_time
        },function(str){
         alert(str);
         location.reload();
        });
        // $.ajax("datlich.php", { data_time: data_time, data_date: data_date });
      });
    </script>
  </body>
</html>
