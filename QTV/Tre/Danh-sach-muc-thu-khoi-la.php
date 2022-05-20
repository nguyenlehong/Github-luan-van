<div class="content">
    <div class="tieu-de">
        <h3 class="font">Khối lá</h3>
    </div>
    <div class="noi-dung-70">
        <a href="index.php?b=danh-sach-muc-thu-khoi-mam">
            <button class=" btn btn-outline-success my-2 my-sm-0" type="button">Khối mầm</button>
        </a>
        <a href="index.php?b=danh-sach-muc-thu-khoi-choi">
            <button class="btn btn-outline-success my-2 my-sm-0" type="button">Khối chồi</button>
        </a>
        <a href="index.php?b=danh-sach-muc-thu-khoi-la">
            <button class="btn btn-outline-success my-2 my-sm-0" type="button">Khối lá</button>
        </a>
        <a href="index.php?b=danh-sach-muc-thu-tat-ca">
            <button class="btn btn-outline-info my-2 my-sm-0" type="button">Tất cả mức thu</button>
        </a>
        <table class="table table-hover">
            <tbody>
                <tr class="table-primary">
                    <th class="width-table-50" scope="col">STT</th>
                    <th class="width-table-150" scope="col">Năm học</th>

                    <th class="width-table-300" scope="col">Khoản thu</th>
                    <th class="width-table-250" scope="col">Số tiền</th>
                    <th scope="col">Thao thác</th>
                </tr>
                <?php
                $i=1;
                $tong_tien_la=0;
                foreach ( $list_muc_thu_la as $tien) {
                    extract($tien);
                    $tong_tien_la=$tong_tien_la + $SOTIEN;
                    $spformat_tongtien_la =number_format($tong_tien_la,0, '.', '.');
                    $spformat_tien_la =number_format($SOTIEN,0, '.', '.');
                    echo '
                    <tr>
                        <td>'.$i.'</td>
                        <td>'.$TENNAMHOC.'</td>                
                        <td>'.$KT_NOIDUNG.'</td>
                        <td>'.$spformat_tien_la.'đ</td>
                        <td></td>
                    </tr>                                            
                    ';
                }   
                $i++;         
                ?>
                <tr>
                    <td></td>
                    <td colspan="3">
                        <h5>Tổng số tiền: <?=$spformat_tongtien_la ?>đ</h5>
                    </td>

                </tr>

            </tbody>
        </table>

    </div>
</div>