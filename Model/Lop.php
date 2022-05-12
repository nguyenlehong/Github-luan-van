<?php
function insert_khoi($ten_khoi){
	$sql="insert into khoi(KHOI) values('$ten_khoi')";
	pdo_execute($sql);
}
function load_all_khoi(){
	$sql="select * from khoi ";
	$list=pdo_query($sql);
	return $list; 
}
function load_all_thang(){
	$sql="select * from thang ";
	$list=pdo_query($sql);
	return $list; 
}

function insert_nam_hoc($namhoc){
	$sql="insert into nam_hoc(NAMHOC) values('$namhoc')";
	pdo_execute($sql);
}
function update_nam($namhoc,$tt){
	$sql="UPDATE nam_hoc SET nam_hoc.TRANGTHAI='".$tt."' WHERE nam_hoc.NAMHOC=".$namhoc;
	pdo_execute($sql);
}
function load_all_nam_hoc(){
	$sql="SELECT * from nam_hoc order by NAMHOC desc";
	$list=pdo_query($sql);
	return $list; 
}
function load_1_nam($NAMHOC){
	$sql="SELECT * FROM nam_hoc where nam_hoc.NAMHOC=".$NAMHOC;
	$list=pdo_query($sql);
	return $list; 
}
function load_1_nam_hien_an($NAMHOC){
	$sql="select * from nam_hoc where nam_hoc.NAMHOC=".$NAMHOC;
	$list=pdo_query_one($sql);
	return $list; 
}

function insert_lop($tenlop,$KHOI,$NAMHOC){
	$sql="insert into lop(L_TEN,KHOI,NAMHOC) values('$tenlop','$KHOI','$NAMHOC')";
	pdo_execute($sql);
}

function load_all_lop(){
	$sql="select * from lop ";
	$list=pdo_query($sql);
	return $list; 
}
function load_all_lop2($CB_ID){
	$sql="SELECT *
	FROM can_bo INNER JOIN phan_cong
	on can_bo.CB_ID = phan_cong.CB_ID
	INNER JOIN lop
	on lop.L_ID =phan_cong.L_ID 
    INNER JOIN nam_hoc
    on nam_hoc.NAMHOC = lop.NAMHOC
 
	WHERE nam_hoc.TRANGTHAI='hien' and  can_bo.CB_ID=".$CB_ID;
	$list=pdo_query($sql);
	return $list; 
}
function load_all_lop_pc(){
	$sql="SELECT *
	from nam_hoc INNER JOIN lop
	on nam_hoc.NAMHOC = lop.NAMHOC
	WHERE nam_hoc.TRANGTHAI='hien'";
	$list=pdo_query($sql);
	return $list; 
}

function load_lop_thuoc_khoi($KHOI){
	$sql="select * from lop where 1";
	if($KHOI!=""){
	$sql.=" and KHOI ='".$KHOI."'";	
	}
	$sql.=" order by L_ID desc";
	
	$list=pdo_query($sql);
	return $list; 
}
function load_lop_thuoc_nam($NAMHOC){
	$sql="select * from lop where 1";
	if($NAMHOC!=""){
	$sql.=" and NAMHOC ='".$NAMHOC."'";	
	}
	$sql.=" order by L_ID desc";
	
	$list=pdo_query($sql);
	return $list; 
}

function load_tre_thuoc_lop($L_ID){
	$sql="select *
			FROM lop INNER JOIN lop_tre
			ON lop.L_ID=lop_tre.L_ID
			INNER JOIN tre
			ON tre.T_ID=lop_tre.T_ID 
			where lop.L_ID=".$L_ID;
	
	$list=pdo_query($sql);
	return $list; 
}
function load_all_lop_theo_cb($CB_ID){
	$sql ="SELECT *
		FROM can_bo INNER JOIN phan_cong
		on can_bo.CB_ID = phan_cong.CB_ID
		INNER JOIN lop
		on lop.L_ID =phan_cong.L_ID
		WHERE can_bo.CB_ID=".$CB_ID;
	$list=pdo_query($sql);
	return $list; 
}

function chi_so_tre_thuoc_lop($L_ID){
	$sql="SELECT lop.L_TEN,tre.T_HOTEN,tre.T_NGAYSINH,chi_so_phat_trien.CHIEUCAO,chi_so_phat_trien.CANNANG,tre.T_PHAI,chi_so_phat_trien.T_ID
	FROM lop INNER JOIN lop_tre
	on lop.L_ID = lop_tre.L_ID
	INNER JOIN tre
	ON tre.T_ID = lop_tre.T_ID
	INNER JOIN chi_so_phat_trien
	on chi_so_phat_trien.T_ID = tre.T_ID
	WHERE lop.L_ID=".$L_ID;
	
	
	$list=pdo_query($sql);
	return $list; 
}

function load_ten_lop($L_ID){
	$sql="select * from lop where L_ID=".$L_ID;
	$list=pdo_query_one($sql);
	extract($list);
	return $L_TEN; 
}

function insert_khoan_thu($noidung,$ghichu){
	$sql="insert into khoan_thu(KT_NOIDUNG,KT_GHICHU) values('$noidung','$ghichu')";
	pdo_execute($sql);
	
}
function load_all_khoan_thu(){
	$sql="select * from khoan_thu order by KT_ID desc";
	$list=pdo_query($sql);
	return $list; 
}
function capnhat($cc,$cn){
	$sql="update chi_so_phat_trien set CHIEUCAO='".$cc."', CANNANG='".$cn."' where T_ID=".$updateid;
	pdo_execute($sql);
}
?>