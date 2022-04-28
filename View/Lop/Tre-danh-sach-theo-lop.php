<div class="content">
    <div class="tieu-de">

        <h3 class="font"> Danh sách trẻ <?=$ten_lop?></h3>
    </div>
    <div class="noi-dung-100">
        <table class="table table-hover">

            <tbody>
                <tr class="table-primary">
                    <th scope="col" class="width-table-50">STT</th>
                    <th scope="col" class="width-table-200">Họ & tên</th>
                    <th scope="col" class="width-table-150">Ngày sinh</th>
                    <th scope="col" class="width-table-150">Giới tính</th>
                    <th scope="col" class="width-table-250">Họ tên cha </th>
                    <th scope="col" class="width-table-150">SĐT cha </th>
                    <th scope="col" class="width-table-250">Họ tên mẹ </th>
                    <th scope="col" class="width-table-150">SĐT mẹ </th>
                    <th scope="col" class="width-table-400">Địa chỉ</th>

                </tr>
                <?php
                $i=1;
                foreach ($list_tre as $tre) {
                   extract($tre);
                   $chitiettre="index.php?a=chi-tiet-thong-tin-tre&T_ID=".$T_ID;
                   $chi_so_tre="index.php?a=cap-nhat-chi-so-tre&T_ID=".$T_ID;
                   echo '
                   <tr>
                   <th scope="row">'.$i.'</th>
                   <td class="width-table-300">'.$T_HOTEN.'</td>
                   <td> '.$T_NGAYSINH.'</td>
                   <td>'.$T_PHAI.'</td>
                   <td>'.$T_HTCHA.'</td>
                   <td>'.$T_SDTCHA.'</td>
                   <td>'.$T_HTME.'</td>
                   <td>'.$T_SDTME.'</td>
                   <td>'.$T_DIACHI.'</td>
                   
               </tr>
              
                   '; $i++;
                }
                ?>

            </tbody>
        </table>

    </div>
</div>