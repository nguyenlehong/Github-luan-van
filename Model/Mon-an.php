<?php
function insert_loai_mon($ten_loai_mon){
	$sql="insert into loai_mon(LM_TEN) values('$ten_loai_mon')";
	pdo_execute($sql);
}

function delete_loai_mon($LM_ID){
	$sql="delete from loai_mon where LM_ID=".$LM_ID;
	pdo_execute($sql);
}

function load_all_loai_mon(){
	$sql="select * from loai_mon order by LM_ID desc";
	$list=pdo_query($sql);
	return $list; 
}

function insert_mon($ten_mon,$hinh_mon,$mo_ta_mon,$LM_ID){
	$sql="insert into mon(M_TEN,M_HINH,M_MOTA,LM_ID) values('$ten_mon','$hinh_mon','$mo_ta_mon','$LM_ID')";
	pdo_execute($sql);
}
function load_all_mon(){
	$sql="select * from mon order by M_ID desc";
	$list=pdo_query($sql);
	return $list; 
}
function delete_mon_an($M_ID){
	$sql="delete from mon where M_ID=".$M_ID;
	pdo_execute($sql);
}

function load_all_buoi(){
	$sql="select * from buoi";
	$list=pdo_query($sql);
	return $list; 
}
function load_all_thu(){
	$sql="select * from thu";
	$list=pdo_query($sql);
	return $list; 
}
function insert_thuc_don($khoi,$buoi,$thu,$mon){
	$sql="insert into thuc_don(KHOI,BUOI,THU,MONAN) values('$khoi','$buoi','$thu','$mon')";
	pdo_execute($sql);
}
function load_mon_theo_loai2($LM_ID){
	$sql="select * from mon where LM_ID=".$LM_ID;
	$list=pdo_query($sql);
	return $list; 
}
function load_mon_thuoc_loai_mon($LM_ID){
	$sql="select * from mon where 1";
	if($LM_ID>0){
	$sql.=" and LM_ID ='".$LM_ID."'";	
	}
	$sql.=" order by LM_ID desc";
	$list=pdo_query($sql);
	return $list; 
}

function load_ten_loai_mon($LM_ID){
	$sql="select * from loai_mon where LM_ID=".$LM_ID;
	$list=pdo_query_one($sql);
	extract($list);
	return $LM_TEN; 
}
function load_all_thuc_don(){
	$sql="select * from thuc_don";
	$list=pdo_query($sql);
	return $list; 
}
?>