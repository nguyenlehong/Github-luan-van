<?php
if(is_array($list_1_nam)){
    extract($list_1_nam);
}
?><div class="content">
    <div class="tieu-de">
        <h3 class="font">Cập nhật trạng thái năm học
        </h3>
    </div>
    <div class=noi-dung-70>
        <form action="index.php?a=luu-trang-thai-nam-hoc" method='post'>

            <fieldset disabled>
                <div class="form-group row">
                    <label for="inputText3" class="col-sm-2 col-form-label">ID Năm học</label>
                    <div class="col-sm-10 pad20px">
                        <input type="text" class="form-control " id="inputText3" name="NAMHOC" value="<?=$NAMHOC?>">
                    </div>
                </div>
            </fieldset>
            <fieldset disabled>
                <div class="form-group row">
                    <label for="inputText3" class="col-sm-2 col-form-label">Tên năm học</label>
                    <div class="col-sm-10 pad20px">
                        <input type="text" class="form-control " id="inputText3" name="NAMHOC" value="<?=$TENNAMHOC?> ">
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">Ngày bắt đầu HK1</label>
                <div class="col-sm-10 pad20px">
                    <input type="date" class="form-control " id="inputText3" name="bdhk1" value="<?=$BDHK1?>">
                </div>
            </div>
            <div class=" form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">Ngày kết thúc HK1</label>
                <div class="col-sm-10 pad20px">
                    <input type="date" class="form-control " id="inputText3" name="kthk1" value="<?=$KTHK1?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">Ngày bắt đầu HK2</label>
                <div class="col-sm-10 pad20px">
                    <input type="date" class="form-control " id="inputText3" name="bdhk2" value="<?=$BDHK2?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">Ngày kết thúc HK2</label>
                <div class="col-sm-10 pad20px">
                    <input type="date" class="form-control " id="inputText3" name="kthk2" value="<?=$KTHK2?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">Trạng thái</label>
                <div class="col-sm-10 pad20px">
                    <select class="form-control" id="exampleFormControlSelect1" name="trangthai"
                        value="<?=$TRANGTHAI?>">
                        <option value=""> <?=$TRANGTHAI?> </option>
                        <option value="danghoatdong">Đang hoạt động </option>
                        <option value="khonghoatdong">Không hoạt động</option>

                    </select>

                </div>
            </div>
            <input type="hidden" name="ten" value="<?=$NAMHOC?>">
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success width100" name="luu" value="luu">Lưu</button>
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