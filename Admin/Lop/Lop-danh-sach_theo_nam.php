<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách lớp </h3>
    </div>
    <div class=noi-dung-70>
        <form action="index.php?a=loc-lop-theo-nam-khoicb" method="POST">


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
                            <option value="'.$NAMHOC.'">'.$NAMHOC.'</option>                            
                            ';
                        }
                        ?>
                </select>
            </div>

        </form>

        <?php
        foreach ( $list_lop_thuoc_khoi as $lop) {
            extract($lop);
            $chitiet="index.php?a=loc-tre-theo-lop&L_ID=".$L_ID;    
            $in="in.php?L_ID=".$L_ID;    

            echo '
            <div class="alert alert-primary" role="alert">
            '.$L_TEN.' - '.$NAMHOC.'       
 
        <a href="'.$chitiet.'" class="gachchands">
    <button type="button" class="btn btn-success">
        <ion-icon name="list-outline"></ion-icon>
    </button>
</a>
<a href="'.$in.'" class="gachchands">
<button type="button" class="btn btn-info">
<ion-icon name="print-outline"></ion-icon>
</button>
</a>
        </div>
            
            ';
        }
        ?>

    </div>
    <div style="height:25px"></div>
</div>