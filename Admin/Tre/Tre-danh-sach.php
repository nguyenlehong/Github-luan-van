<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách trẻ</h3>
    </div>
    <div class="noi-dung-100">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" class="width-table-50">STT</th>
                    <th scope="col" class="width-table-250">Họ & tên</th>
                    <th scope="col" class="width-table-150">Ngày sinh</th>
                    <th scope="col" class="width-table-150">Giới tính</th>
                    <th scope="col" class="width-table-150">SĐT cha </th>
                    <th scope="col" class="width-table-150">SĐT mẹ </th>
                    <th scope="col" class="width-table-250">Lớp</th>
                    <th scope="col" class="width-table-250">Thao thác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=1;
                foreach ($list_all_tre as $tre) {
                   extract($tre);
                   echo '
                   <tr>
                   <th scope="row">'.$i.'</th>
                   <td class="width-table-300">'.$T_HOTEN.'</td>
                   <td> '.$T_NGAYSINH.'</td>
                   <td>'.$T_PHAI.'</td>
                   <td>'.$T_SDTCHA.'</td>
                   <td>'.$T_SDTME.'</td>
                   <td>'.$L_TEN.'</td>
                   <td>
                       <a href="" class="gachchan2">
                           <button type=" reset" class="btn btn-success">
                               <ion-icon name="pencil-outline"></ion-icon>
                           </button>
                           <a href="" class="gachchan2">
                               <button type=" reset" class="btn btn-primary">
                                   <ion-icon name="person-outline"></ion-icon>
                               </button>
                           </a>

                       </a>
                   </td>
               </tr>
              
                   '; $i++;
                }
                ?>

            </tbody>
        </table>

    </div>
</div>