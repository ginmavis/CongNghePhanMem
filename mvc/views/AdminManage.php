<?php 
if(isset($_SESSION['AdminLogin'])){
if($_SESSION['AdminLogin']== "true"){
?>
<?php 
require_once "./mvc/views/block/navadmin.php";
?>

      <div class="wrapper">
      <?php require_once "./mvc/views/block/navleft.php" ?>
   <div class="content">
        
      </div>


   </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./public/js/manage.js"></script>
  </body>
</html>
<?php }
else{
  echo "Login admin that bai";
}
}else{echo "fail";}
?>