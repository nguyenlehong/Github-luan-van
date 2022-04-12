<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách lớp </h3>
    </div>
    <div class=noi-dung-70>
        <h5>Các nhóm thuộc <?=$KHOI?></h5>
        <?php
        foreach ($list_lop as $lop) {
            extract($lop);
            
            $chitiet="index.php?a=list-hoc-sinh-thuoc-lop&L_ID=".$L_ID;
          
            echo '
            <div class="alert alert-primary" role="alert">
            '.$L_TEN.' - '.$NAMHOC.'
           
        <a href="'.$chitiet.'" class="gachchands">
            <button type="button" class="btn btn-success" ">
            <ion-icon name="list-outline"></ion-icon>
            </button>
        </a>

        </div>
            
            ';
        }
        ?>
        <a href="index.php?a=danh-sach-khoi"> <button type="button" class=" trang btn btn-info text-white">Danh
                sách khối</button></a>
    </div>


</div>