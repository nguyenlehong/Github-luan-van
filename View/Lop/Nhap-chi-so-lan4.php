<div class="content">
    <div class="tieu-de">
        <h3 class="font"> Chỉ số đo cuối HK2:
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
                $cc =$_POST['CHIEUCAO_'.$updateid];
                $cn =$_POST['CANNANG_'.$updateid];      
                $th=$_POST['thang'];
                $ccM= ($cc/100);               
                $BMI=$cn/($ccM * $ccM );
                if($BMI < 14){
                    $xeploai="Thiếu cân";
                } 
                else if(14 < $BMI && $BMI < 17) {
                    $xeploai="Bình thường ";
                } 
                else if($BMI >17) {
                    $xeploai="Thừa cân ";
                    
                } else {
                    $xeploai="";
                }



                
                if($cc !='' && $cn !=''){                    
                    $capnhat = "update chi_so_cuoi_hk2 set
                    THANG='".$th."',CHIEUCAO='".$cc."',CANNANG='".$cn."',XEPLOAI='".$xeploai."'
                    where T_ID=".$updateid;                   
                    mysqli_query($conn,$capnhat);                                   
                }              
            }
            echo '<div class="alert alert-success" role="alert">
                    Cập nhật cân nặng và chiều cao thành công!
                </div>
                ';
            }  
    }
    ?>
    <div class="noi-dung-100">
        <form action="" method="POST">
            <div class="form-group" style="width: 200px; float: left">
                <input type="month" name="thang" id="">
            </div>
            <button type=" submit" class="width100 trang btn btn-success text-white" name='but_update'
                style="margin:0px 0px 5px 10px">Lưu</button>
            <table class=" table table-hover">
                <tr class="table-primary">
                    <th scope="col" class="width-table-100"><input type="checkbox" name="" id='checkAll'>check</th>
                    <th scope="col" class="width-table-50">ID</th>
                    <th scope="col" class="width-table-200">Họ & tên</th>
                    <th scope="col" class="width-table-150">Ngày sinh</th>
                    <th scope="col" class="width-table-100">Giới tính</th>
                    <th scope="col" class="width-table-150">Ngày đo</th>
                    <th scope="col" class="width-table-100">Chiều cao </th>
                    <th scope="col" class="width-table-100">Cân nặng</th>
                    <th scope="col" class="width-table-150">Trạng thái</th>
                </tr>
                <?php                           
                    if(isset($_GET['L_ID'])&&($_GET['L_ID']>0)){
                        $L_ID=$_GET['L_ID']; 
                    }           
                        $query="SELECT *
                        FROM lop INNER JOIN lop_tre
                        on lop.L_ID = lop_tre.L_ID
                        INNER JOIN tre
                        ON tre.T_ID = lop_tre.T_ID
                        INNER JOIN chi_so_cuoi_hk2
                        on chi_so_cuoi_hk2.T_ID = tre.T_ID
                        WHERE lop.L_ID=".$L_ID;
                        
                        $result=mysqli_query($conn,$query);
                        while($row = mysqli_fetch_array($result)){
                            $T_ID=$row['T_ID'];
                            $cc=$row['CHIEUCAO'];
                            $cn=$row['CANNANG'];  
                            $T_HOTEN=$row['T_HOTEN'];
                            // $T_NGAYSINH=$row['T_NGAYSINH'];                     
                            $T_PHAI=$row['T_PHAI'];  
                            $thang=$row['THANG'];     
                             $time = strtotime($row['T_NGAYSINH']);    
                             
                             $ccM= ($cc/100);               
                             $BMI=$cn/($ccM * $ccM );
                             if($BMI < 14){
                                 $thongbao="Thiếu cân";
                             } 
                             else if(14 < $BMI && $BMI < 17) {
                                 $thongbao="Bình thường ";
                             } 
                             else if($BMI >17) {
                                 $thongbao="thừa cân ";
                                 
                             } else {
                                 $thongbao="";
                             }

            ?>
                <tr>
                    <td><input type="checkbox" name="update[]" value='<?=$T_ID?>' id=""></td>
                    <th scope="row"> <?=$T_ID?> </th>
                    <td> <?=$T_HOTEN?> </td>
                    <td> <?=date("d/m/Y", $time)?></td>
                    <td><?=$T_PHAI?></td>
                    <td><?=$thang?></td>
                    <td><input type="number" step="0.1" name="CHIEUCAO_<?= $T_ID ?>" value="<?=$cc?>"></td>
                    <td><input type=" number" step="0.1" name="CANNANG_<?= $T_ID ?>" value='<?=$cn?>'></td>
                    <td>
                        <?php
                          if(isset($thongbao)&&($thongbao!=""))
                          echo $thongbao;
                      ?>

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
    $('#checkAll').change(function() {
        if ($(this).is(':checked')) {
            $('input[name="update[]"]').prop('checked', true);
        } else {
            $('input[name="update[]"]').each(function() {
                $(this).prop('checked', false);
            });
        }
    });
    //checkbox
    $('input[name="update[]"]').click(function() {
        var total_checkboxes = $('input[name="update[]"]').length;
        var total_checkboxes_checked = $('input[name="update[]"]:checked').length;
        if (total_checkboxes_checked == total_checkboxes) {
            $('#checkAll').prop('checked', true);
        } else {
            $('#checkAll').prop('checked', false);
        };
    });
});
</script>