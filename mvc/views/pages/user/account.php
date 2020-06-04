    <?php
   
    $data=  $_SESSION['UserData'];
   
    $pass = $_SESSION["UserPass"];
    
    ?>
<div class="profile">
        <div class="row header  d-flex">
            <div class="col-3 a p-0">
               <div >
                    <div >
                    <img  id="avata-img" src="../public/images/profile1.jpg "   alt=" ">
                </div>

                <p>
                    <h3><?=$data["Fullname"]?> </h3>
                    Người dùng</p>
            </div>
               </div>
            <div class="col-9 b p-0 ">
                <img src="../public/images/profile2.jpg "  alt=" ">
            </div>
        </div>
<!--  -->

        <div class="center p-3 ">
            <div class="row ">
                <div class="col-3 ">
                    <div id="a">
                        Thông tin cá nhân
                    </div>
                </div>



                <div class="col-9 ">
                    <div id="b">
                        <div class="row ">
                            <div class="col ">
                                <label for=" ">Họ & tên :</label>
                                <input type="text " value="<?=$data['Fullname']?>"  class="form-control mb-3 ">
                                <label for=" ">Email :</label>
                                <input type="email"  value="<?=$data['Email']?>" class="form-control ">
                            </div>
                            <div class="col ">
                                <label for=" "> Ngày sinh :</label>
                                <input type="date" value="<?=$data['Age']?>" class="form-control mb-3 ">


                                <div class="row ">
                                    <div class="col ">
                                        <label for=" ">Mật khẩu:</label>
                                        <input type="password" id="pass" value="<?= $pass?>"   class="form-control ">


                                    </div>
                                    <div class="col ">
                                        <label for=" ">Số điện thoại:</label>
                                        <input type="number" value="<?=$data['Phone']?>" class="form-control mb-2 ">


                                    </div>

                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                    <input type="checkbox" id="showpass"  class="form-check-input" value="">Hiện mật khẩu
                                    </label>
                                </div>

                            </div>

                        </div>
                        <label for=" ">Địa chỉ : </label>
                        <textarea class="form-control is-valid "  placeholder="" rows="3 " id="comment "><?=$data['Address']?></textarea>
                        <div class="row " style="justify-content: center; ">
                            <button class="btn btn-primary btn-lg mt-3 "> <i class="fa fa-check-circle-o "></i>  Save</button>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    <div>

    </div>
    </div>

    <script>
        $(document).ready(function () {
    $("#showpass").on("click",function(){
        if(this.checked){
            $("#pass").attr("type","text");
        }else{
            $("#pass").attr("type","password");
        }

    });            
        });

    </script>