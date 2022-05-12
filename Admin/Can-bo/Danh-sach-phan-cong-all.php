<div class="content">
    <div class="tieu-de">
        <h3 class="font">Bảng phân công nhiệm vụ</h3>
    </div>
    <div class="noi-dung-100">
        <form action="index.php?a=tim-can-bo-trong-phan-cong" method='POST' autocomplete="off">
            <button style="" class=" btn btn-outline-success" type="submit" name="tim" value="tim">Tìm</button>

            <a href="index.php?a=danh-sach-phan-cong-hien-tai" class="">
                <button type="button" class="btn btn-info" style="color:#fff">
                    Danh sách phân công hiện tại
                </button>
            </a>

            <input class="form-control mr-sm-2" type="number" placeholder="Nhập ID cán bộ" aria-label="Search"
                style="width:200px; float:left;margin-right:5px" name="ten">
        </form>

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
                    $delete="index.php?a=xoa-phan-cong&PC_ID=".$PC_ID;
                    echo'           
                    <tr>
                    <th  scope="row">'.$i.'</th>
                    <th  scope="row">'.$CB_ID.'</th>                   
                    <td >'.$CB_HOTEN.'</td>
                    <td > '.$NV_TEN.'</td>
                    <td >'.$L_TEN.'</td>
                    <td >'.$NAMHOC.'</td>
                    
                </tr>
                
                    ';
                    $i++;
                }
                               
                ?>


            </tbody>
        </table>

    </div>
</div>