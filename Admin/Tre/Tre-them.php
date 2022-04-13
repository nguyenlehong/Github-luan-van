<div class="content">
    <div class="tieu-de">
        <h3 class="font">Thêm trẻ </h3>
    </div>
    <div class=noi-dung-80>
        <form action="index.php?a=insert-tre" method="POST">
            <fieldset disabled>
                <div class="form-group row ">
                    <label for="inputText3" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10 pad20px">
                        <input type="text" class="form-control" id="" placeholder="" name="id">
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">Họ & tên</label>
                <div class="col-sm-10 pad20px">
                    <input type="text" class="form-control " id="inputText3" placeholder="VD: Lê Hồng Nguyên" name="ten"
                        required>

                </div>
            </div>
            <div class="form-group row">
                <label for="inputDate3" class="col-sm-2 col-form-label">Ngày sinh</label>
                <div class="col-sm-10 pad20px">
                    <input type="date" class="form-control " id="inputText3" placeholder="" name="ngaysinh" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputDate3" class="col-sm-2 col-form-label">Giới tính</label>
                <div class="col-sm-10 pad20px">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="phai" id="exampleRadios1" value="Nam"
                            checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Nam
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="phai" id="exampleRadios2" value="Nữ">
                        <label class="form-check-label" for="exampleRadios2">
                            Nữ
                        </label>
                    </div>
                </div>
            </div>
            <div class=" form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">Địa Chỉ</label>
                <div class="col-sm-10 pad20px">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="diachi"
                        required></textarea>
                </div>
            </div>

    </div>
</div>
<div class="content">
    <div class="tieu-de">
        <h3 class="font">Thông tin phụ huynh </h3>
    </div>
    <div class=noi-dung-80b>
        <div class="formphuynh1">
            <div class="form-group pad20px">
                <label for="formGroupExampleInput">Họ tên mẹ</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="hotenme"
                    required>
            </div>
            <div class="form-group pad20px">
                <label for="formGroupExampleInput">Số điện thoại</label>
                <input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="sdtme"
                    required>
            </div>
            <div class="form-group pad20px">
                <label for="formGroupExampleInput">Nghề nghiệp</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="nnme">
            </div>
        </div>
    </div>
    <div class="noi-dung-80b height400">
        <div class="formphuynh2">
            <div class="form-group pad20px">
                <label for="formGroupExampleInput">Họ tên cha</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="hotencha"
                    required>
            </div>
            <div class="form-group pad20px">
                <label for="formGroupExampleInput">Số điện thoại</label>
                <input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="sdtcha"
                    required>
            </div>
            <div class="form-group pad20px">
                <label for="formGroupExampleInput">Nghề nghiệp</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="nncha">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-success width100" value="luu" name="luu">Tiếp theo</button>
                <button type="reset" class="btn btn-danger">Nhập lại</button>
                <a href="index.php?a=danh-sach-tre"> <button type="button" class=" trang btn btn-info text-white">Danh
                        sách</button></a>
            </div>
        </div>
        </form>
    </div>