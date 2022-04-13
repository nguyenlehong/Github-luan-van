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
function delete_can_bo($CB_ID){
	$sql="delete from can_bo where CB_ID=".$CB_ID;
	pdo_execute($sql);
}
function  insert_nhiem_vu($tennv,$motanv){
    $sql="insert into nhiem_vu(NV_TEN,NV_MOTA)values('$tennv','$motanv')";
    pdo_execute($sql);
}


function load_all_nhiem_vu(){
	$sql="select * from nhiem_vu order by NV_ID desc";
	$list=pdo_query($sql);
	return $list;
}


function insert_phan_cong($NAMHOC,$L_ID,$NV_ID,$CB_ID){
	$sql="insert into phan_cong(NAMHOC,L_ID,NV_ID,CB_ID)values('$NAMHOC','$L_ID','$NV_ID','$CB_ID')";
    pdo_execute($sql);
}
function load_all_phan_cong(){
	$sql="SELECT  can_bo.CB_ID,can_bo.CB_HOTEN,nhiem_vu.NV_TEN, lop.L_TEN,nam_hoc.NAMHOC
	FROM nam_hoc INNER JOIN phan_cong pc 
	on nam_hoc.NAMHOC = pc.NAMHOC
	INNER JOIN lop 
	on lop.L_ID = pc.L_ID
	INNER JOIN nhiem_vu 
	on nhiem_vu.NV_ID=pc.NV_ID
	INNER JOIN can_bo 
	on can_bo.CB_ID =pc.CB_ID";
	$list=pdo_query($sql);
	return $list;
}
?>