<div class="content">
    <div class="tieu-de">
        <h3 class="font">Khối chồi</h3>
    </div>
    <div class="noi-dung-70">
        <a href="index.php?a=danh-sach-muc-thu-khoi-mam">
            <button class="btn btn-outline-success my-2 my-sm-0" type="button">Khối mầm</button>
        </a>
        <a href="index.php?a=danh-sach-muc-thu-khoi-choi">
            <button class="btn btn-outline-success my-2 my-sm-0" type="button">Khối chồi</button>
        </a>
        <a href="index.php?a=danh-sach-muc-thu-khoi-la">
            <button class="btn btn-outline-success my-2 my-sm-0" type="button">Khối lá</button>
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
                $tongtien=0;
                foreach ( $list_muc_thu_choi as $tien) {
                    extract($tien);
                    $tongtien=$tongtien + $SOTIEN;
                    $spformat_tongtien =number_format($tongtien,0, '.', '.');
                    $spformat_tien =number_format($SOTIEN,0, '.', '.');

                    echo '
                    <tr>
                        <td>'.$i.'</td>
                        <td>'.$TENNAMHOC.'</td>                
                        <td>'.$KT_NOIDUNG.'</td>
                        <td>'.$spformat_tien.'đ</td>
                        <td></td>
                    </tr>                                            
                    ';
                }   
                $i++;         
                ?>
                <tr>
                    <td></td>
                    <td colspan="3">
                        <h5>Tổng số tiền: <?=$spformat_tongtien?>đ</h5>
                    </td>

                </tr>

            </tbody>
        </table>

    </div>
</div>