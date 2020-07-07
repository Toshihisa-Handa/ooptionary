<?php

function getUserData($params){
	//DBの接続情報
	include_once('config/database.php');

	//DBコネクタを生成
	$Mysqli = new mysqli($host, $username, $password, $dbname);
	if ($Mysqli->connect_error) {
			error_log($Mysqli->connect_error);
			exit;
	}

	//入力された検索条件からSQl文を生成
	$where = [];
	if(!empty($params['name'])){
		$where[] = "name like '%{$params['name']}%'";
	}
	if(!empty($params['title'])){
		$where[] = "title like '%{$params['title']}%'";
	}
	if(!empty($params['naiyou'])){
		$where[] = "naiyou like '%{$params['naiyou']}%'";
	}
	if($where){
		$whereSql = implode(' AND ', $where);
		$sql = 'select * from user_oops_table where ' . $whereSql ;
	}else{
		$sql = 'select * from user_oops_table';
	}
	
	//SQL文を実行する
	$UserDataSet = $Mysqli->query($sql);

	//扱いやすい形に変える
	$result = [];
	while($row = $UserDataSet->fetch_assoc()){
		$result[] = $row;
	}
	return $result;
}

