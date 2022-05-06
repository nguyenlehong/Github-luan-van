<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách khối</h3>
    </div>
    <div class=noi-dung-70>
        <?php
        foreach ($list_khoi as $khoi) {
            extract($khoi);
            $listlopkhoi="Xu-ly.php?b=loc-lop-theo-khoi&KHOI=".$KHOI;
            echo '
            
            <div class="alert alert-success" role="alert">
           '.$KHOI.'
            <a href="'.$listlopkhoi.'" class="gachchands">
                <button type=" reset" class="btn btn-success">
                <ion-icon name="list-outline"></ion-icon>
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