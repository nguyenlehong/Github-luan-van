<div class="content">
    <div class="tieu-de">
        <h3 class="font"> Cập nhật chỉ số lần 3
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
                $id =$_POST['id_'.$updateid];
                $cc =$_POST['CHIEUCAO_'.$updateid];
                $cn =$_POST['CANNANG_'.$updateid];      
                $th =$_POST['thang'];
                $lop=$_POST['lop'];
                if($cc !='' && $cn !=''){                  
                    // $capnhat = "update chi_so_phat_trien3 set
                    // THANG='".$th."',CHIEUCAO3='".$cc."',CANNANG3='".$cn."'
                    // where T_ID=".$updateid;
                    $capnhat = "INSERT INTO chi_so_phat_trien3(L_ID,T_ID,THANG,CHIEUCAO3,CANNANG3)
                    VALUES('$lop','$id','$th','$cc','$cn')";
                    
                    mysqli_query($conn,$capnhat);
                                      
                }
                
            }
            echo '
            <div class="alert alert-success" role="alert">
  Cập nhật cân nặng và chiều cao thành công!
</div>
            ';

    }
    
}
    ?>
    <div class="noi-dung-100">

        <form action="" method="POST">
            <div class="form-group" style="width: 200px; float: left">
                <!-- <select class="form-control" id="exampleFormControlSelect1" name=thang>

                    <option value="Tháng 1">Tháng 1</option>
                    <option value="Tháng 2">Tháng 2</option>
                    <option value="Tháng 3">Tháng 3</option>
                    <option value="Tháng 4">Tháng 4</option>
                    <option value="Tháng 5">Tháng 5</option>
                    <option value="Tháng 6">Tháng 6</option>
                    <option value="Tháng 7">Tháng 7</option>
                    <option value="Tháng 8">Tháng 8</option>
                    <option value="Tháng 9">Tháng 9</option>
                    <option value="Tháng 10">Tháng 10</option>
                    <option value="Tháng 11">Tháng 11</option>
                    <option value="Tháng 12">Tháng 12</option>


                </select> -->
                <input type="month" name="thang" id="">

            </div>
            <button type=" submit" class="width100 trang btn btn-success text-white" name='but_update'
                style="margin:0px 0px 5px 10px">
                Lưu</button>

            <table class=" table table-hover">

                <tr class="table-primary">
                    <th scope="col" class="width-table-100"><input type="checkbox" name="" id='checkAll'>check
                    </th>
                    <th scope="col" class="width-table-100">ID</th>
                    <th scope="col" class="width-table-200">Họ & tên</th>
                    <th scope="col" class="width-table-150">Ngày sinh</th>
                    <th scope="col" class="width-table-150">Giới tính</th>
                    <th scope="col" class="width-table-150">Ngày đo</th>

                    <th scope="col" class="width-table-150">Chiều cao </th>
                    <th scope="col" class="width-table-150">Cân nặng</th>
                </tr>
                <?php                           
                    if(isset($_GET['L_ID'])&&($_GET['L_ID']>0)){
                        $L_ID=$_GET['L_ID']; }
            
                        $query="SELECT *
                        FROM lop INNER JOIN lop_tre
                        on lop.L_ID = lop_tre.L_ID
                        INNER JOIN tre
                        ON tre.T_ID = lop_tre.T_ID
                        
                        WHERE lop.L_ID=".$L_ID;
                        
                        $result=mysqli_query($conn,$query);
                        
                        while($row = mysqli_fetch_array($result)){
                           
                            $T_ID=$row['T_ID'];
                            // $cc=$row['CHIEUCAO3'];
                            // $cn=$row['CANNANG3'];  
                            $T_HOTEN=$row['T_HOTEN'];
                            // $T_NGAYSINH=$row['T_NGAYSINH'];                     
                            $T_PHAI=$row['T_PHAI']; 
                            // $THANG=$row['THANG']; 
                             $lop=$row['L_ID'];
                            

                            $time = strtotime($row['T_NGAYSINH']); 
                            // $thang = strtotime($row['THANG']);             


            ?>
                <tr>
                    <td><input type="checkbox" name="update[]" value='<?=$T_ID?>' id=""></td>

                    <th scope="row">
                        <?=$T_ID?>
                    </th>
                    <td>
                        <?=$T_HOTEN?>
                    </td>
                    <td><?=date("d/m/Y", $time)?> </td>
                    <td><?=$T_PHAI?></td>
                    <!-- <td><?=$THANG?></td> -->
                    <td></td>
                    <!-- <td><?=date("m/Y", $thang)?></td> -->
                    <input type="hidden" name="lop" value="<?=$lop?>">
                    <input type="hidden" name="id_<?=$T_ID ?>" value="<?=$T_ID?>">
                    <td><input type="number" step="0.1" name="CHIEUCAO_<?=$T_ID ?>" value=""></td>
                    <td><input type=" number" step="0.1" name="CANNANG_<?=$T_ID ?>" value=""></td>



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