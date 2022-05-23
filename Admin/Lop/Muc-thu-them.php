<div class="content">
    <div class="tieu-de">
        <h3 class="font">Mức thu</h3>
    </div>
    <div class=noi-dung-70>
        <?php
        if(isset($thongbao)&&($thongbao!=""))
            echo'<div class="alert alert-danger" role="alert">
                    '.$thongbao.'
                </div>
        ';
        ?>
        <form action="index.php?a=luu-them-muc-thu" method="POST" autocomplete="off">

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
                <label for="inputPassword3" class="col-sm-2 col-form-label">Năm học</label>
                <div class="col-sm-10 pad20px">
                    <select class="custom-select form-control" name="NAMHOC">
                        <?php
                            foreach ($list_nam_hoc as $namhoc) {
                            extract($namhoc);
                            echo '
                            <option value="'.$NAMHOC.'">'.$TENNAMHOC.'</option>                            
                            ';
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Khoản thu</label>
                <div class="col-sm-10 pad20px">
                    <select class="custom-select form-control" name="KHOANTHU">
                        <?php
                            foreach ($list_khoan_thu as $khoanthu) {
                            extract($khoanthu);
                            echo '
                            <option value="'.$KT_ID.'">'.$KT_NOIDUNG.'</option>                            
                            ';
                        }
                        ?>

                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Số tiền</label>
                <div class="col-sm-10 pad20px">
                    <input type="number" class="form-control " name="sotien" id="inputText3" placeholder="VD: 200.000đ "
                        required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success width100" name="luu" value="luu">Lưu</button>
                    <button type=" reset" class="btn btn-danger">Nhập lại</button>
                    <a href="index.php?a=danh-sach-muc-thu-khoi-mam"> <button type="button"
                            class=" trang btn btn-info text-white">Danh
                            sách</button></a>
                </div>
            </div>
        </form>
    </div>
    <div style="height:25px"></div>
</div>