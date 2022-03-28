<?php
function  insert_can_bo($hoten,$ngaysinh,$phai,$sdt,$email,$diachi){
	$sql="insert into can_bo(CB_HOTEN,CB_NGAYSINH,CB_PHAI,CB_SDT,CB_EMAIL,CB_DIACHI)values('$hoten','$ngaysinh','$phai','$sdt','$email','$diachi')";
	pdo_execute($sql);
}
function load_all_can_bo(){
    $sql="select * from can_bo order by CB_ID desc";
	$list=pdo_query($sql);
	return $list; 
}

function  insert_nhiem_vu($tennv,$motanv){
    $sql="insert into nhiem_vu(NV_TEN,NV_MOTA)values('$tennv','$motanv')";
    pdo_execute($sql);
}
?>