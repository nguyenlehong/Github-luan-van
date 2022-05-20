<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách trẻ
            <?php
             echo $data['tong'];
            ?>
        </h3>
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
                    <th scope="col" class="width-table-250">Lớp</th>
                </tr>
                <?php
                $i=1;
                foreach ($list_all_tre as $tre) {
                   extract($tre);
                   $time = strtotime($T_NGAYSINH);
                 
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
                   '.$L_TEN.' '.$TENNAMHOC.'
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