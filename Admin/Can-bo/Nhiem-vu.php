<div class="content">
    <div class="tieu-de">
        <h3 class="font">Nhiệm vụ</h3>
    </div>
    <div class=noi-dung-70>
        <form action="index.php?a=insert-nhiem-vu" method="POST">
            <fieldset disabled>
                <div class="form-group row ">
                    <label for="inputText3" class="col-sm-2 col-form-label">ID nhiệm vụ</label>
                    <div class="col-sm-10 pad20px">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Tên nhiệm vụ</label>
                <div class="col-sm-10 pad20px">
                    <input type="text" class="form-control " id="inputText3" placeholder="VD: bảo vệ" name="tennv">
                </div>
            </div>
            <div class=" form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Mô tả</label>
                <div class="col-sm-10 pad20px">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="motanv"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success width100" value="luu">Lưu</button>
                    <button type="reset" class="btn btn-danger">Nhập lại</button>
                    <a href="index.php?a=danh-sach-nhiem-vu"> <button type="button"
                            class=" trang btn btn-info text-white">Danh
                            sách</button></a>


                </div>
            </div>
        </form>
    </div>
</div>