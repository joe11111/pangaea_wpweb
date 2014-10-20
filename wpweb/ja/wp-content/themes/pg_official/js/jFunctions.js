//各リンクにクラスを追加
function addclassNavigations(stakeholderArray, current){
	addclassMainNavi(stakeholderArray,current);
	addclassSideNavi();
//	addclassTest(stakeholderArray, current);
}
//メインナビゲーションにクラス追加
function addclassMainNavi(stakeholderArray,current){
	for(var i = 0; i < $(".menu-main-navi-container").find(".menu-item").length; i++ ){
		$(".menu-main-navi-container").find(".menu-item").eq(i).addClass(stakeholderArray[i]);
	}
	$(".menu-main-navi-container").find("."+ current).addClass("current-main-navi");
}
//サイドナビゲーションにクラス追加
function addclassSideNavi(){
	$("#side-navi .current-menu-item").parents(".menu").addClass("current-menu");
	//カレントメニューのタイトル部にクラスを追加
	$(".current-menu").parents(".widget-container").find(".menu-title").addClass("current-menu-title");
}
//サイドナビゲーションの各親にリンクを追加
function addLinkSideParent(){
	for(var i = 0; i < $("#side-navi .menu-title").length; i++){
		$("#side-navi .menu-title").eq(i)
			.wrap('<a href="' + $("#side-navi .menu-item:first-child a").eq(i).attr("href") + '"></a> ');
	}
}
//サイドナビゲーション子のリンクを親要素に設定する
function addLinkSideChild(){
	for(var i = 0; i < $("#side-navi .menu-item").length; i++){
		$("#side-navi .menu-item").eq(i)
			.wrap('<a href="' + $("#side-navi .menu-item a").eq(i).attr("href") + '"></a> ');
	}
}
//各ナビゲーションにパラメータ追加
function addParameterNavigations(stakeholderArray,current){
	addParameterMainNavi(stakeholderArray);
	addParameterSideNavi(current);
}
//メインナビゲーションにパラメータ追加
function addParameterMainNavi(stakeholderArray){
	for(var i=0;i<stakeholderArray.length;i++){
		$(".menu-main-navi-container").find("."+stakeholderArray[i]).find("a").attr("href",$(".menu-main-navi-container").find("."+stakeholderArray[i]).find("a").attr("href") + "?stakeholder=" +stakeholderArray[i]);
	}
}
//サイドナビゲーションにパラメータ追加
function addParameterSideNavi(current){
	for(var i=0;i<$("#side-navi a").length;i++){
		$("#side-navi a").eq(i).attr("href",$("#side-navi a").eq(i).attr("href") + "?stakeholder=" + current);
	}
}
//サイドナビゲーションの子要素を非表示にする
function hideMenuItems(){
//currentMenu以外のメニューを非表示
	$("#side-navi .menu:not('.current-menu')").hide();
	//子がひとつだけのメニューは非表示とする
	if($("#side-navi .current-menu .menu-item").length <= 1){
		$("#side-navi .current-menu").hide();
	}
}
//ナビゲーションボタンのCSS変更
function changeBtnExternal(symbolColor){
	changeSideNaviBtnCss(symbolColor);		//サイドナビCSS
}
//メインナビゲーションの外観変更
function changeMainNaviBtnExternal(imageSrc, colorArray ){
	$("#main-navi .current-main-navi a")
		.html('<image src=\"' + imageSrc + '\" alt="">');
	changeMainNaviNotCurrent(colorArray);	//非カレントメインナビ
}
//非カレントメインナビ
function changeMainNaviNotCurrent(colorArray){
//	for(var i = 0; i < $("#main-navi .menu-item:not(.current-main-navi) a").length; i++ ){
	for(var i = 0; i < $("#main-navi .menu-item a").length; i++ ){
		if($("#main-navi .menu-item a").eq(i).parents(".menu-item").hasClass("current-main-navi")){
		}else{
			$("#main-navi .menu-item a").eq(i)
				.html('<div>'+ $("#main-navi .menu-item a").eq(i).text() +'</div>')
				.css("border-radius","4px")
				.css("backgroundColor",colorArray[i])
	//			.css("backgroundColor","rgb(238,130,124)")
			;
		}
	}
}
//サイドナビゲーションボタンのCSS変更
function changeSideNaviBtnCss(symbolColor){
	//side-navi 親リンク
	$("#side-navi .menu-title")
		.css("width","175px")
		.css("margin-top","5px")
		.css("margin-bottom","5px")
		.css("padding","10px")
		.css("border-left-width","7px")
		.css("border-left-style","solid");
	//カレント親
	changeSideNaviParentActiveColor("#side-navi .menu-title.current-menu-title",symbolColor);
	//非カレント親
	changeSideNaviParentPassiveColor("#side-navi .menu-title:not(.current-menu-title)");
	//マウスホバー
	$("#side-navi .menu-title:not(.current-menu-title)").hover(function(){
		changeSideNaviParentActiveColor(this,"rgb(200,200,200)"/*symbolColor*/);
	},function(){
		changeSideNaviParentPassiveColor(this);
	});

	//side-navi 子リンク
	$("#side-navi .menu-item")
		.css("width","161px")
		.css("margin-top","5px")
		.css("margin-bottom","5px")
		.css("padding","10px")
		.css("border-left-width","5px")
		.css("border-left-style","solid");
		//カレントページ
		changeSideNaviItemActiveColor("#side-navi .menu-item.current-menu-item",symbolColor);
		//非カレントページ
		changeSideNaviItemPassiveColor("#side-navi .menu-item:not(.current-menu-item)");
		//マウスホバー
		$("#side-navi .menu-item:not(.current-menu-item)").hover(function(){
			changeSideNaviItemActiveColor(this,"rgb(200,200,200)"/*symbolColor*/);
		},function(){
			changeSideNaviItemPassiveColor(this);
		});
	nl_registration_bgcolor(symbolColor);//バナータイトルカラー
}
//side-navi 親リンクカラー変更
function changeSideNaviParentActiveColor(item,symbolColor){
	$(item)
		.css("backgroundColor","rgb(200,200,200)")
//		.css("border-left-color","rgb(236,166,15)")
		.css("border-left-color",symbolColor)
			.parent("a").css("color","#000");
}
function changeSideNaviParentPassiveColor(item){
	$(item)
		.css("backgroundColor","rgb(100,93,88)")
		.css("border-left-color","rgb(100,93,88)")
			.parent("a").css("color","#fff");
}
//子リンクカラー変更
function changeSideNaviItemActiveColor(item,symbolColor){
	$(item)
		.css("backgroundColor","rgb(200,200,200)")
		.css("border-left-color",symbolColor)
//		.css("border-left-color","rgb(236,166,15)")
			.find("a").css("color","#000");
}
function changeSideNaviItemPassiveColor(item){
	$(item)
		.css("backgroundColor","rgb(100,93,88)")
		.css("border-left-color","rgb(100,93,88)")
			.find("a").css("color","#fff");
}

