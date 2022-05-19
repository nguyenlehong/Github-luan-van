<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách lớp </h3>
    </div>
    <div class=noi-dung-70>


        <?php
        foreach ($list_lop as $lop) {
            extract($lop);
            $chitiet="Xu-ly.php?b=cap-nhat-tre-theo-lopcb&L_ID=".$L_ID;    
            
            $in_thong_tin="Admin/in-thong-tin.php?L_ID=".$L_ID;    
            $in_chi_so="Admin/in-chi-so.php?L_ID=".$L_ID;    


            echo '
            <div class="alert alert-primary" role="alert">
            '.$L_TEN.'       
 
        <a href="'.$chitiet.'" class="gachchands">
    <button type="button" class="btn btn-success">
        <ion-icon name="list-outline"></ion-icon>
    </button>
</a>

<a href="'.$in_thong_tin.'" class="gachchands">
<button type="button" class="btn btn-info">
In thông tin
</button>
</a>
<a href="'.$in_chi_so.'" class="gachchands">
<button type="button" class="btn btn-info">
In chỉ số
</button>
</a>
        </div>
            
            ';
        }
        ?>

    </div>
    <div style="height:25px"></div>
</div>
<!-- <ion-icon name="print-outline"></ion-icon> 


- '.$NAMHOC.'  o phần tên lớp
-->