<div class='content1'>
            <div class='container-fluid'>
               <div class=' header '>
                  <div>
                     <h4> Lịch đã đặt
                        <button class='btn btn-success' data-toggle='modal' data-target='#addnew'><i class='fa fa-plus-circle'></i></button>
                        <button class='btn btn-primary'> <i class='	fa fa-download'></i></button>
                     </h4>
                  </div>

                  <div>
                     <span>Xem thông tin lịch đã đặt</span>

                  </div>
                  <div style='display: flex;justify-content: center;'>
                     <hr style='width: 20%; border: 1px solid #2980b9;'>
                  </div>
                  <div>
                     <span>Ngày khám :</span>
                  </div>
                  <div style='display: flex;justify-content: center;'>
                     <input type='date' class='form-control' style='width: 400px;'>
                     <button class="btn btn-success ml-3  px-3"> Search</button>
                  </div>

               </div><br>

               <div class='main'>
                  <div class='row   '>
                     <div class='col' style='font-size: 1.3rem;'>
                        Show <select class='custom-select' style='width: 15%;'>
                                  <option value='10'>10</option>
                                  <option value='25'>25</option>
                                  <option value='50'>50</option>
                                  <option value='100'>100</option>
                              </select> entries

                     </div>
                     <div class='col d-flex justify-content-end  '  style='font-size: 1.3rem;' >
                        <span class='d-flex align-items-center pr-3'> Search</span>
                        <input type='text'   class='form-control' style='width: 40%;'>
                      
                     </div>
                  </div>



                  <br>
                  <!-- table -->
                  <div class='row '>
                     <table class='table table-striped '>
                        <thead>
                           <tr>

                              <th>STT</th>
                              <th>Tên bệnh nhân</th>
                              <th>Ngày sinh</th>
                              <th>Ngày khám</th>
                              <th>Khoa khám</th>
                              <th>Mục khám</th>
                              <th>Tên bác sĩ</th>
                              <th>Giờ khám</th>
                              <th>Mã khám</th>
                              <th>Tùy chọn</th>
                           </tr>

                        </thead>
                        <tbody>
                           <tr>
                              <td>1</td>
                              <td>Nguyễn Văn A</td>
                              <td>27/2/1967</td>
                                <td>4/20/2020 </td>
                              <td>Khám tai mũi họng </td>
                              <td>Khám điều trị các bệnh về tai</td>
                              <td>PHẠM GIA KHẢI</td>
                              <td>6h-7h</td>
                              <td>12319898 </td>
                              <td>
                                 <a href=''>
                                    <i class='fas fa-edit'></i>
                                 </a>
                                &nbsp;&nbsp;
                                 <a href=''>
                                    <i class='fas fa-trash-alt'></i>
                                 </a>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>


            <!-- moldal -->
            <div class='modal fade' id='addnew'>
               <div class='modal-dialog modal-xl modal-dialog-centered'>
                  <div class='modal-content'>

                     <!-- Modal Header -->
                     <div class='modal-header'>
                        <div>
                           <h2 class='modal-title'>Nhập thông tin giảng viên</h2>
                           <span>(*) Yêu cầu thông tin chính xác</span>
                        </div>

                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                     </div>

                     <!-- Modal body -->
                     <div class='modal-body'>

                        <div class='row m-3 p-3'>

                           <div class='col-3'>

                              <label for=''>Mã giảng viên :</label>
                              <input class='form-control mb-3' type='text'>
                              <label for=''>Số điện thoại :</label>
                              <input class='form-control mb-3' type='number'>
                              <label for=''>Email :</label>
                              <input class='form-control mb-3' type='email'>
                           </div>
                           <div class='col-3'>

                              <label for=''>Họ tên:</label>
                              <input class='form-control mb-3' type='text'>
                              <label for=''>Mật khẩu :</label>
                              <input class='form-control mb-2' type='password'>
                              <!-- checked -->
                              <div class='form-check'>
                                 <label class='form-check-label'>
                                            <input type='checkbox' class='form-check-input' value=''>Hiện mật khẩu
                                          </label>
                              </div>
                           </div>
                           <div class='col-6 '>
                              <label for=''>Giới thiệu</label>
                              <textarea class='form-control is-valid mb-3' placeholder='Giới thiệu có thể bỏ trống' rows='4' id='comment'></textarea>
                              <label for=''>Ghi chú </label>
                              <textarea class='form-control is-valid' placeholder='Ghi chú có thể bỏ trống' rows='4' id='comment'></textarea>

                           </div>

                        </div>

                     </div>

                     <!-- Modal footer -->
                     <div class='modal-footer'>
                        <button type='button' class='btn btn-info' data-dismiss='modal'> Xong</button>
                     </div>

                  </div>
               </div>


            </div>

         </div>
