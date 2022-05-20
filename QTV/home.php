<?php
$conn = new mysqli('localhost','root','','luanvan');     
    $query="SELECT count(CB_ID) AS tong from can_bo";         
    $result=mysqli_query($conn,$query); 
    $data = mysqli_fetch_assoc($result);

    $query2="SELECT count(DISTINCT lop_tre.T_ID) AS tong
        FROM tre INNER JOIN lop_tre
        on tre.T_ID = lop_tre.T_ID
        INNER JOIN lop
        on lop.L_ID = lop_tre.L_ID
        inner JOIN nam_hoc
        on lop.NAMHOC = nam_hoc.NAMHOC
        WHERE nam_hoc.TRANGTHAI='danghoatdong'";         
    $result2=mysqli_query($conn,$query2); 
    $data2 = mysqli_fetch_assoc($result2);

    $query3="SELECT count(M_ID) AS tong from mon";         
    $result3=mysqli_query($conn,$query3); 
    $data3 = mysqli_fetch_assoc($result3);
    

    
    $query4="SELECT count(L_ID) AS tong
    FROM nam_hoc INNER JOIN lop
    on nam_hoc.NAMHOC = lop.NAMHOC
    WHERE nam_hoc.TRANGTHAI='danghoatdong'";         
    $result4=mysqli_query($conn,$query4); 
    $data4 = mysqli_fetch_assoc($result4);

    
    
