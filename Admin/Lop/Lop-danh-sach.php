<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách lớp

        </h3>
    </div>
    <div class=noi-dung-70>

        <?php
        foreach ($list_lop as $lop) {
            extract($lop);
            $chitiet="index.php?a=delete-lop&L_ID=".$L_ID;    
            echo '
            <div class="alert alert-primary" role="alert">
            '.$L_TEN.' - '.$NAMHOC.'       
 
        <a href="'.$chitiet.'" class="gachchands">
    <button type=" reset" class="btn btn-success">
        <ion-icon name="list-outline"></ion-icon>
    </button>
</a>
        </div>
            
            ';
        }
        ?>

    </div>
</div>
<!-- $delete="index.php?a=update-lop&L_ID=".$L_ID; -->
<!-- <a href="'.$delete.'" class="gachchands">
    <button type=" reset" class="btn btn-danger" onclick="deleteLM()">
        <ion-icon name="trash-outline"></ion-icon>
    </button>
</a> -->