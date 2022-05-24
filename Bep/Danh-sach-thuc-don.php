<div class="content">
    <div class="tieu-de">
        <h3 class="font">Thực đơn toàn trường</h3>
    </div>
    <div class=noi-dung-100>

        <table class="table table-bordered">

            <tbody>
                <tr class="table-primary">
                    <th class="width-table-130 ogiua"></th>
                    <th class="width-table-130 ogiua">THỨ 2 <a href="index.php?c=xoa-thuc-don-thu-2">
                            <ion-icon name="close-circle-outline"></ion-icon>
                        </a>
                    </th>
                    <th class="width-table-130 ogiua">THỨ 3 <a href="index.php?c=xoa-thuc-don-thu-3">
                            <ion-icon name="close-circle-outline"></ion-icon>
                        </a></th>
                    <th class="width-table-130 ogiua">THỨ 4 <a href="index.php?c=xoa-thuc-don-thu-4">
                            <ion-icon name="close-circle-outline"></ion-icon>
                        </a></th>
                    <th class="width-table-130 ogiua">THỨ 5 <a href="index.php?c=xoa-thuc-don-thu-5">
                            <ion-icon name="close-circle-outline"></ion-icon>
                        </a></th>
                    <th class="width-table-130 ogiua">THỨ 6 <a href="index.php?c=xoa-thuc-don-thu-6">
                            <ion-icon name="close-circle-outline"></ion-icon>
                        </a></th>

                </tr>
                <!-- buổi sáng -->
                <tr>
                    <th scope="row" class="ogiua">BUỔI SÁNG</th>
                    <td>
                        <?php
            foreach ($list_thuc_don as $thucdon) {
                extract($thucdon);
                if(($THU=="Thứ 2")&&($BUOI=="Buổi sáng"))
                echo''.$M_TEN.' </br>';
            }   ?>
                    </td>
                    <td>
                        <?php
            foreach ($list_thuc_don as $thucdon) {
                extract($thucdon);
                if(($THU=="Thứ 3")&&($BUOI=="Buổi sáng"))
                echo''.$M_TEN.' </br>';
            }?>
                    </td>
                    <td><?php
                        foreach ($list_thuc_don as $thucdon) {
                        extract($thucdon);
                        if(($THU=="Thứ 4")&&($BUOI=="Buổi sáng"))
                        echo''.$M_TEN.' </br>';
                        }?>
                    </td>
                    <td><?php 
                    foreach ($list_thuc_don as $thucdon) {
                        extract($thucdon);
                        if(($THU=="Thứ 5")&&($BUOI=="Buổi sáng"))
                        echo''.$M_TEN.' </br>';
                        }?> </td>
                    <td>
                        <?php 
                            foreach ($list_thuc_don as $thucdon) {
                                extract($thucdon);
                                if(($THU=="Thứ 6")&&($BUOI=="Buổi sáng"))
                                echo''.$M_TEN.' </br>';
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
                                if(($THU=="Thứ 2")&&($BUOI=="Buổi trưa"))
                                echo''.$M_TEN.' </br>';
                        }?>
                    </td>
                    <td><?php 
                            foreach ($list_thuc_don as $thucdon) {
                                extract($thucdon);
                                if(($THU=="Thứ 3")&&($BUOI=="Buổi trưa"))
                                echo''.$M_TEN.' </br>';
                        }?></td>
                    <td><?php 
                            foreach ($list_thuc_don as $thucdon) {
                                extract($thucdon);
                                if(($THU=="Thứ 4")&&($BUOI=="Buổi trưa"))
                                echo''.$M_TEN.' </br>';
                        }?>
                    </td>
                    <td><?php 
                            foreach ($list_thuc_don as $thucdon) {
                                extract($thucdon);
                                if(($THU=="Thứ 5")&&($BUOI=="Buổi trưa"))
                                echo''.$M_TEN.' </br>';
                        }?>
                    </td>
                    <td><?php 
                            foreach ($list_thuc_don as $thucdon) {
                                extract($thucdon);
                                if(($THU=="Thứ 6")&&($BUOI=="Buổi trưa"))
                                echo''.$M_TEN.' </br>';
                        }?>
                    </td>
                </tr>
                <!-- buổi trưa-->
                <a href=""></a>
                <tr>
                    <th scope="row" class="ogiua">BUỔI PHỤ</th>
                    <td>Sữa tươi</td>
                    <td>Sữa tươi</td>
                    <td>Sữa tươi</td>
                    <td>Sữa tươi</td>
                    <td>Sữa tươi</td>
                </tr>
                <tr>
                    <th scope="row" class="ogiua">BUỔI CHIỀU</th>
                    <td><?php 
                            foreach ($list_thuc_don as $thucdon) {
                                extract($thucdon);
                                if(($THU=="Thứ 2")&&($BUOI=="Buổi chiều"))
                                echo''.$M_TEN.' </br>';
                        }?></td>
                    <td><?php 
                            foreach ($list_thuc_don as $thucdon) {
                                extract($thucdon);
                                if(($THU=="Thứ 3")&&($BUOI=="Buổi chiều"))
                                echo''.$M_TEN.' </br>';
                        }?></td>
                    <td> <?php 
                            foreach ($list_thuc_don as $thucdon) {
                                extract($thucdon);
                                if(($THU=="Thứ 4")&&($BUOI=="Buổi chiều"))
                                echo''.$M_TEN.' </br>';
                        }?></td>
                    <td><?php 
                            foreach ($list_thuc_don as $thucdon) {
                                extract($thucdon);
                                if(($THU=="Thứ 5")&&($BUOI=="Buổi chiều"))
                                echo''.$M_TEN.' </br>';
                        }?></td>
                    <td><?php 
                            foreach ($list_thuc_don as $thucdon) {
                                extract($thucdon);
                                if(($THU=="Thứ 6")&&($BUOI=="Buổi chiều"))
                                echo''.$M_TEN.' </br>';
                        }?> </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>