<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách cán bộ</h3>
    </div>
    <div class="noi-dung-100">
        <table class="table table-hover">
            <a href="xu-ly-in.php?b=in-can-bo"> <button type="submit" class="btn btn-info width100 ">In
                </button></a>
            <tbody>
                <tr class="table-primary">
                    <th class="width-table-50" scope="col">STT</th>
                    <th class="width-table-50" scope="col">ID</th>

                    <th class="width-table-200" scope="col">Họ & tên</th>
                    <th class="width-table-150" scope="col">Ngày sinh</th>
                    <th class="width-table-100" scope="col">Giới tính</th>
                    <th class="width-table-150" scope="col">SĐT</th>
                    <th class="width-table-200" scope="col">Email</th>
                    <th class="width-table-250" scope="col">Địa chỉ</th>
                    <!-- <th scope="col">Thao thác</th> -->

                </tr>


                <?php
                $i = 1;
                foreach ($list_can_bo as $canbo) {
                    extract($canbo);
                   
                    $time = strtotime($CB_NGAYSINH);
                echo '
                <tr>
                <th scope="row">'.$i.'</th>
                <td>'.$CB_ID.'</td>

                <td>'.$CB_HOTEN.'</td>
                <td>'.date("d/m/Y", $time).'</td>

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
    <div style="height:20px"></div>
</div>

<!-- <td>
    <a href="'.$capnhatcanbo.'" class="gachchan2">
        <button type=" reset" class="btn btn-success">
            <ion-icon name="pencil-outline"></ion-icon>
        </button>
    </a>

    <a href="'.$xoacanbo.'" class="gachchan2">
        <button type="submit" class="btn btn-danger">
            <ion-icon name="trash-outline"></ion-icon>
        </button>
    </a>

</td>
$capnhatcanbo="index.php?a=update-can-bo&CB_ID=".$CB_ID ;
$xoacanbo="index.php?a=delete-can-bo&CB_ID=".$CB_ID;

sửa và xóa cán bộ ở trang admin(hieu pho)
-->