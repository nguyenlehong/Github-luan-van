<div class="content">
    <div class="tieu-de">
        <h3 class="font">Cập nhật chỉ số phát triển </h3>
    </div>
    <div class=noi-dung-80b>
        <form action="index.php?a=insert-chi-so" method="POST">
            <div class="formphuynh1">
                <div class="form-group pad20px">
                    <label for="formGroupExampleInput">Chọn tháng</label>
                    <select class=" form-control" name="THANG">
                        <!-- <?php
                            foreach ($list_thang as $thang) {
                            extract($thang);
                            echo '
                            <option value="'.$THANG.'">'.$THANG.'</option>                            
                            ';
                        }
                        ?> -->
                        <option value="THANG 1">Tháng 1</option>
                        <option value="THANG 2">Tháng 2</option>
                        <option value="THANG 3">Tháng 3</option>
                        <option value="THANG 4">Tháng 4</option>
                        <option value="THANG 5">Tháng 5</option>
                        <option value="THANG 6">Tháng 6</option>
                        <option value="THANG 7">Tháng 7</option>
                        <option value="THANG 8">Tháng 8</option>
                        <option value="THANG 9">Tháng 9</option>
                        <option value="THANG 10">Tháng 10</option>
                        <option value="THANG 11">Tháng 11</option>
                        <option value="THANG 12">Tháng 12</option>


                    </select>

                </div>

                <div class="form-group pad20px">
                    <label for="formGroupExampleInput">Chiều cao(cm)</label>
                    <input type="number" step="0.1" class="form-control" id="formGroupExampleInput" placeholder="90.5"
                        name="chieucao" required>
                </div>
                <div class="form-group pad20px">
                    <label for="formGroupExampleInput">Cân nặng(kg)</label>
                    <input type="number" step="0.1" class="form-control" id="formGroupExampleInput" placeholder="20.8"
                        name="cannang" required>
                </div>
            </div>
    </div>
    <div class="noi-dung-80b height500">
        <?php
        if(is_array($chi_tiet))
            extract($chi_tiet);
        
        ?>
        <div class="formphuynh2">

            <div class="form-group ">
                <label for="formGroupExampleInput">Họ & tên</label>
                <div class="alert alert-success" role="alert">
                    <strong>
                        <?=$T_HOTEN?>
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
        </form>
    </div>