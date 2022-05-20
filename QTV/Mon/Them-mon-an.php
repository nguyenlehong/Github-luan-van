<div class="content">
    <div class="tieu-de">
        <h3 class="font">Thêm món ăn</h3>
    </div>
    <div class=noi-dung-80>
        <form action="index.php?b=luu-mon-an" method="POST" enctype="multipart/form-data" autocomplete='off'>
            <fieldset disabled>
                <div class="form-group row ">
                    <label for="inputText3" class="col-sm-2 col-form-label">ID món ăn</label>
                    <div class="col-sm-10 pad20px">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">Tên món ăn</label>
                <div class="col-sm-10 pad20px">
                    <input type="text" class="form-control " name="tenmon" id="inputText3" placeholder="VD: Gà chiên"
                        required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputFile3" class="col-sm-2 col-form-label">Ảnh</label>
                <div class="col-sm-10 pad20px">
                    <input type="file" class="form-control-file" name="hinh_mon" id="imageFile"
                        onchange="hienthi(this)">
                </div>
            </div>
            <img class="padleft170 pad20px" src="" alt="" height="200px" width="auto" id="image">
            <div class=" form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">Mô tả</label>
                <div class="col-sm-10 pad20px">
                    <textarea class="form-control" name="motamon" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">Loại món</label>
                <div class="col-sm-10 pad20px">
                    <select class="custom-select form-control" name="LM_ID">
                        <?php
                    foreach ($list_loai_mon as $loaimon) {
                        extract($loaimon);                       
                        echo'                       
                        <option value="'.$LM_ID.'">'.$LM_TEN.'</option>
                        ';
                    }                
                    ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success width100" value="luu" name="luu">Lưu</button>
                    <button type=" reset" class="btn btn-danger">Nhập lại</button>
                    <a href="index.php?b=danh-sach-mon-an"> <button type="button"
                            class=" trang btn btn-info text-white">Danh
                            sách</button></a>
                </div>
            </div>
        </form>
    </div>
    <div style="height:25px"></div>
</div>

</form>