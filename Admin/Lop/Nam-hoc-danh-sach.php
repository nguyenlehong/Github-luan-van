<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách năm học</h3>
    </div>
    <div class=noi-dung-100>
        <table class="table table-hover">

            <tbody>
                <tr class="table-primary">
                    <th scope="col" class="width-table-50">STT</th>
                    <th scope="col" class="width-table-150">Năm học</th>
                    <th scope="col" class="width-table-150">Bắt đầu HK1</th>
                    <th scope="col" class="width-table-150">Kết thúc HK1 </th>
                    <th scope="col" class="width-table-150">Bắt đầu HK2 </th>
                    <th scope="col" class="width-table-150">Kết thúc HK2</th>
                    <th scope="col" class="width-table-150">Trạng Thái</th>
                    <th scope="col" class="width-table-150">Thao thác</th>
                </tr>
                <?php
                $i=1;
                foreach ($list_nam_hoc as $namhoc) {
                    extract($namhoc);
                    $capnhat="index.php?a=cap-nhat-hien-an-nam&NAMHOC=".$NAMHOC;
                    $bd1 = strtotime($BDHK1);
                    $kt1 = strtotime($KTHK1);
                    $bd2 = strtotime($BDHK2);
                    $kt2 = strtotime($KTHK2);
                    if($TRANGTHAI=='danghoatdong'){
                        $TRANGTHAI1 ="Đang hoạt động";
                    }else{
                        $TRANGTHAI0 ="Đang hoạt động";
                        
                    }

                    echo '
                    <tr>
                            <td>'.$i.'</td>
                            <td>'.$TENNAMHOC.'</td>
                            <td>'.date("d/m/Y", $bd1).'</td>
                            <td>'.date("d/m/Y", $kt1).'</td>
                            <td>'.date("d/m/Y", $bd2).'</td>
                            <td>'.date("d/m/Y", $kt2).'</td>
                            <td>'.$TRANGTHAI1.'</td>
                            
                            <td> <a href="'.$capnhat.'" class="gachchand">
                                    <button type="button" class="btn btn-success">
                                    <ion-icon name="pencil-outline"></ion-icon>
                                    </button>
                                </a></td>
                        </tr>
                           
                    ';
                    $i++;
                    }
                    
                    ?>


            </tbody>
        </table>
    </div>
    <div style="height:25px">
    </div>
</div>