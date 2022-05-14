<div class="content">
    <div class="tieu-de">
        <?php
        $conn = new mysqli('localhost','root','','luanvan');       
        ?>

        <h3 class="font"> Danh sách trẻ <?=$ten_lop?></h3>
    </div>
    <?php
    $tb="";
    if(isset($_POST['but_update'])){
        if(isset($_POST['update'])){
            foreach ($_POST['update'] as $updateid ){  
                $id =$_POST['id_'.$updateid];              
                $lop=$_POST['L_ID'];
                if($lop !=''){                                     
                    $capnhat = "INSERT INTO lop_tre(L_ID,T_ID)
                                VALUES('$lop','$id')"; 
                                  
                    $lan1 = "INSERT INTO chi_so_dau_hk1(L_ID,T_ID)
                                VALUES('$lop','$id')";
                                  
                    $lan2 = "INSERT INTO chi_so_cuoi_hk1(L_ID,T_ID)
                                VALUES('$lop','$id')";
                                
                    $lan3 = "INSERT INTO chi_so_dau_hk2(L_ID,T_ID)
                                VALUES('$lop','$id')";
                                
                    $lan4 = "INSERT INTO chi_so_cuoi_hk2(L_ID,T_ID)
                                VALUES('$lop','$id')";
                                               
                    mysqli_query($conn,$capnhat);
                    mysqli_query($conn,$lan1);                                      
                    mysqli_query($conn,$lan2);                                      
                    mysqli_query($conn,$lan3);                                      
                    mysqli_query($conn,$lan4);                                      

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
                <select class="form-control" id="exampleFormControlSelect1" name=L_ID>
                    <?php
                        foreach ($list_lop as $lop) {
                            extract($lop);
                            echo '
                            <option value="'.$L_ID.'">'.$L_TEN.'</option>                               
                            ';
                        }
                        ?>
                </select>
            </div>

            <button type=" submit" class="width100 trang btn btn-success text-white" name='but_update'
                style="margin:0px 0px 5px 10px">Lưu</button>
            <table class="table table-hover">
                <tbody>
                    <tr class="table-primary">
                        <th scope="col" class="width-table-100"><input type="checkbox" name="" id='checkAll'>check
                        </th>
                        <th scope="col" class="width-table-50">STT</th>
                        <th scope="col" class="width-table-50">ID</th>
                        <th scope="col" class="width-table-200">Họ & tên</th>
                        <th scope="col" class="width-table-200">Ngày sinh</th>
                        <th scope="col" class="width-table-100">Giới tính</th>
                        <th scope="col" class="width-table-200">Họ tên cha </th>
                        <th scope="col" class="width-table-150">SĐT cha </th>
                        <th scope="col" class="width-table-200">Họ tên mẹ </th>
                        <th scope="col" class="width-table-150">SĐT mẹ </th>
                        <th scope="col" class="width-table-400">Địa chỉ</th>
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
                            $i=1;                  
                             while($row = mysqli_fetch_array($result)){
                                    $T_ID=$row['T_ID'];                      
                                    $T_HOTEN=$row['T_HOTEN'];
                                    $time = strtotime($row['T_NGAYSINH']); 
                                    // $T_NGAYSINH=$row['T_NGAYSINH'];                     
                                    $T_PHAI=$row['T_PHAI'];
                                    $T_DIACHI=$row['T_DIACHI']; 
                                    $T_HTCHA=$row['T_HTCHA'];
                                    $T_SDTCHA=$row['T_SDTCHA']; 
                                    $T_HTME=$row['T_HTME'];
                                    $T_SDTME=$row['T_SDTME'];                      
                                    // $THANG=$row['THANG'];       
                ?>
                    <tr>
                        <td><input type="checkbox" name="update[]" value='<?=$T_ID?>' id=""></td>
                        <td> <?=$i?> </td>
                        <td><?=$T_ID?></td>
                        <td><?=$T_HOTEN?></td>
                        <td><?=date("d/m/Y", $time)?></td>
                        <td><?=$T_PHAI?></td>
                        <td><?=$T_HTCHA?></td>
                        <td><?=$T_SDTCHA?></td>
                        <td><?=$T_HTME?></td>
                        <td><?=$T_SDTME?></td>
                        <td><?=$T_DIACHI?></td>
                        <input type="hidden" name="id_<?=$T_ID ?>" value="<?=$T_ID?>">
                    </tr>
                    <?php
                        $i++;
            }
                        ?>
        </form>
        </tbody>
        </table>

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