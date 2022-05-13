<div class="content">
    <div class="tieu-de">
        <h3 class="font">Thêm năm học</h3>
    </div>
    <div class=noi-dung-70>
        <form action="index.php?a=insert-nam-hoc" method="POST" autocomplete="off">
            <!-- <fieldset disabled>
                <div class="form-group row ">
                    <label for="inputText3" class="col-sm-2 col-form-label">Mã năm</label>
                    <div class="col-sm-10 pad20px">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>
            </fieldset> -->
            <div class="form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">ID Năm học</label>
                <div class="col-sm-10 pad20px">
                    <input type="number" class="form-control " id="inputText3" placeholder="VD: 20212022" name="namhoc">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">Tên năm học</label>
                <div class="col-sm-10 pad20px">
                    <input type="text" class="form-control " id="inputText3" name="ten">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">Ngày bắt đầu HK1</label>
                <div class="col-sm-10 pad20px">
                    <input type="date" class="form-control " id="inputText3" name="bdhk1">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">Ngày kết thúc HK1</label>
                <div class="col-sm-10 pad20px">
                    <input type="date" class="form-control " id="inputText3" name="kthk1">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">Ngày bắt đầu HK2</label>
                <div class="col-sm-10 pad20px">
                    <input type="date" class="form-control " id="inputText3" name="bdhk2">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">Ngày bắt đầu HK2</label>
                <div class="col-sm-10 pad20px">
                    <input type="date" class="form-control " id="inputText3" name="kthk2">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success width100" value="luu" name="luu">Lưu</button>
                    <button type="reset" class="btn btn-danger">Nhập lại</button>
                    <a href="index.php?a=danh-sach-nam-hoc"> <button type="button"
                            class=" trang btn btn-info text-white">Danh
                            sách</button></a>
                </div>
            </div>
        </form>
    </div>
    <div style="height:25px"></div>
</div>