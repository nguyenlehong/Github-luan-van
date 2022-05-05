<?php
if(isset($_SESSION['user'])){
    extract($_SESSION['user']);
   $ngaysinh= $CB_NGAYSINH;
   $formatns = date("d-m-Y",strtotime($ngaysinh));
}

?><div class="contentc">
    <div class=noi-dung-80c>
        <div class="container" style="padding-top:0px">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 mt-5 pt-5">
                    <div class="row z-depth-3">
                        <div class="col-sm-4 bg-info rounded-left">
                            <div class="card-block text-center text-white">
                                <i class="fas fa-user-tie fa-7x mt-5"></i>
                                <h4 class="font-weight-bold mt-4">
                                    <?=$CB_HOTEN?>
                                </h4>
                                <p>ID: <?=$CB_ID?></p>

                                <i class="far fa-edit fa-2x mb-4"></i>
                            </div>
                        </div>
                        <div class="col-sm-8 bg-white rounded-right">
                            <h3 class="mt-3 text-center">Thông tin</h3>

                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="font-weight-bold indam">Ngày sinh:</p>
                                    <h6 class="text-muted"><?=$formatns?></h6>
                                </div>
                                <div class="col-sm-6">
                                    <p class="font-weight-bold indam">Điện thoại:</p>
                                    <h6 class="text-muted"><?=$CB_SDT?></h6>
                                </div>
                            </div>

                            <hr class="bg-primary">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="font-weight-bold indam">Email:</p>
                                    <h6 class="text-muted"><?=$CB_EMAIL?></h6>
                                </div>
                                <div class="col-sm-6">
                                    <p class="font-weight-bold indam">Địa chỉ:</p>
                                    <h6 class="text-muted"><?=$CB_DIACHI?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>