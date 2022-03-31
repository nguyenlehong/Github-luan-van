<div class="content">
    <div class="tieu-de">
        <h3 class="font">Thêm khối</h3>
    </div>
    <div class=noi-dung-70>
        <form action="index.php?a=insert-khoi" method="POST">
            <div class="form-group row">
                <fieldset disabled>
                    <div class="form-group row ">
                        <label for="inputText3" class="col-sm-2 col-form-label">ID khối</label>
                        <div class="col-sm-10 pad20px">
                            <input type="text" class="form-control" id="" placeholder="">
                        </div>
                    </div>
                </fieldset>
                <label for="inputPassword3" class="col-sm-2 col-form-label">Tên khối</label>
                <div class="col-sm-10 pad20px">
                    <input type="text" class="form-control " id="inputText3" placeholder="VD: Khối 1 tuổi" name="khoi">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success width100" value="luu" name="luu">Lưu</button>
                    <button type="reset" class="btn btn-danger">Nhập lại</button>
                    <a href="index.php?a=danh-sach-khoi"> <button type="button"
                            class=" trang btn btn-info text-white">Danh
                            sách</button></a>
                </div>
            </div>
        </form>
    </div>
</div>