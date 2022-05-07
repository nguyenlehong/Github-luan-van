<div class="content">
    <div class="tieu-de">

        <h3 class="font"> Danh sách trẻ <?=$ten_lop?></h3>
    </div>
    <div class="noi-dung-100">
        <table class="table table-hover">

            <tbody>
                <tr class="table-primary">
                    <th scope="col" class="width-table-50">STT</th>
                    <th scope="col" class="width-table-50">ID</th>

                    <th scope="col" class="width-table-200">Họ & tên</th>
                    <th scope="col" class="width-table-100">Ngày sinh</th>
                    <th scope="col" class="width-table-100">Giới tính</th>

                    <th scope="col" class="width-table-250">Địa chỉ</th>
                    <th scope="col" class="width-table-150">Thao thác</th>
                </tr>
                <?php
                $i=1;
                foreach ($list_tre as $tre) {
                   extract($tre);
                   $time = strtotime($T_NGAYSINH);
                   $xoa="T_ID=".$T_ID;
                   $chi_so_tre="Xu-ly.php?b=cap-nhat-thong-tin-ct-trecb&T_ID=".$T_ID;
                   echo '
                   <tr>
                   <th scope="row">'.$i.'</th>
                   <th scope="row">'.$T_ID.'</th>

                   <td>'.$T_HOTEN.'</td>
                   <td> '.date("d/m/Y", $time).'</td>
                   <td>'.$T_PHAI.'</td>
                  
                   <td>'.$T_DIACHI.'</td>
                   <td>
                       <a href="'.$chi_so_tre.'" class="gachchan2">
                           <button type="button" class="btn btn-success">
                               <ion-icon name="pencil-outline"></ion-icon>
                           </button>
                           <a href="'.$xoa.'" class="gachchan2">
                               <button type=""button class="btn btn-danger">
                               <ion-icon name="trash-outline"></ion-icon>
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