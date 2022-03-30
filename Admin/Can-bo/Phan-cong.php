<div class="content">
    <div class="tieu-de">
        <h3 class="font">Phân công nhiệm vụ</h3>
    </div>
    <div class=noi-dung-70>
        <form>

            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Năm học</label>
                <div class="col-sm-10 pad20px">
                    <select class="custom-select form-control" name="NAMHOC">
                        <?php
                            foreach ($list_nam_hoc as $namhoc) {
                            extract($namhoc);
                            echo '
                            <option value="'.$NAMHOC.'">'.$NAMHOC.'</option>                            
                            ';
                        }
                        ?>

                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Lớp</label>
                <div class="col-sm-10 pad20px">
                    <select class="custom-select form-control">

                        <option value="1">Lớp mầm 1</option>
                        <option value="2">Lớp mầm 2</option>
                        <option value="3">Lớp mầm 3</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Cán bộ</label>
                <div class="col-sm-10 pad20px">
                    <select class="custom-select form-control" name="CD_ID">
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
                    <select class="custom-select form-control" name="NV_ID">

                        <?php
                            foreach ($list_nhiem_vu as $nhiemvu) {
                            extract($nhiemvu);
                            echo '
                            <option value="'.$NV_ID.'">'.$NV_TEN.'</option>                            
                            ';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success width100">Lưu</button>
                    <button type="reset" class="btn btn-danger">Nhập lại</button>
                    <a href="index.php?a=danh-sach-phan-cong"> <button type="button"
                            class=" trang btn btn-info text-white">Danh
                            sách</button></a>
                </div>
            </div>
        </form>
    </div>
</div>