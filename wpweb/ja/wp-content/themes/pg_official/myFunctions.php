<?php
	
require_once(dirname(__FILE__) . "/Stakeholder.php");
require_once(dirname(__FILE__) . "/domain.php");

$stakeholder = Stakeholder::__getInstance(0);

//$name111 = $stakeholder -> getCurenntName();
/*

//すべてのステークホルダー名
$stakeholderNameArray = array("stakeholder_general","stakeholder_partner","stakeholder_actsiteoperator","stakeholder_volunteer","stakeholder_membership");
//ページに関連付けされたステークホルダ名
$customArray = get_post_custom($post->ID);
$usableStakeholderArray = $customArray["Stakeholder"];


//customテスト
function getPostId(){
	global $post;
	return (string)$post->ID;
}
//全ステークホルダ名を配列で返す
function getStakeholderNameArray(){
	global $stakeholderNameArray;
	return $stakeholderNameArray;
}*/