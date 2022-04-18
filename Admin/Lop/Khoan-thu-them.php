<div class="content">
    <div class="tieu-de">
        <h3 class="font">Khoản thu</h3>
    </div>
    <div class=noi-dung-80>
        <form action="index.php?a=them-khoan-thu" method="POST">
            <fieldset disabled>
                <div class="form-group row ">
                    <label for="inputText3" class="col-sm-2 col-form-label">ID khoản thu</label>
                    <div class="col-sm-10 pad20px">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">Tên khoản thu</label>
                <div class="col-sm-10 pad20px">
                    <input type="text" class="form-control " name="ten" id="inputText3" placeholder="VD: Học phí "
                        required>
                </div>
            </div>

            <div class=" form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">Mô tả</label>
                <div class="col-sm-10 pad20px">
                    <textarea class="form-control" name="mota" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success width100" value="luu" name="luu">Lưu</button>
                    <button type=" reset" class="btn btn-danger">Nhập lại</button>
                    <a href="index.php?a=danh-sach-khoan-thu"> <button type="button"
                            class=" trang btn btn-info text-white">Danh
                            sách</button></a>
                </div>
            </div>
        </form>
    </div>
</div>

</form>
</div>
</div>