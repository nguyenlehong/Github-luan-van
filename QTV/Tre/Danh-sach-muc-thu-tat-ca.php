<div class="content ">
    <div class="tieu-de">
        <h3 class="font">Tất cả mức thu</h3>
    </div>
    <div class="noi-dung-70">

        <form action="index.php?b=danh-sach-muc-thu-theo-nam" method='POST' autocomplete="off">
            <button style="" class=" btn btn-outline-success" type="submit" name="tim" value="tim">Tìm</button>

            <a href="index.php?b=danh-sach-muc-thu-khoi-mam" class="">
                <button type="button" class="btn btn-info" style="color:#fff">
                    Khối mầm
                </button>
            </a>
            <a href="index.php?b=danh-sach-muc-thu-khoi-choi" class="">
                <button type="button" class="btn btn-info" style="color:#fff">
                    Khối chồi
                </button>
            </a>
            <a href="index.php?b=danh-sach-muc-thu-khoi-la" class="">
                <button type="button" class="btn btn-info" style="color:#fff">
                    Khối lá
                </button>
            </a>

            <select class="form-control" id="exampleFormControlSelect1" style="width:200px; float:left;margin-right:5px"
                name="NAMHOC">
                <?php
                     foreach ($list_nam_hoc as $namhoc) {
                        extract($namhoc);
                        echo '
                            <option value="'.$NAMHOC.'">'.$TENNAMHOC.'</option>                            
                            ';
                        }
                        ?>
            </select>
        </form>

        <table class="table table-hover">
            <tbody>
                <tr class="table-primary">
                    <th class="width-table-50" scope="col">STT</th>
                    <th class="width-table-150" scope="col">Năm học</th>

                    <th class="width-table-300" scope="col">Khoản thu</th>
                    <th class="width-table-250" scope="col">Số tiền</th>
                    <th class="width-table-250" scope="col">Khối</th>


                </tr>
                <?php
                $i=1;
               
                foreach ( $list_muc_thu as $tien) {
                    extract($tien);
                  
                    $spformat_tien =number_format($SOTIEN,0, '.', '.');
                    echo '
                    <tr>
                        <td>'.$i.'</td>
                        <td>'.$TENNAMHOC.'</td>                
                        <td>'.$KT_NOIDUNG.'</td>
                        <td>'. $spformat_tien.'</td>
                        <td>'. $KHOI.'</td>

                       
                    </tr>                                            
                
                    ';
                    $i++;
                }   
                         
                ?>
                <tr>
                    <td></td>


                </tr>

            </tbody>
        </table>

    </div>

</div>