<div class="content">
    <div class="tieu-de">
        <h3 class="font">Thêm trẻ </h3>
    </div>
    <div class=noi-dung-80>
        <form>
            <fieldset disabled>
                <div class="form-group row ">

                    <label for="inputText3" class="col-sm-2 col-form-label">Mã số</label>
                    <div class="col-sm-10 pad20px">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">Họ & tên</label>
                <div class="col-sm-10 pad20px">
                    <input type="text" class="form-control " id="inputText3" placeholder="VD: Lê Hồng Nguyên"
                        name="tentre">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputDate3" class="col-sm-2 col-form-label">Ngày sinh</label>
                <div class="col-sm-10 pad20px">
                    <input type="date" class="form-control " id="inputText3" placeholder="" name="ngaysinh">
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
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="diachi"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">Học lớp:</label>
                <div class="col-sm-10 pad20px">
                    <select class="custom-select form-control" name="LM_ID">
                        <option value="">lớp mần 1</option>
                        <option value="">lớp mần 2</option>
                    </select>
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
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="hotenme">
            </div>
            <div class="form-group pad20px">
                <label for="formGroupExampleInput">Số điện thoại</label>
                <input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="sdtme">
            </div>
            <div class="form-group pad20px">
                <label for="formGroupExampleInput">Nghề nghiệp</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="nnme">
            </div>
        </div>
    </div>
    <div class="noi-dung-80b height1000">
        <div class="formphuynh2">
            <div class="form-group pad20px">
                <label for="formGroupExampleInput">Họ tên cha</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="hotencha">
            </div>
            <div class="form-group pad20px">
                <label for="formGroupExampleInput">Số điện thoại</label>
                <input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="sdtcha">
            </div>
            <div class="form-group pad20px">
                <label for="formGroupExampleInput">Nghề nghiệp</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="nncha">
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