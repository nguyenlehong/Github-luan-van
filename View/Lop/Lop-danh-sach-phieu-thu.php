<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách lớp

        </h3>
    </div>
    <div class=noi-dung-70>
        <!-- <form action="Xu-ly.php?b=loc-lop-theo-nam-khoi" method="POST">
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
        </form> -->

        <?php
        foreach ($list_lop_thuoc_khoi as $lop) {
            extract($lop);
            $chitiet="Xu-ly.php?b=loc-tre-theo-lop&L_ID=".$L_ID;    
            $phieuthu="Xu-ly.php?b=nhap-phieu-thu-lop&L_ID=".$L_ID; 
         
            echo '
                <div class="alert alert-primary" role="alert">
                    '.$L_TEN.' - '.$TENNAMHOC.'       
 
            <a href="'.$chitiet.'" class="gachchands">
                <button type="button" class="btn btn-success">
                    <ion-icon name="list-outline"></ion-icon>
                </button>
            </a>
                  
            <a href="'.$phieuthu.'" class="gachchands">
                <button type="button" class="btn btn-info">
                    Phiếu thu
                </button>
            </a>
           
    </div> ';
        }
        ?>

    </div>
    <div style="height:25px">
    </div>
</div>