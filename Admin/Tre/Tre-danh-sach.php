<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách trẻ </h3>
    </div>
    <div class="noi-dung-100">
        <table class="table table-hover">

            <tbody>
                <tr class="table-primary">
                    <th scope="col" class="width-table-50">STT</th>
                    <th scope="col" class="width-table-50">ID</th>

                    <th scope="col" class="width-table-250">Họ & tên</th>
                    <th scope="col" class="width-table-150">Ngày sinh</th>
                    <th scope="col" class="width-table-100">Giới tính</th>
                    <th scope="col" class="width-table-250">Họ tên cha </th>
                    <th scope="col" class="width-table-250">Họ tên mẹ </th>
                    <th scope="col" class="width-table-150">SĐT mẹ</th>
                    <th scope="col" class="width-table-250">Thao thác</th>
                </tr>
                <?php
                $i=1;
                foreach ($list_all_tre as $tre) {
                   extract($tre);
                   $time = strtotime($T_NGAYSINH);
                   $xoa="index.php?a=xoa-tre&T_ID=".$T_ID;
                   $capnhat="index.php?a=cap-nhat-thong-tin-tre&T_ID=".$T_ID;
                   $lenlop="index.php?a=len-lop-tre&T_ID=".$T_ID;
                   echo '
                   <tr>
                   <th scope="row">'.$i.'</th>
                   <td scope="row">'.$T_ID.'</td>

                   <td class="width-table-300">'.$T_HOTEN.'</td>
                   <td> '.date("d/m/Y", $time).'</td>
                   <td>'.$T_PHAI.'</td>
                   <td>'.$T_HTCHA.'</td>
                   <td>'.$T_HTME.'</td>
                   <td>0'.$T_SDTME.'</td>
                   <td>
                   <a href="'.$lenlop.'" class="gachchan2">
                           <button type="button" class="btn btn-primary">
                               <ion-icon name="pencil-outline"></ion-icon>
                           </button>
                           </a>
                       <a href="'.$capnhat.'" class="gachchan2">
                           <button type="button" class="btn btn-success">
                               <ion-icon name="pencil-outline"></ion-icon>
                           </button>
                           </a>
                           <a href="'.$xoa.'" class="gachchan2">
                               <button type="button" class="btn btn-danger">
                               <ion-icon name="trash-outline"></ion-icon>
                               </button>
                           </a>

                       </>
                   </td>
               </tr>            
                   ';
                    $i++;
                }
                
                ?>

            </tbody>
        </table>

    </div>
</div>