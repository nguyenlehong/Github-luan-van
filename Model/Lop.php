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
?>