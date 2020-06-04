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
    <div class="container-fluid login ">
      <div class=" container form-login shadow-sm bg-white pt-4 ">
        <div class="form-login-header"><a href="../">Phòng khám đa khoa Vinh</a></div>
        <div class="form-login-body">
          <form action="../User/CheckLogin" method="POST">
            <input type="number" class="form-control my-4" name="phone" id="phone"  placeholder="Số điện thoại"/>
            <input type="password" class="form-control my-4" name="password" id="password" placeholder="Mật khẩu">
            <button name="btnlogin" type="submit" class="btn btn-danger ">Đăng nhập</button>
          </form>
          <?php  if(isset($data['user'])) { ?>
          <?php    if($data['user']== "true" ){
                echo "<h4>Login thành công</h4>";
              }else{
                  echo "<h4 class='py-1 text-center text-danger'>Sai thông tin đăng nhập</h4>";
              }
            ?>  
            <?php } ?>
        </div>
        <div class="form-login-footer ">
          <p class="text-primary pt-2">OR</p>
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
         <p class="pt-3" >Chưa có tài khoản ? <a href="../User/register">Đăng kí</a></p>
          <p class=""><a href=""> Quên mật  khẩu ?</a></p>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
  </body>
</html>
