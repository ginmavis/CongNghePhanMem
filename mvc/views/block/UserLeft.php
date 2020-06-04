<div class="layoutSidenav_nav" id="layoutSidenav_nav">
         <nav class="sb-sidenav ">
            <div class="sb-sidenav-brand mb-4">
               <a class="navbar-brand" href="#">Vinh Clinic</a>
               <hr style="background-color: white;">
            </div>

            <div class="sb-sidenav-menu">
               <ul class="navbar-nav ml-auto">
                 
               <?php
                
                if(isset($_GET['id'])){
                if ($_GET['id']=='1') {
                   echo'<li class="nav-item p-2 active ">
                     <a class="nav-link" href="./info?id=1" id="account">Thông tin cá nhân<span class="sr-only">(current)</span></a>
                  </li>';
               
                }
               echo $_GET['id'];
               }else{
                   echo'<li class="nav-item p-2 ">
                     <a class="nav-link" href="./info?id=1" id="account">Thông tin cá nhân<span class="sr-only">(current)</span></a>
                  </li>';
                }
               
                
                ?>     
                
                  <li class="nav-item  p-2">
                    <a class="nav-link" href="./datlich" id="datlich">Đặt lịch  <span class="sr-only">(current)</span></a>
                 </li>  
                 <li class="nav-item  p-2">
                    <a class="nav-link" href="./lichdadat" id="lichdadat">Lịch đã đặt  <span class="sr-only">(current)</span></a>
                 </li>
                  <li class="nav-item p-2">
                     <a class="nav-link" href="./lichsukham" id="lichsukham"> Lịch sử khám <span class="sr-only">(current)</span></a>
                  </li>
               
                  
                  <li class="nav-item p-2">
                    <a class="nav-link" href="./doimk" id="doimk"> Đổi mật khẩu <span class="sr-only">(current)</span></a>
                 </li> 
                 <li class="nav-item p-2">
                    <a class="nav-link" href="../mvc/views/block/logout.php">Đăng xuất <span class="sr-only">(current)</span></a>
                 </li>

               </ul>
            </div>
            <hr style="background-color: white;">
            <div class="sb-sidenav-footer">
               <div class="small">Logged in as:</div>
               <?php 
               echo $_SESSION['UserData']['Fullname'];
               ?>
            </div>
         </nav>
      </div>