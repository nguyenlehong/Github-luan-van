<div class="content">
    <div class="tieu-de">
        <h3 class="font">Bảng phân công nhiệm vụ</h3>
    </div>
    <div class="noi-dung-100">
        <table class="table table-hover">
            <tbody>
                <tr class="table-primary">
                    <th class="width-table-100" scope="col">STT</th>
                    <th class="width-table-250" scope="col">Họ & tên</th>
                    <th class="width-table-250" scope="col">Nhiệm vụ</th>
                    <th class="width-table-250" scope="col">Lớp</th>
                    <th class="width-table-250" scope="col">Năm học</th>

                </tr>


                <?php
                $i = 1;
                foreach ($list_phan_cong as $phancong) {
                    extract($phancong);
                    $delete="index.php?a=xoa-phan-cong&PC_ID=".$PC_ID;
                    echo'           
                    <tr>
                    <th class="width-table-100" scope="row">'.$i.'</th>
                    
                    <td class="width-table-300">'.$CB_HOTEN.'</td>
                    <td class="width-table-250"> '.$NV_TEN.'</td>
                    <td class="width-table-250">'.$L_TEN.'</td>
                    <td class="width-table-250">'.$NAMHOC.'</td>
                   
                </tr>
                
                    ';
                    $i++;
                }
                               
                ?>


            </tbody>
        </table>

    </div>
</div>