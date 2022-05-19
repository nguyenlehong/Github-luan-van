<div class="content">
    <div class="tieu-de">
        <h3 class="font">Khoản thu</h3>
    </div>
    <div class=noi-dung-80>
        <form action="index.php?b=insert-khoan-thu" method="POST" autocomplete="off">
            <fieldset disabled>
                <div class="form-group row ">
                    <label for="inputText3" class="col-sm-2 col-form-label">ID khoản thu</label>
                    <div class="col-sm-10 pad20px">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">Nội dung khoản thu</label>
                <div class="col-sm-10 pad20px">
                    <input type="text" class="form-control " name="noidung" id="inputText3" placeholder="VD: Học phí "
                        required>
                </div>
            </div>
            <div class=" form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">Ghi chú</label>
                <div class="col-sm-10 pad20px">
                    <textarea class="form-control" name="ghichu" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success width100" value="luu" name="luu">Lưu</button>
                    <button type=" reset" class="btn btn-warning width100">Nhập lại</button>
                    <a href="index.php?b=danh-sach-khoan-thu"> <button type="button"
                            class=" trang btn btn-info text-white ">Danh
                            sách</button></a>

                </div>
            </div>
        </form>
    </div>
    <div style="height:30px"></div>
</div>

</form>

</div>
</div>