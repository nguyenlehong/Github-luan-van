<div class="content">
    <div class="tieu-de">
        <h3 class="font">Cập nhật phiếu thu:
            <?php
             if(isset($_GET['L_ID'])&&($_GET['L_ID']>0)){
                $L_ID=$_GET['L_ID'];
            }     
            $query="SELECT * from lop 
                WHERE lop.L_ID=".$L_ID ;         
            $result=mysqli_query($conn,$query); 
                while($row = mysqli_fetch_array($result)){               
                    $T_ID=$row['L_ID'];
                    $tenlop=$row['L_TEN'];
                    echo "$tenlop";
                }          
            ?>
        </h3>
    </div>


    <?php
        $conn = new mysqli('localhost','root','','luanvan');     
    ?>
    <?php
    $tb="";
    if(isset($_POST['but_update'])){
        if(isset($_POST['update'])){
            foreach ($_POST['update'] as $updateid ){                  
                $tien =$_POST['SOTIEN_'.$updateid];      
                $ngay=$_POST['ngay'];
                if($tien !=''){                    
                    $capnhat = "update phieu_thu set
                    NGAY='".$ngay."',SOTIEN='".$tien."'
                    where T_ID=".$updateid;                   
                    mysqli_query($conn,$capnhat);                                   
                }              
            }
            echo '<div class="alert alert-success" role="alert">
                    Cập nhật thành công!
                </div>
                ';
            }  
    }
    ?>
    <div class="noi-dung-100">
        <form action="" method="POST">
            <div class="form-group" style="width: 200px; float: left">
                <input type="date" name="ngay" id="" style="width:190px">
            </div>
            <button type=" submit" class="width100 trang btn btn-success text-white" name='but_update'>Lưu</button>
            <table class=" table table-hover">
                <tr class="table-primary">
                    <th scope="col" class="width-table-100"><input type="checkbox" name="" id='checkAll'>check</th>
                    <th scope="col" class="width-table-100">ID</th>
                    <th scope="col" class="width-table-200">Họ & tên</th>
                    <th scope="col" class="width-table-150">Ngày sinh</th>
                    <th scope="col" class="width-table-150">Giới tính</th>
                    <th scope="col" class="width-table-150">Ngày thu</th>
                    <th scope="col" class="width-table-150">Số tiền </th>

                </tr>
                <?php                           
                    if(isset($_GET['L_ID'])&&($_GET['L_ID']>0)){
                        $L_ID=$_GET['L_ID']; 
                    }           
                        $query="SELECT *
                            FROM lop INNER JOIN phieu_thu
                            on lop.L_ID=phieu_thu.L_ID
                            INNER JOIN tre
                            on tre.T_ID = phieu_thu.T_ID
                            WHERE lop.L_ID=".$L_ID;
                        
                        $result=mysqli_query($conn,$query);
                        while($row = mysqli_fetch_array($result)){
                            $T_ID=$row['T_ID'];                       
                            $T_HOTEN=$row['T_HOTEN'];               
                            $T_PHAI=$row['T_PHAI'];  
                            $ngay=$row['NGAY']; 
                            $sotienn=$row['SOTIEN'];     
                            // $tien =number_format($sotien,0, '.', '.');

                             $time = strtotime($row['T_NGAYSINH']);                    
                             $ngay = strtotime($row['NGAY']);                    
                             $spformat_tien = number_format($sotienn,0, '.', '.');

            ?>
                <tr>
                    <td><input type="checkbox" name="update[]" value='<?=$T_ID?>' id=""></td>
                    <th scope="row"> <?=$T_ID?> </th>
                    <td> <?=$T_HOTEN?> </td>
                    <td> <?=date("d/m/Y", $time)?></td>
                    <td><?=$T_PHAI?></td>
                    <td><?=date("d/m/Y", $ngay)?></td>
                    <td><input type="number" step="0.1" name="SOTIEN_<?= $T_ID ?>" value='<?=$spformat_tien?>'>
                        <?=$spformat_tien?>đ
                    </td>

                </tr>
                <?php
            }
            ?>
        </form>
    </div>
</div>
<script type=" text/javascript">
$(document).ready(function() {
// Check/Uncheck AL1
$(' #checkAll').change(function() {
    if ($(this).is(':checked')) {
        $('input[name="update[]" ]').prop('checked',
            true);
    } else {
        $('input[name="update[]" ]').each(function() {
            $(this).prop('checked',
                false);
        });
    }
}); //checkbox $('input[name="update[]" ]').click(function() { var
total_checkboxes = $('input[name="update[]" ]').length;
var
    total_checkboxes_checked = $('input[name="update[]" ]:checked').length;
if (total_checkboxes_checked == total_checkboxes) {
    $('#checkAll').prop('checked', true);
} else {
    $('#checkAll').prop('checked', false);
};
});
});
</script>