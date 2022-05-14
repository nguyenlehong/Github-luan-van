<?php
if(is_array($phancong)){
    extract($phancong);
}
?><div class="content">
    <div class="tieu-de">
        <h3 class="font">Cập nhật phân công</h3>
    </div>
    <div class=noi-dung-70>
        <form action="index.php?a=luu-cap-nhat-phan-cong" method="POST">
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Lớp</label>
                <div class="col-sm-10 pad20px">
                    <select class="custom-select form-control">
                        <option value="">
                            <?=$L_TEN?>
                        </option>


                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Cán bộ</label>
                <div class="col-sm-10 pad20px">
                    <select class="custom-select form-control" name="CB_ID">
                        <?php
                            foreach ($list_can_bo as $canbo) {
                            extract($canbo);
                            echo '
                            <option value="'.$CB_ID.'">'.$CB_HOTEN.'</option>                            
                            ';
                        }
                        ?>

                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Nhiệm vụ</label>
                <div class="col-sm-10 pad20px">
                    <select class="custom-select form-control">
                        <option value="">
                            <?=$NV_TEN?>
                        </option>

                    </select>
                </div>
            </div>
            <input type="hidden" name="PC_ID" value="<?=$PC_ID?>">
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success width100" name="luu" value="luu">Lưu</button>
                    <button type=" reset" class="btn btn-danger">Nhập lại</button>
                    <a href="index.php?a=danh-sach-phan-cong-hien-tai"> <button type="button"
                            class=" trang btn btn-info text-white">Danh
                            sách</button></a>
                </div>
            </div>
        </form>
    </div>
    <div style="height:25px"></div>
</div>