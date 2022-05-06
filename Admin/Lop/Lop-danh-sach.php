<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách lớp </h3>
    </div>
    <div class=noi-dung-70>


        <?php
        foreach ($list_lop as $lop) {
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