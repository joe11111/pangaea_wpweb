<?php
class Stakeholder{
	private $queryString;//パラメータStakeholderに格納された値
	private $stakeholderNameArray;//すべてのステークホルダー名
	private $usableStakeholderArray;//ページに関連付けられたステークホルダー名
	private $currentName;
	private $colorArray;
	private $symbolColor;
	public $postid;
	
	public static function __getInstance($postId){
		/*
		static $self;
		if ($self === null) {
			$self = new self($postId);
		}
		return $self;
		*/
		static $self;
		$self = new self($postId);
		return $self;
	}
	//コンストラクタ
	private function __construct($postId){
//		global $post;
		$this -> postid = $postId;
//		$this -> queryString = $paramQueryStr;		//$_REQUEST["stakeholder"];
		$this -> queryString = $_REQUEST["stakeholder"];
		$this -> stakeholderNameArray = array("stakeholder_general","stakeholder_partner","stakeholder_actsiteoperator","stakeholder_volunteer","stakeholder_membership");
		$customArray = get_post_custom($this -> postid);//($post->ID);
		$this -> usableStakeholderArray = $customArray["Stakeholder"];
//		$this -> currentName= "side-widget-actsiteoperator";
		$this -> currentName = $this -> __initCurenntName();
		$this -> __initSymbolColor();
//		$this -> currentName = $this -> ssstr();
//		$this -> setCurenntName();
	}
	//
	function __initCurenntName(){
//		$setName = $this -> usableStakeholderArray[0];
		if(count($this -> usableStakeholderArray) > 0){
	        foreach($this -> usableStakeholderArray as $key => $value){
	        	if($value == $this -> queryString){
	        		return $value;
	        	}
	    	}
	    	return $this -> usableStakeholderArray[0];
		}else{
			return $this -> usableStakeholderArray[0];
		}
	}
	function __initSymbolColor(){
		$this -> colorArray = array(
			$this -> stakeholderNameArray[0] => "rgb(236,166,15)",
			$this -> stakeholderNameArray[1] => "rgb(199,119,230)",
			$this -> stakeholderNameArray[2] => "rgb(173,227,38)",
			$this -> stakeholderNameArray[3] => "rgb(45,179,189)",
			$this -> stakeholderNameArray[4] => "rgb(238,130,124)"
		);
		if(strlen($this -> colorArray[$this -> currentName])>0){
			$this -> symbolColor = $this -> colorArray[$this -> currentName];
		}else{
			$this -> symbolColor = $this -> colorArray[$this -> stakeholderNameArray[0]];
		}	
	}
	//カレントステークホルダーの値を取得
	function getCurenntName(){
		return $this -> currentName;
	}
	//ステークホルダーの数を返す
	function getStakeholderLength(){
		return count($this -> stakeholderNameArray);
	}
	//引数に対応したステークホルダー名を一つ返す
	function getStakeholderNameOne($num){
		return $this -> stakeholderNameArray[$num];
	}
	//現在のページのカラーを一つ返す
	function getSymbolColor(){
		return $this -> symbolColor;
//		return "rgb(236,166,15)";
	}
	//カラーを一つ引数で指定して返す
	function getColorArrayOne($num){
		return $this -> colorArray[$num];
	}
	
	//postid表示test
	function getIdTest(){
		return $this -> postid;
	}
	//querystr test
//	function getQueryTest(){
//		return $this -> queryString;
//		return "testQuery";
//	}
}
?>