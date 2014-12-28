<?php
/****************************************

	banner.php
*****************************************/
?>
<div id="banner">
	<div id="banner-link">
		<a href="http://www.pangaean.org/blog/japanese/">
			<img width="120" alt="blog" src="<?php bloginfo('template_directory') ?>/images/button_blog_jp.gif">
		</a>
		<a href="http://www.pangaean.org/project/ymcprj/">
			<img width="120" alt="ymc" src="<?php bloginfo('template_directory') ?>/images/button_ymc_jp.gif">
		</a>
		<a href="http://www.pangaean.org/iconsurvey/survey_top.php?browserlang=ja">
			<img width="120" alt="survey" src="<?php bloginfo('template_directory') ?>/images/button_survey_jp.gif">
		</a>
	</div>
	
	<div id="nl_registration">
		<form method="post" action="http://regist.combzmail.jp/adddel.cgi">

		<table width="180" border="1" cellspacing="0" cellpadding="2" height="34" bordercolor="#999">
		<tr><td class="nls_title" height="23" valign="middle" bgcolor="#eca60f">
		<center><font color="#333333"  ><b>ニュースレター配信登録</b></font></center>
		<input type="hidden" name="mode" value="add"/>
		<input type="hidden" name="event" value="hp"/>
		<input type="hidden" name="magid" value="s1sj"/>
		</td></tr>
		<tr><td height="23" bgcolor="#fbfaf5">
		<table width="100%" border="0" cellpadding="5" cellspacing="5">
		 <tr><td >毎月１回のパンゲアニュースレターを購読ご希望の方は、フォームにメールアドレスとお名前を入力し、送信ボタンを押してください。</td></tr>
		 <tr align="right"><td>ﾒｰﾙｱﾄﾞﾚｽ 
		   <input type="text" name="email" size="20" maxlength="200" style="width:150px"/></td></tr>
		 <tr align="right"><td>お名前 
		   <input type="text" name="name" size="20" maxlength="50" style="width:150px"/></td></tr>
		 <tr align="right"><td><input type="submit" name="submit" value="送信"/></td></tr>
		<tr><td ><span style="font: 10px bold; ">*登録の変更と解除は
		<br>
		<a href="http://www.pangaean.org/common/japanese/newsletter/index/index_newsletter_change.html">
		<b>ここをクリック</b></a></span></td></tr>
		</table>
		</td></tr>
		</table>
		</form>
	</div>
</div><!--/#banner-->
