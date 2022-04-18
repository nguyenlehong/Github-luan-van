<div class="content">
    <div class="tieu-de">
        <h3 class="font">Thêm loại món</h3>
        <div class="timkiem">
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        </div>
        <div class="btntimkiem">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class=noi-dung-70>
        <form action="index.php?a=insert-loai-mon" method="POST">
            <fieldset disabled>
                <div class="form-group row ">
                    <label for="inputText3" class="col-sm-2 col-form-label">ID loại</label>
                    <div class="col-sm-10 pad20px">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Tên loại</label>
                <div class="col-sm-10 pad20px">
                    <input type="text" class="form-control " id="inputText3" placeholder="Món chính" name="tenloaimon">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success width100" name="luu" value="luu">Lưu</button>
                    <button type="reset" class="btn btn-danger">Nhập lại</button>
                    <a href="index.php?a=danh-sach-loai-mon"> <button type="button"
                            class=" trang btn btn-info text-white">Danh
                            sách</button></a>

                </div>
            </div>
        </form>
    </div>
</div>