//banner色変更
function nl_registration_bgcolor(symbolColor){
	$("#nl_registration .nls_title").css("backgroundColor",symbolColor)
		;
}
//フォントサイズmousehover
/*
*/
function changeSizeHover(){
	$("#fontsize").find("img:eq(0), img:eq(2)").mouseenter(function(){
		$(this).css("cursor","pointer");
	}).mouseleave(function(){
		$(this).css("cursor","auto");
	});
}
//フォントサイズボタンクリック
function changeSizeClickEvent(){
	changeSizeHover();
	
	$("#fontsize img").eq(0).click(function(){
		$("#main-content").css("font-size","1.2em");
//		setupShadowCss();
	});
	$("#fontsize img").eq(2).click(function(){
		$("#main-content").css("font-size","0.75em");
//		setupShadowCss();
	});
}

//tableカラーの設定
function setupTablecolor(tablecolor){
	$("#currentcolortable table, #currentcolortable td").css("border-color",tablecolor);
	$("#currentcolortable table .cctBack").css("backgroundColor",tablecolor);
}
//影効果
function setupShadowCss(){
	
	var shadowStartPoint = $("#title-image img").offset();
//	var shadowEndPoint = $("#footerbg").offset();
	$("#content-shadow")

		.css("box-shadow","0px 0px 5px 3px rgba(10,10,10,0.4)")
//		.css("visibility", "hidden")
		.css("z-index","0")
		;

/*
//	$(".menu-main-navi-container").find(".menu-item:not(.current-main-navi)")
	$("#main-navi")	
		.css("position","relative")
		.css("z-index","-1")
		;
*/
	$(".menu-main-navi-container").find(".menu-item:not(.current-main-navi)")
		.css("position","relative")
		.css("z-index","0")
		;
	//カレントタブを全面にする
	$("#title-image img")
		.css("position","relative")
		.css("z-index","0")
	;		
	$(".current-main-navi")
		.css("position","relative")
		.css("z-index","1");
	$("#side-navi")
		.css("position","relative")
		.css("z-index","1");
	$("#main-content")
		.css("position","relative")
		.css("z-index","1");
	$("#footerbg")
		.css("position","relative")
		.css("z-index","2")
	;
}
/*
*/
//コンテンツ内 トピックのCSS設定
function setupTopicCss(symbolColor){
	$("#main-content .topic")
//		.css("border-left-width","5px")
//		.css("border-left-style","solid")
//		.css("padding","2px 12px")
		.css("border-left-color",symbolColor);
//		.css("margin","15px 0px")
		//	background-color:#ebe8de;
}

function appendAAA(str){
	$("H3").append(str);
}
function getPhp(){
	return "\'<?php the_permalink(); ?>\'"
}