?>
<div class="content">
    <div class=noi-dung-100>

        <div class="acontent">
            <div class="acards">
                <div class="acard">
                    <div class="abox">
                        <h1>
                            <?=$data2['tong']?>
                        </h1>
                        <h3>Trẻ</h3>
                    </div>
                    <div class="aicon-case">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                </div>
                <div class="acard">
                    <div class="abox">
                        <h1>
                            <?php
                            echo $data['tong'];
                            ?>
                        </h1>
                        <h3>Giáo viên</h3>
                    </div>
                    <div class="aicon-case">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                </div>
                <div class="acard">
                    <div class="abox">
                        <h1>
                            <?=$data4['tong']?>
                        </h1>
                        <h3>Lớp</h3>
                    </div>
                    <div class="aicon-case">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>
                <div class="acard">
                    <div class="abox">
                        <h1>
                            <?=$data3['tong']?>

                        </h1>
                        <h3>Món ăn</h3>
                    </div>
                    <div class="aicon-case">
                        <ion-icon name="fast-food-outline"></ion-icon>
                    </div>
                </div>
            </div>
            <div class="acontent-2"></div>
        </div>
    </div>
    <div class=noi-dung-100>
        <table class="table table-bordered">

            <tbody>
                <tr class="table-primary">
                    <th class="width-table-130 ogiua"></th>
                    <th class="width-table-130 ogiua">THỨ 2</th>
                    <th class="width-table-130 ogiua">THỨ 3</th>
                    <th class="width-table-130 ogiua">THỨ 4</th>
                    <th class="width-table-130 ogiua">THỨ 5</th>
                    <th class="width-table-130 ogiua">THỨ 6</th>

                </tr>
                <!-- buổi sáng -->
                <tr>
                    <th scope="row" class="ogiua">BUỔI SÁNG</th>
                    <td>
                        <?php
            foreach ($list_thuc_don as $thucdon) {
                extract($thucdon);
                if(($THU=="Thứ 2")&&($BUOI=="Buổi sáng")&&($KHOI="Khối từ 25 đến 36 tháng tuổi"))
                    echo''.$MONAN.'';
            }   ?>
                    </td>
                    <td>
                        <?php
            foreach ($list_thuc_don as $thucdon) {
                extract($thucdon);
                if(($THU=="Thứ 3")&&($BUOI=="Buổi sáng")&&($KHOI="Khối từ 25 đến 36 tháng tuổi"))
                    echo''.$MONAN.'';
            }?>
                    </td>
                    <td><?php
                        foreach ($list_thuc_don as $thucdon) {
                        extract($thucdon);
                        if(($THU=="Thứ 4")&&($BUOI=="Buổi sáng")&&($KHOI="Khối từ 25 đến 36 tháng tuổi"))
                        echo''.$MONAN.'';
                        }?>
                    </td>
                    <td><?php 
                    foreach ($list_thuc_don as $thucdon) {
                        extract($thucdon);
                        if(($THU=="Thứ 5")&&($BUOI=="Buổi sáng")&&($KHOI="Khối từ 25 đến 36 tháng tuổi"))
                        echo''.$MONAN.''; }?> </td>
                    <td>
                        <?php 
                            foreach ($list_thuc_don as $thucdon) {
                                extract($thucdon);
                                if(($THU=="Thứ 6")&&($BUOI=="Buổi sáng")&&($KHOI="Khối từ 25 đến 36 tháng tuổi"))
                                echo''.$MONAN.'';
                        }?>
                    </td>

                </tr>
                <!-- buổi sáng -->
                <!-- buổi trưa-->

                <tr>
                    <th scope="row" class="ogiua">BUỔI TRƯA</th>
                    <td><?php 
                            foreach ($list_thuc_don as $thucdon) {
                                extract($thucdon);
                                if(($THU=="Thứ 2")&&($BUOI=="Buổi trưa")&&($KHOI="Khối từ 25 đến 36 tháng tuổi"))
                                echo''.$MONAN.'';
                        }?>
                    </td>
                    <td><?php 
                            foreach ($list_thuc_don as $thucdon) {
                                extract($thucdon);
                                if(($THU=="Thứ 3")&&($BUOI=="Buổi trưa")&&($KHOI="Khối từ 25 đến 36 tháng tuổi"))
                                echo''.$MONAN.'';
                        }?></td>
                    <td><?php 
                            foreach ($list_thuc_don as $thucdon) {
                                extract($thucdon);
                                if(($THU=="Thứ 4")&&($BUOI=="Buổi trưa")&&($KHOI="Khối từ 25 đến 36 tháng tuổi"))
                                echo''.$MONAN.'';
                        }?>
                    </td>
                    <td><?php 
                            foreach ($list_thuc_don as $thucdon) {
                                extract($thucdon);
                                if(($THU=="Thứ 5")&&($BUOI=="Buổi trưa")&&($KHOI="Khối từ 25 đến 36 tháng tuổi"))
                                echo''.$MONAN.'';
                        }?>
                    </td>
                    <td><?php 
                            foreach ($list_thuc_don as $thucdon) {
                                extract($thucdon);
                                if(($THU=="Thứ 6")&&($BUOI=="Buổi trưa")&&($KHOI="Khối từ 25 đến 36 tháng tuổi"))
                                echo''.$MONAN.'';
                        }?>
                    </td>
                </tr>
                <!-- buổi trưa-->

                <tr>
                    <th scope="row" class="ogiua">BUỔI PHỤ</th>
                    <td>Sữa chua, 150ml </td>
                    <td>Chuối</td>
                    <td>Sữa chua, 150ml</td>
                    <td>Xoài</td>
                    <td>Sữa chua, 150ml</td>
                </tr>
                <tr>
                    <th scope="row" class="ogiua">BUỔI CHIỀU</th>
                    <td><?php 
                            foreach ($list_thuc_don as $thucdon) {
                                extract($thucdon);
                                if(($THU=="Thứ 2")&&($BUOI=="Buổi chiều")&&($KHOI="Khối từ 25 đến 36 tháng tuổi"))
                                echo''.$MONAN.'';
                        }?></td>
                    <td><?php 
                            foreach ($list_thuc_don as $thucdon) {
                                extract($thucdon);
                                if(($THU=="Thứ 3")&&($BUOI=="Buổi chiều")&&($KHOI="Khối từ 25 đến 36 tháng tuổi"))
                                echo''.$MONAN.'';
                        }?></td>
                    <td> <?php 
                            foreach ($list_thuc_don as $thucdon) {
                                extract($thucdon);
                                if(($THU=="Thứ 4")&&($BUOI=="Buổi chiều")&&($KHOI="Khối từ 25 đến 36 tháng tuổi"))
                                echo''.$MONAN.'';
                        }?></td>
                    <td><?php 
                            foreach ($list_thuc_don as $thucdon) {
                                extract($thucdon);
                                if(($THU=="Thứ 5")&&($BUOI=="Buổi chiều")&&($KHOI="Khối từ 25 đến 36 tháng tuổi"))
                                echo''.$MONAN.'';
                        }?></td>
                    <td><?php 
                            foreach ($list_thuc_don as $thucdon) {
                                extract($thucdon);
                                if(($THU=="Thứ 6")&&($BUOI=="Buổi chiều")&&($KHOI="Khối từ 25 đến 36 tháng tuổi"))
                                echo''.$MONAN.'';
                        }?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<style>
.aicon-case {
    font-size: 80px;
    color: #fff;
}

.abox h3 {
    color: #fff;
}

.abox h1 {
    color: #444444;
}

.acontent {
    position: relative;
    margin-top: 5px;
    min-height: 5px;
}

.acontent .acards {
    padding: 20px 15px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}

.acontent .acards .acard {
    width: 250px;
    height: 150px;
    background-color: #87CEFF;
    margin: 10px 10px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    border-radius: 8px;
}
</style>