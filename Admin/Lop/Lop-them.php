<div class="content">
    <div class="tieu-de">
        <h3 class="font">Thêm lớp</h3>
    </div>
    <div class=noi-dung-70>
        <form action="index.php?a=insert-lop" method="POST">
            <fieldset disabled>
                <div class="form-group row ">
                    <label for="inputText3" class="col-sm-2 col-form-label">Mã lớp</label>
                    <div class="col-sm-10 pad20px">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Tên lớp</label>
                <div class="col-sm-10 pad20px">
                    <input type="text" class="form-control " id="inputText3" placeholder="VD: Mầm 1" name="tenlop">
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
                            <option value="'.$NAMHOC.'">'.$NAMHOC.'</option>                            
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
                    <button type="submit" class="btn btn-success width100">Lưu</button>
                    <button type="reset" class="btn btn-danger">Nhập lại</button>

                </div>
            </div>
        </form>
    </div>
</div>