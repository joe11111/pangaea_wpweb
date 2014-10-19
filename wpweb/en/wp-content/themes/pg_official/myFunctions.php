<?php
	
require_once(dirname(__FILE__) . "/Stakeholder.php");
require_once(dirname(__FILE__) . "/domain.php");

$stakeholder = Stakeholder::__getInstance(0);


/*
global $post;
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
}
*/