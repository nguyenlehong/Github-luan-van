<div class="content">
    <div class="tieu-de">
        <h3 class="font">Thêm món ăn</h3>
    </div>
    <div class=noi-dung-80>
        <form>
            <fieldset disabled>
                <div class="form-group row ">

                    <label for="inputText3" class="col-sm-2 col-form-label">Mã món ăn</label>
                    <div class="col-sm-10 pad20px">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Tên món ăn</label>
                <div class="col-sm-10 pad20px">
                    <input type="text" class="form-control " id="inputText3" placeholder="VD: Gà chiên">
                </div>
            </div>


            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Ảnh</label>
                <div class="col-sm-10 pad20px">
                    <input type="file" class="form-control-file" id="imageFile" onchange="hienthi(this)">
                </div>
            </div>


            <img class="padleft155 pad20px" src="" alt="" height="200px" width="auto" id="image">




            <div class=" form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Mô tả</label>
                <div class="col-sm-10 pad20px">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>



            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Loại món</label>
                <div class="col-sm-10 pad20px">
                    <select class="custom-select form-control">

                        <option value="1">Món chính</option>
                        <option value="2">Món phụ</option>
                        <option value="3">Trái cây</option>
                    </select>
                </div>
            </div>






            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success width100">Lưu</button>
                    <button type="reset" class="btn btn-danger">Nhập lại</button>

                </div>
            </div>
        </form>
    </div>
</div>

</form>
</div>
</div>