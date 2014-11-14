<!DOCTYPE html>
<html lang="ja">
<head>
     <meta charset="UTF-8">
     <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
     <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSSフィード" href="<?php bloginfo('rss2_url'); ?>">
     <meta name="description" content="WordPress 3.0用の無料テーマです。">
     <meta name="keywords" content="WordPress 無料 テーマ, WordPress テーマ, WordPress 3.0 テーマ, WordPress テンプレート, WordPress 無料テンプレート">
 
<!-- External files -->
     <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
 
<!-- Favicon, Thumbnail image -->
     <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
    <?php wp_head(); ?>

<!-- WordPressのjQueryを読み込ませない -->
<?php wp_deregister_script('jquery'); ?>
<script type="text/javascript" src="<?php bloginfo(template_url); ?>/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo(template_url); ?>/js/jFunctions.js"></script>
<?php $stakeholderH = Stakeholder::__getInstance($post->ID); ?>
<script>
$(function(){

	var url = "<?php the_permalink(); ?>";
		
	
	//ページに関連付けられたステークホルダー名
	var stakeholderNameArray = new Array();
	//各ステークホルダーに対応するカラーを配列で取得
	var stakeholderColorArray = new Array();
	"<?php for($i=0; $i< $stakeholderH ->getStakeholderLength() ; $i++){ ?>"
		stakeholderNameArray.push("<?php echo $stakeholderH -> getStakeholderNameOne($i); ?>");
		stakeholderColorArray.push("<?php echo $stakeholderH -> getColorArrayOne($stakeholderH -> getStakeholderNameOne($i)); ?>");
	"<?php } ?>"
		
	//各ナビゲーションにクラスを追加
	addclassNavigations(stakeholderNameArray , "<?php echo $stakeholderH -> getCurenntName(); ?>");
	//サイドメニューの親部分にリンクを追加
	addLinkSideParent();
	//サイドナビの子部分 リンク修正
	addLinkSideChild();
	
	//各ナビゲーションにパラメータ追加
	addParameterNavigations(stakeholderNameArray, "<?php echo $stakeholderH -> getCurenntName(); ?>");
	
	//影を追加
	setupShadowCss();
	
//サイドメニュの子要素を非表示にする
	hideMenuItems();
	
	//メインナビの外観変更
	changeMainNaviBtnExternal(
			"<?php bloginfo('template_directory') ?>/images/MainNaviBtn_<?php echo $stakeholderH -> getCurenntName(); ?>.png" ,
			stakeholderColorArray);
	//ボタンの外観変更
	changeBtnExternal("<?php echo $stakeholderH -> getSymbolColor(); ?>");
	//フォントサイズ変更ボタン
	changeSizeClickEvent();	
	
	setupTopicCss("<?php echo $stakeholderH -> getSymbolColor(); ?>");
	setupTablecolor("<?php echo $stakeholderH -> getSymbolColor(); ?>");//テーブルカラー設定
});
</script>
</head>
 
<body <?php body_class(); ?>>
     <div id="page">
    
    
          <div id="wrapper">
 
<!-- Header -->        
               <div id="header">
                    	<?php 
   						
                    	?>
                    	<div id="logo">
	            			<img src="<?php bloginfo('template_directory') ?>/images/logo.gif" alt="" />
                    	</div><!-- logo -->
                    	<div id="lang-navi">
                    		<div id="fontsize">
	                    		<img width="23" height="18" alt="font-big" src="<?php bloginfo('template_directory') ?>/images/header_font_big.gif">
	                    		<img width="4" height="18" alt="font-big" src="<?php bloginfo('template_directory') ?>/images/whitespacer.gif">
	                    		<img width="23" height="18" alt="font-small" src="<?php bloginfo('template_directory') ?>/images/header_font_small.gif">
                    		</div><!-- fontsize -->
                    		
                    		<a href="http://pangaean.org/wpweb/ja/">
								<img width="54" height="18" alt="Japanese" src="<?php bloginfo('template_directory') ?>/images/header_language_JP.gif">
    						</a>
                    		<a href="http://www.pangaean.org/web/korean/general/generaltop_kr.html">
	                    		<img width="54" height="18" alt="Korean" src="<?php bloginfo('template_directory') ?>/images/header_language_KR.gif">
    						</a>
    						<a href="http://www.pangaean.org/web/german/general/generaltop_de.html">
                    			<img width="54" height="18" alt="Deutsch" src="<?php bloginfo('template_directory') ?>/images/header_language_DE.gif">
                    		</a>
                    		<img width="54" height="18" alt="English" src="<?php bloginfo('template_directory') ?>/images/header_language_EN.gif">
                    	</div><!-- lang-navi -->
                 		

                    
			</div>
<!-- /#header -->

<!--    
-->