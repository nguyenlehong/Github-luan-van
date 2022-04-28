<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách cán bộ</h3>
    </div>
    <div class="noi-dung-100">
        <table class="table table-hover">
            <tbody>
                <tr class="table-primary">
                    <th class="width-table-50" scope="col">STT</th>
                    <th class="width-table-100" scope="col">MSCB</th>
                    <th class="width-table-250" scope="col">Họ & tên</th>
                    <th class="width-table-150" scope="col">Ngày sinh</th>
                    <th class="width-table-150" scope="col">Giới tính</th>
                    <th class="width-table-150" scope="col">SĐT</th>
                    <th class="width-table-200" scope="col">Email</th>
                    <th class="width-table-350" scope="col">Địa chỉ</th>

                </tr>


                <?php
                $i = 1;
                foreach ($list_can_bo as $canbo) {
                    extract($canbo);
                    
                echo '
                <tr>
                <th scope="row">'.$i.'</th>
                <td>'.$CB_ID.'</td>
                <td>'.$CB_HOTEN.'</td>
                <td> '.$CB_NGAYSINH.'</td>
                <td> '.$CB_PHAI.'</td>
                <td>0'.$CB_SDT.'</td>
                <td>'.$CB_EMAIL.'</td>
                <td>'.$CB_DIACHI.'</td>

               
            </tr> ';  
            $i++;               
                }                   
                ?>

            </tbody>
        </table>
    </div>
</div>