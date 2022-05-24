<?php
 $conn = new mysqli('localhost','root','','luanvan'); 
  
    if(isset($_POST['but_update'])){
        if(isset($_POST['update'])){
            foreach ($_POST['update'] as $updateid ){
                 
                $buoi=$_POST['BUOI'];
                $thu=$_POST['THU'];
                $id=$_POST['id_'.$updateid];             
 
               
                
                // $sql = "SELECT * FROM thuc_don WHERE THU = '$thu' and BUOI = '$buoi'";
	            // $result = $conn->query($sql);
	            // if($result->num_rows>0){
		        //     $thongbao="Thực đã tồn tại! Vui lòng nhập lại";
                //     $list_buoi=load_all_buoi();
                //     $list_thu=load_all_thu();
                //     $list_mon=load_all_mon();
                //     include 'Them-thuc-don.php';
                //     break;
	            // }else{
                   
                    $capnhat = "INSERT INTO thuc_don(BUOI,THU,MONAN)
                            VALUES('$buoi','$thu','$id')";                                      
                            mysqli_query($conn,$capnhat);
                            // $list_thuc_don=load_all_thuc_don_bep();
                            $thongbao="Thêm thành công";
                            
                // }                          
                             
            }
            
        }  
         header('location:index.php?c=danh-sach-thuc-don');
    }
    ?>
<div class="content">
    <div class="tieu-de">
        <h3 class="font">Tạo thực đơn</h3>
    </div>
    <div class=noi-dung-80>
        <?php
        if(isset($thongbao)&&($thongbao!=""))
            echo'<div class="alert alert-success" role="alert">
                    '.$thongbao.'
                </div>
        ';
        ?>

        <form action="" method="POST">


            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Buổi</label>
                <div class="col-sm-10 pad20px">
                    <select class="custom-select form-control" name="BUOI">

                        <?php
                            foreach ($list_buoi as $buoi) {
                            extract($buoi);
                          
                            echo '
                            <option value="'.$BUOI.'">'.$BUOI.'</option>                            
                            ';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Thứ</label>
                <div class="col-sm-10 pad20px">
                    <select class="custom-select form-control" name="THU">

                        <?php
                            foreach ($list_thu as $thu) {
                            extract($thu);
                            echo '
                            <option value="'.$THU.'">'.$THU.'</option>                            
                            ';
                        }
                        ?>
                    </select>
                </div>
            </div>


            <!-- them thuc đon -->
            <div class="noi-dung-100">


                <table class=" table table-hover">
                    <tr class="table-primary">
                        <th scope="col" class="width-table-100"><input type="checkbox" name="" id='checkAll'>check
                        </th>
                        <th scope="col" class="width-table-50">ID</th>
                        <th scope="col" class="width-table-200">Tên món ăn</th>
                        <th scope="col" class="width-table-150">Mô tả</th>
                    </tr>

                    <?php                           
                            
                        $query="SELECT *
                        FROM mon ";
                        
                        $result=mysqli_query($conn,$query);
                        while($row = mysqli_fetch_array($result)){
                            $M_ID=$row['M_ID'];
                            $ten=$row['M_TEN'];                  
            ?>
                    <tr>
                        <td><input type="checkbox" name="update[]" value='<?=$M_ID?>' id=""></td>
                        <th scope="row"> <?=$M_ID?> </th>
                        <td> <?=$ten?> </td>
                        <input type="hidden" name="id_<?=$M_ID ?>" value="<?=$M_ID?>">

                    </tr>


                    <?php
            }
            ?>
            </div>


            <!-- <input type=" hidden" name="M_<?=$M_ID ?>" value="<?=$M_ID?>"> -->


            <!-- them thuc don -->
            <div class="form-group row clearleft">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success width100" name='but_update'>Lưu</button>
                    <button type=" reset" class="btn btn-danger">Nhập lại</button>
                    <a href="index.php?c=danh-sach-thuc-don"> <button type="button"
                            class=" trang btn btn-info text-white">Danh
                            sách</button></a>
                </div>
            </div>
        </form>
    </div>
    <div style="height:25px"></div>
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



<!-- <?php                           
                    $query="SELECT * FROM mon";                       
                        $result=mysqli_query($conn,$query);
                        while($row = mysqli_fetch_array($result)){
                            $M_ID=$row['M_ID'];
                            $tenmon=$row['M_TEN'];
                            $mota=$row['M_MOTA'];  
                                           

                          
                         
            ?>
<tr>
    <td><input type="checkbox" name="update[]" value='<?=$M_ID?>' id=""></td>
    <th scope="row"> <?=$M_ID?> </th>
    <td>
        <?=$tenmon?>
    </td>



    <td> <?=$mota?></td>
</tr>
<?php
            }
            ?> -->


<!-- <?php
            foreach ($list_mon as $mon) {
                extract($mon);
                echo '
                <tr>
                <td><input type="checkbox" name="update[]" value="<?=$M_ID?>" id=""></td>
<td>'.$M_ID.'</td>
<td>'.$M_TEN.'</td>
<input type="hidden" name="id_<?=$M_ID ?>" value="'.$M_ID.'">
</tr>


';
}
?> -->