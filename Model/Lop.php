<?php
function insert_khoi($ten_khoi){
	$sql="insert into khoi(KHOI) values('$ten_khoi')";
	pdo_execute($sql);
}
function load_all_khoi(){
	$sql="select * from khoi order by KHOI desc";
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
	$sql="select * from lop order by L_ID desc";
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
?>