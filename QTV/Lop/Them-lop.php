<div class="content">
    <div class="tieu-de">
        <h3 class="font">Thêm lớp</h3>
    </div>
    <div class=noi-dung-70>
        <form action="index.php?b=insert-lop" method="POST" autocomplete="off">
            <fieldset disabled>
                <div class="form-group row ">
                    <label for="inputText3" class="col-sm-2 col-form-label">ID lớp</label>
                    <div class="col-sm-10 pad20px">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Tên lớp</label>
                <div class="col-sm-10 pad20px">
                    <input type="text" class="form-control " id="inputText3" placeholder="VD: nhóm 1" name="tenlop"
                        required>
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
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success width100" name="luu" value="luu">Lưu</button>
                    <button type="reset" class="btn btn-warning width100">Nhập lại</button>
                    <a href="index.php?b=danh-sach-lop"> <button type="button"
                            class=" trang btn btn-info text-white">Danh
                            sách</button></a>
                </div>
            </div>
        </form>
    </div>
    <div style="height:25px"></div>
</div>