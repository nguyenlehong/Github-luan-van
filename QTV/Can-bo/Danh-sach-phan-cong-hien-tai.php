<div class="content">
    <div class="tieu-de">
        <h3 class="font">Bảng phân công nhiệm vụ

        </h3>
    </div>
    <div class="noi-dung-100">
        <a href="index.php?b=danh-sach-phan-cong" class="">
            <button type="button" class="btn btn-info" style="color:#fff">
                Danh sách phân công
            </button>
        </a>
        <table class="table table-hover">
            <tbody>
                <tr class="table-primary">
                    <th class="width-table-100" scope="col">STT</th>
                    <th class="width-table-100" scope="col">ID</th>
                    <th class="width-table-250" scope="col">Họ & tên</th>
                    <th class="width-table-250" scope="col">Nhiệm vụ</th>
                    <th class="width-table-200" scope="col">Lớp</th>
                    <th class="width-table-200" scope="col">Năm học</th>

                </tr>


                <?php
                $i = 1;
                foreach ($list_phan_cong as $phancong) {
                    extract($phancong);
                 

                    echo'           
                    <tr>
                    <th  scope="row">'.$i.'</th>
                    <th  scope="row">'.$CB_ID.'</th>                   
                    <td >'.$CB_HOTEN.'</td>
                    <td > '.$NV_TEN.'</td>
                    <td >'.$L_TEN.'</td>
                    <td >'.$TENNAMHOC.'</td>
                   
                  
                </tr>
                
                    ';
                    $i++;
                }
                               
                ?>


            </tbody>
        </table>

    </div>
</div>
<!-- <td>
    <a href="'.$update.'" class="gachchan2">
        <button type="button" class="btn btn-success">
            <ion-icon name="pencil-outline"></ion-icon>
        </button>
    </a>
    <a href="'.$delete.'" class="gachchan2">
        <button type="button" class="btn btn-danger">
            <ion-icon name="trash-outline"></ion-icon>
        </button>
    </a>
</td>
$delete="index.php?a=xoa-phan-cong&PC_ID=".$PC_ID;
$update="index.php?a=update-cong&PC_ID=".$PC_ID; -->