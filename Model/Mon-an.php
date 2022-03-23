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
?>