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
function load_all_nam_hoc(){
	$sql="select * from nam_hoc order by NAMHOC desc";
	$list=pdo_query($sql);
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

function load_lop_thuoc_khoi($KHOI){
	$sql="select * from lop where 1";
	if($KHOI!=""){
	$sql.=" and KHOI ='".$KHOI."'";	
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
			ON tre.T_ID=lop_tre.T_ID where lop.L_ID=".$L_ID;
	
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

?>