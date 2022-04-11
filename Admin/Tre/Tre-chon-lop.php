<div class="content">
    <div class="tieu-de">
        <h3 class="font">Cập nhật lớp </h3>
    </div>
    <div class=noi-dung-80b>
        <div class="formphuynh1">
            <form action="index.php?a=chon-lop" method="POST">
                <div class="form-group pad20px">
                    <label for="formGroupExampleInput">Chọn khối</label>
                    <select class=" form-control" name="KHOI">
                        <?php
                            foreach ($list_khoi as $khoi) {
                            extract($khoi);
                            echo '
                            <option value="'.$KHOI.'">'.$KHOI.'</option>                            
                            ';
                        }
                        ?>
                    </select>
            </form>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="loc-lop"
                value="loc-lop">Tìm</button>
        </div>
        <form action="index.php?a=insert-tre-chon-lop" method="POST">
            <div class="form-group ">
                <label for="formGroupExampleInput">Chọn lớp</label>
                <select multiple class="form-control" id="exampleFormControlSelect2" name="L_ID">
                    <?php
                            foreach ($list_lop as $lop) {
                            extract($lop);
                            echo '
                            <option name="L_ID" value="'.$L_ID.'">'.$L_TEN.'</option>       
                                            
                            ';
                        }
                        ?>

                </select>

            </div>


    </div>
</div>
<div class="noi-dung-80b height500">
    <div class="formphuynh2">

        <?php
        foreach ($list_tre as $tre) {
            extract($tre);
        }
        ?>
        <div class="form-group ">
            <label for="formGroupExampleInput">Họ & tên</label>
            <div class="alert alert-success" role="alert">
                <strong>
                    <?=$T_HOTEN?>
                    <?=$T_ID?>
                    <input type="hidden" name="T_ID" value="<?=$T_ID?>">
                </strong>
            </div>
        </div>

        <div class="form-group ">
            <label for="formGroupExampleInput">Ngày sinh</label>
            <div class="alert alert-success" role="alert">
                <strong> <?=$T_NGAYSINH?></strong>
            </div>
        </div>
        <div class="form-group ">
            <label for="formGroupExampleInput">Giới tính</label>
            <div class="alert alert-success" role="alert">
                <strong> <?=$T_PHAI?></strong>
            </div>
        </div>
        <div class="form-group ">
            <label for="formGroupExampleInput">Địa chỉ</label>
            <div class="alert alert-success" role="alert">
                <strong> <?=$T_DIACHI?></strong>
            </div>
        </div>

    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-success width100" value="luu" name="luu">Lưu</button>
            <button type="reset" class="btn btn-danger">Nhập lại</button>
        </div>
    </div>

</div>
</form>