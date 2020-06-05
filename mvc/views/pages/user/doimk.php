<?php 

$pass = $_SESSION["UserPass"];
$data=  $_SESSION['UserData'];

?>
<div id="doimk" class="container-fluid row  pt-2">
 <!-- title -->
<div class="col-12 title d-flex justify-content-center ">
    <h2>
    Đổi mật khẩu
    </h2>
</div>
 <!-- form  -->
<div class="col-6 form-doimk  mx-auto">

    
    <label for="" class="pt-3" >Mật khẩu mới :</label>

    <input class="form-control" id="pass1" type="password">

    <label for=""  class="pt-3">Nhập lại mật khẩu:</label>
    <input  class="form-control" id="pass2" type="password">

    <div id="thongbao" class="py-1" style="color: red;"></div>

    <input type="checkbox"   name="" id="showPass">
    <label for="showPass" class="p-2">Hiển thị mật khẩu
    </label>

<div class="p-3 text-center">
    <button  class="btn btn-success btnChange"> Xác nhận </button>
</div>


</div>

</div>

<script>
$(document).ready(function () {
xacnhan();

});

function xacnhan(){
   let mk1= '',mk2=''; 
//    check mk giong nhau
    $('#doimk .form-doimk #pass2').on('keyup',function(){
    mk2 = $('#doimk .form-doimk #pass2').val()
    mk1 = $('#doimk .form-doimk #pass1').val()
        
        if(mk1 !== mk2){
            $('#doimk .form-doimk #thongbao').html("Mật khẩu phải giống nhau");
        }else
        { $('#doimk .form-doimk #thongbao').html("")}
    
      })
// show pass
    $('#doimk .form-doimk #showPass[type="checkbox"]').on('click',function(){
        if(this.checked){
            $('#doimk .form-doimk #pass1').attr('type','text')
        $('#doimk .form-doimk #pass2').attr('type','text')
        }
        else{
             $('#doimk .form-doimk #pass1').attr('type','password')
        $('#doimk .form-doimk #pass2').attr('type','password')
        }
 });

    $('#doimk .form-doimk div .btnChange').on('click',function(){
        
        if(mk1=="" || mk2 == ""){
            alert("Bạn chưa nhập đầy đủ thông tin")
            return;
        }
         if(mk1 !== mk2){
           alert("Mật khẩu phải giống nhau");
           return;
        }
        $.post("../User/changePass",{
            id:<?=$data['id']?>,
            newPass:mk2
        },function(data){
            alert(data);
             window.open("../mvc/views/block/logout.php", "_self")
        });
     });


}

</script>
