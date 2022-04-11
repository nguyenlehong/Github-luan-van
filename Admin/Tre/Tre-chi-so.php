<div class="content">
    <div class="tieu-de">
        <h3 class="font">Cập nhật chỉ số phát triển </h3>
    </div>
    <div class=noi-dung-80b>
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
                <input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="chieucao">
            </div>
            <div class="form-group pad20px">
                <label for="formGroupExampleInput">Cân nặng(kg)</label>
                <input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="cannang">
            </div>

        </div>
    </div>
    <div class="noi-dung-80b height500">
        <div class="formphuynh2">



            <div class="form-group ">
                <label for="formGroupExampleInput">Họ & tên</label>
                <div class="alert alert-success" role="alert">
                    <strong>
                        Lê Hồng Nguên
                        <input type="hidden" name="T_ID" value="<?=$T_ID?>">
                    </strong>
                </div>
            </div>

            <div class="form-group ">
                <label for="formGroupExampleInput">Ngày sinh</label>
                <div class="alert alert-success" role="alert">
                    <strong>04/01/2000</strong>
                </div>
            </div>
            <div class="form-group ">
                <label for="formGroupExampleInput">Giới tính</label>
                <div class="alert alert-success" role="alert">
                    <strong> Nam</strong>
                </div>
            </div>
            <div class="form-group ">
                <label for="formGroupExampleInput">Địa chỉ</label>
                <div class="alert alert-success" role="alert">
                    <strong> Cay lậy tiền giang</strong>
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