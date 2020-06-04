<?php 
if(isset($_SESSION['UserLogin'])){
if($_SESSION['UserLogin']== "true"){
?>
<?php 
require_once "./mvc/views/block/UserNav.php";

?>

      <div class="wrapper">
      <?php require_once "./mvc/views/block/UserLeft.php" ?>
   <div class="content">
    <?php 
    require "./mvc/views/pages/user/".$data['page'].".php";
    ?> 
      </div>


   </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../public/js/UserManage.js"></script>
  </body>
</html>
<?php }
else{
  echo "Login User that bai";
}
}else{echo "fail";}
?>