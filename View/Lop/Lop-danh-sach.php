<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách lớp

        </h3>
    </div>
    <div class=noi-dung-70>

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
</div>
<!-- $delete="index.php?a=update-lop&L_ID=".$L_ID; -->
<!-- <a href="'.$delete.'" class="gachchands">
    <button type=" reset" class="btn btn-danger" onclick="deleteLM()">
        <ion-icon name="trash-outline"></ion-icon>
    </button>
</a> -->