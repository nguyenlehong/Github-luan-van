<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách cán bộ</h3>
    </div>
    <div class="noi-dung-100">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th class="width-table-250" scope="col">Họ & tên</th>
                    <th class="width-table-200" scope="col">Ngày sinh</th>
                    <th class="width-table-200" scope="col">Giới tính</th>
                    <th class="width-table-200" scope="col">SĐT</th>
                    <th scope="col">Email</th>
                    <th scope="col">Thao thác</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($list_can_bo as $canbo) {
                    extract($canbo);
                echo '
                <tr>
                <th scope="row">'.$i.'</th>
                <td class="width-table-250">'.$CB_HOTEN.'</td>
                <td class="width-table-200"> '.$CB_NGAYSINH.'</td>
                <td class="width-table-200"> '.$CB_PHAI.'</td>

                <td class="width-table-200">0'.$CB_SDT.'</td>
                <td>'.$CB_EMAIL.'</td>
                <td>
                    <a href="" class="gachchan2">
                        <button type=" reset" class="btn btn-success">
                            <ion-icon name="pencil-outline"></ion-icon>
                        </button>
                    </a>
                    <a href="" class="gachchan2">
                        <button type=" reset" class="btn btn-danger">
                            <ion-icon name="trash-outline"></ion-icon>
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
</div>