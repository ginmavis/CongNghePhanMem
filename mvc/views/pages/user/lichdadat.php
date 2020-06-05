

            <div id="lichdadat" class=' container-fluid   pt-2'>
              <!--  -->
              <div class="row">
            <div class='col-12 title text-center'>             
                     <h2> Lịch đã đặt
                      
                        <button class='btn icon btn-primary'> <i class='	fa fa-download'></i></button>
                     </h2>
                   
                     <div style="font-size: 1.2rem;">Xem thông tin lịch đã đặt</div >
                    <hr class= "mx-auto">
                     <label class="pb-1">Ngày khám :</label>
                  
                   <div class="d-flex justify-content-center">
                     <input type='date' class='form-control' style='width: 400px;'>
                     <button class="btn btn-success btnxemlich ml-3  px-3"> Xem lịch</button>
                     </div>
                  </div>
              </div>
               
                  <div class='row py-3'>
                     <div class='col' style='font-size: 1rem;'>
                        Show <select class='custom-select' style='width: 15%;'>
                                  <option value='10'>10</option>
                                  <option value='25'>25</option>
                                  <option value='50'>50</option>
                                  <option value='100'>100</option>
                              </select> entries

                     </div>
                     <div class='col d-flex justify-content-end  '  style='font-size: 1rem;' >
                        <span class='d-flex align-items-center pr-3'> Search</span>
                        <input type='text'   class='form-control' style='width: 40%;'>
                      
                     </div>
                  </div>
               

                  <!-- table -->
                  <div class='row  main '>
                     <table class='table table-striped '>
                        <thead>
                           <tr>

                              <th>ID</th>
                              <th>Tên bệnh nhân</th>
                              <th>Tên bác sĩ</th>
                              <th>Tên khoa</th>
                              <th>Mục khám</th>
                              <th>Giá tiền </th>
                              <th>Ngày khám</th>
                              <th>Giờ khám</th>
                              <th>Mã khám</th>
                              <th>Tùy chọn</th>
                           </tr>

                        </thead>
                        <tbody>
                              <?php
                               $data = json_decode($data['lichdadat'],true);
                             foreach($data as $item =>$r){
                                 echo"<tr>
                                 <td>$r[0]</td>
                                 <td>$r[1]</td>
                                 <td>$r[2]</td>
                                 <td>$r[3]</td>
                                 <td>$r[4]</td>
                                 <td>$r[5]</td>
                                 <td>$r[6]</td>
                                 <td>$r[7]</td>
                                 <td>$r[8]</td>  
                                 <td>
                                 
                               
                                 <a href='' id='$r[0]' class='remove'>
                                    <i class='fas fa-trash-alt'></i>
                                 </a>
                              </td>
                          
                                 </tr>";
                             }
                              ?>
                        
                        </tbody>
                     </table>
                  </div>
               </div>
            

          


<script>
$(document).ready(function () {
   xemlich();
   xoalich();
});

function xemlich(){
$('#lichdadat .title .btnxemlich').on('click',function(){
   let a =$('#lichdadat .title input').val();
   if(a==""){
      alert("Bạn chưa chọn ngày");
      return;
   };
   $.post('../User/lichdadat_search_date',{
      date:a,

   },function(data){
      data=JSON.parse(data);
      let arr ="";
      for(i in data){
         arr += 
         `<tr>
            <td>${data[i][0]}</td>
            <td>${data[i][1]}</td>
            <td>${data[i][2]}</td>
            <td>${data[i][3]}</td>
            <td>${data[i][4]}</td>
            <td>${data[i][5]}</td>
            <td>${data[i][6]}</td>
            <td>${data[i][7]}</td>
            <td>${data[i][8]}</td>  
            <td>
           
            <a href='' id='${data[i][0]}' class='remove'>
               <i class='fas fa-trash-alt'></i>
            </a>
         </td>
            </tr>`;
   
      }
     $('#lichdadat .main table tbody').html(arr);
   });
});
}

function xoalich(){
   $('#lichdadat .main table tbody .remove').each(function () {
     $(this).on('click',function(){
let id_remove = $(this).attr('id');
      $.post('../User/lichdadat_remove',{id_remove:id_remove},function(data){
        
         if(data){
            location.reload();
         }
      });
     });
      
     });
}
</script>