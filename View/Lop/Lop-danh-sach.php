<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách lớp

        </h3>
    </div>
    <div class=noi-dung-70>
        <form action="Xu-ly.php?b=loc-lop-theo-nam-khoi" method="POST">


            <div class="form-group" style="padding-top: 10px;padding-bottom: 10px;">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="loc-lop-theo-nam"
                    value="loc-lop-theo-nam">Tìm
                    kiếm</button>
                <label for=" exampleFormControlSelect1"></label>
                <select class="form-control" id="exampleFormControlSelect1" name="NAMHOC">
                    <?php
                            foreach ($list_nam_hoc as $namhoc) {
                            extract($namhoc);
                            echo '
                            <option value="'.$NAMHOC.'">'.$TENNAMHOC.'</option>                            
                            ';
                        }
                        ?>
                </select>
            </div>

        </form>

        <?php
        foreach ($list_lop_thuoc_khoi as $lop) {
            extract($lop);
            $chitiet="Xu-ly.php?b=loc-tre-theo-lop&L_ID=".$L_ID;    
             
            $in="Admin/in.php?L_ID=".$L_ID;
            $lan1="Xu-ly.php?b=nhap-chi-so-lan1&L_ID=".$L_ID; 
            $lan2="Xu-ly.php?b=nhap-chi-so-lan2&L_ID=".$L_ID; 
            $lan3="Xu-ly.php?b=nhap-chi-so-lan3&L_ID=".$L_ID; 
            $lan4="Xu-ly.php?b=nhap-chi-so-lan4&L_ID=".$L_ID; 

            echo '
        <div class="alert alert-primary" role="alert">
            '.$L_TEN.' - '.$TENNAMHOC.'       
 
            <a href="'.$chitiet.'" class="gachchands">
                <button type="button" class="btn btn-success">
                <ion-icon name="list-outline"></ion-icon>
                </button>
            </a>
            <a href="'.$in.'" class="gachchands">
                <button type="button" class="btn btn-info">
                In
                </button>
            </a>
          
            <a href="'.$lan1.'" class="gachchands">
                <button type="button" class="btn btn-info">
                Lần 1
                </button>
            </a>
            <a href="'.$lan2.'" class="gachchands">
                <button type="button" class="btn btn-info">
                Lần 2
                </button>
            </a> 
            <a href="'.$lan3.'" class="gachchands">
                <button type="button" class="btn btn-info">
                Lần 3
                </button>
            </a> 
            <a href="'.$lan4.'" class="gachchands">
                <button type="button" class="btn btn-info">
                Lần 4
                </button>
            </a>
    </div> ';
        }
        ?>

    </div>
    <div style="height:25px">

    </div>
</div>
<!-- $chiso3="Xu-ly.php?b=nhap-chi-so-tre3&L_ID=".$L_ID;
<a href="'.$chiso3.'" class="gachchands">
    <button type="button" class="btn btn-info">
        Nhập chỉ số
    </button>
</a> 
cap nhat chi so lan 3. nay la insert khong phai cap nhat

-->
<!-- <a href="'.$chiso.'" class="gachchands">
    <button type="button" class="btn btn-info">
        Lần 1
    </button>
</a>
<a href="'.$chiso2.'" class="gachchands">
    <button type="button" class="btn btn-info">
        Lần 2
    </button>
</a>
$chiso="Xu-ly.php?b=nhap-chi-so-tre&L_ID=".$L_ID;
$chiso2="Xu-ly.php?b=nhap-chi-so-tre2&L_ID=".$L_ID; -->