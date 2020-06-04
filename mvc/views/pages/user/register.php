<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <!-- css , icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
    <link rel="stylesheet" href="../public/css/materpage.css" />
  </head>
  <body>
    <div class="container-fluid signup ">
      <div class=" container form-signup shadow-sm bg-white p-4 mb-4">
        <div class="form-signup-header"><a href="../">Phòng khám đa khoa Vinh</a></div>
        <div class="form-signup-body">
        <form action="../User/KhachHangDangKi" method="post">
        <input type="number" name="phone" id="phone"  class="form-control my-3" placeholder="Phone">       
        <div id="messageUn">  </div>
        <input type="password" name="password" class="form-control my-3" placeholder="Mật khẩu">   
        <input type="text" name="name" class="form-control my-3" placeholder="Họ tên">
        <input type="Email" name="email" class="form-control my-3" placeholder="Email">
        <input type="date" name="birth" class="form-control my-3" placeholder="Ngày sinh">
        <input type="text" name="address" class="form-control my-3" placeholder="Địa chỉ">
   
<button type="submit" name="btnregister" class="btn btn-danger my-2"> Đăng kí </button>
        </form>
        <?php if(isset($data['result'])) { ?>
        <h4 style="color:red;text-align: center;">
        <?php
        if($data["result"]  == "true"){
          echo "Đăng kí thành công";
        }
        else
        echo "Đăng kí thất bại";
        ?>
            </h4>
      <?php } ?>
        </div>        
        <div class="form-signup-footer mt-4">
     
          <div class="icon d-flex justify-content-center">
         <div class="mx-3 ">
            <i class="fab fa-facebook-f "></i>
         </div>
         <div class="mx-3">
          <i class="fab fa-twitter"></i>
       </div>
       <div class="mx-3">
        <i class="fab fa-google"></i>
     </div>
  
          </div>
         <div class="pt-2" > <a href="../User/login">Đăng nhập</a></div>
          <div><a href="">Quên mật khẩu ?</a></div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="../public/js/user.js"></script>
  </body>
</html>
