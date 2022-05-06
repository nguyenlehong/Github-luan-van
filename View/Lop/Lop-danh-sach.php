<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách lớp

        </h3>
    </div>
    <div class=noi-dung-70>
        <form action="">
            <div style="padding-bottom: 15px; height:100px;">
                <div class="form-group" style="padding-top: 20px;margin-right: 160px;width:40%;float:right">
                    <label for="exampleFormControlSelect1"></label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <?php
                            foreach ($list_khoi as $khoi) {
                            extract($khoi);
                            echo '
                            <option value="'.$KHOI.'">'.$KHOI.'</option>                            
                            ';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group" style="padding-top: 10px;width:40%;">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                    <label for="exampleFormControlSelect1"></label>
                    <select class="form-control" id="exampleFormControlSelect1">
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
            </div>
        </form>

        <?php
        foreach ($list_lop as $lop) {
            extract($lop);
            $chitiet="Xu-ly.php?b=loc-tre-theo-lop&L_ID=".$L_ID;    
            $chiso="Xu-ly.php?b=nhap-chi-so-tre&L_ID=".$L_ID; 
            $chiso2="Xu-ly.php?b=nhap-chi-so-tre2&L_ID=".$L_ID; 
            $chiso3="Xu-ly.php?b=nhap-chi-so-tre3&L_ID=".$L_ID; 


            // $chiso2="nhap.php?L_ID=".$L_ID;    


            echo '
            <div class="alert alert-primary" role="alert">
            '.$L_TEN.' - '.$NAMHOC.'       
 
        
            <a href="'.$chitiet.'" class="gachchands">
    <button type="button" class="btn btn-success">
        <ion-icon name="list-outline"></ion-icon>
    </button>
</a>
<a href="'.$chiso.'" class="gachchands">
    <button type="button" class="btn btn-info">
        Lần 1
    </button>
</a>
<a href="'.$chiso2.'" class="gachchands">
<button type="button" class="btn btn-info">
    Lần 2
</button>
</a>
<a href="'.$chiso3.'" class="gachchands">
<button type="button" class="btn btn-info">
    Lần 3
</button>
</a>
 </div>
            
            ';
        }
        ?>

    </div>
    <div style="height:25px">

    </div>
</div>