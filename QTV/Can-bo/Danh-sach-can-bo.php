<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách cán bộ</h3>
    </div>
    <div class="noi-dung-100">
        <table class="table table-hover">
            <a href="index.php?b=them-can-bo"> <button type="button"
                    class=" trang btn btn-success width100 text-white">Thêm
                </button></a>
            <tbody>
                <tr class="table-primary">
                    <th class="width-table-50" scope="col">STT</th>
                    <th class="width-table-50" scope="col">ID</th>

                    <th class="width-table-200" scope="col">Họ & tên</th>
                    <th class="width-table-150" scope="col">Ngày sinh</th>
                    <th class="width-table-50" scope="col">Phái</th>
                    <th class="width-table-150" scope="col">SĐT</th>
                    <th class="width-table-200" scope="col">Email</th>
                    <th class="width-table-300" scope="col">Địa chỉ</th>
                    <th scope="col">Thao thác</th>

                </tr>


                <?php
                $i = 1;
                foreach ($list_can_bo as $canbo) {
                    extract($canbo);
                    $capnhatcanbo="index.php?b=update-can-bo&CB_ID=".$CB_ID ;
                   
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
                <td>
                    <a href="'.$capnhatcanbo.'" class="gachchan2">
                        <button type="button" class="btn btn-success">
                            <ion-icon name="pencil-outline"></ion-icon>
                        </button>
                    </a>
                   
                    
                   
                </td>
            </tr> ';  
            $i++;               
                }                   
                ?>

            </tbody>
        </table>

    </div>
    <div style="height:20px"></div>
</div>