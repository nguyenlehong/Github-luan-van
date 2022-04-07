<div class="content">
    <div class="tieu-de">
        <h3 class="font">Tạo thực đơn</h3>
    </div>
    <div class=noi-dung-80>
        <form action="index.php?a=insert-thuc-don" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Khối</label>
                <div class="col-sm-10 pad20px">
                    <select class="custom-select form-control" name="KHOI">

                        <?php
                            foreach ($list_khoi as $khoi) {
                            extract($khoi);
                            echo '
                            <option value="'.$KHOI.'">'.$KHOI.'</option>                            
                            ';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Buổi</label>
                <div class="col-sm-10 pad20px">
                    <select class="custom-select form-control" name="BUOI">

                        <?php
                            foreach ($list_buoi as $buoi) {
                            extract($buoi);
                            echo '
                            <option value="'.$BUOI.'">'.$BUOI.'</option>                            
                            ';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Thứ</label>
                <div class="col-sm-10 pad20px">
                    <select class="custom-select form-control" name="THU">

                        <?php
                            foreach ($list_thu as $thu) {
                            extract($thu);
                            echo '
                            <option value="'.$THU.'">'.$THU.'</option>                            
                            ';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Danh sách món ăn</label>
            </div>
            <?php
            foreach ($list_mon as $mon) {
                extract($mon);
                echo '
                <div class="form-check floatleft">
                <input class="form-check-input" type="checkbox" name="M_TEN[]" value="'.$M_TEN.'"  id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    '.$M_TEN.'
                </label>
            </div>
        
            ';
            }
            ?>

            <div class="form-group row clearleft">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success width100" value="luu" name="luu">Lưu</button>
                    <button type=" reset" class="btn btn-danger">Nhập lại</button>
                    <a href="index.php?a=danh-sach-thuc-don"> <button type="button"
                            class=" trang btn btn-info text-white">Danh
                            sách</button></a>
                </div>
            </div>
        </form>
    </div>
</div>