<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách loại món</h3>
    </div>
    <div class=noi-dung-70>
        <?php
        foreach ($list_loai_mon as $loaimon) {
            extract($loaimon);
            $delete="index.php?a=update-loai-mon&LM_ID=".$LM_ID;
            $update="index.php?a=delete-loai-mon&LM_ID=".$LM_ID;

            
            echo '
            <div class="alert alert-primary" role="alert">
            '.$LM_TEN.'
           
        <a href="'.$update.'" class="gachchands">
            <button type=" reset" class="btn btn-danger" onclick="deleteLM()">
                <ion-icon name="trash-outline"></ion-icon>
            </button>
        </a>
        <a href="'.$delete.'" class="gachchands">
        <button type=" reset" class="btn btn-success">
            <ion-icon name="pencil-outline"></ion-icon>
        </button>
    </a>
        </div>
            
            ';
        }
        
        
        
        ?>








        <!-- <div class="alert alert-primary" role="alert">
            This is a primary alert—check it out!
            <a href="" class="gachchan">
                <ion-icon name="trash-outline"></ion-icon>
            </a>
            <a href="" class="gachchan">
                <ion-icon name="pencil-outline"></ion-icon>
            </a>
        </div>
        <div class="alert alert-secondary" role="alert">
            gà chiên
        </div>
        <div class="alert alert-success" role="alert">
            This is a success alert—check it out!
        </div>
        <div class="alert alert-danger" role="alert">
            This is a danger alert—check it out!
        </div>
        <div class="alert alert-warning" role="alert">
            This is a warning alert—check it out!
        </div>
        <div class="alert alert-info" role="alert">
            This is a info alert—check it out!
        </div>
        <div class="alert alert-light" role="alert">
            This is a light alert—check it out!
        </div>
        <div class="alert alert-dark" role="alert">
            This is a dark alert—check it out!
        </div> -->
    </div>
</div>