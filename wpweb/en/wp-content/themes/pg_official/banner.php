<?php
/****************************************

	banner.php
*****************************************/
?>
<div id="banner">
	<div id="banner-link">
		<a href="http://www.pangaean.org/blog/english/">
			<img width="120" alt="blog" src="<?php bloginfo('template_directory') ?>/images/button_blog_en.gif">
		</a>
		<a href="http://www.pangaean.org/blog/english/archives/4_pangaea_ring/index.html">
			<img width="120" alt="ymc" src="<?php bloginfo('template_directory') ?>/images/button_pangaea_ring_eng.gif">
		</a>
		<a href="http://www.pangaean.org/iconsurvey/survey_top.php?browserlang=en">
			<img width="120" alt="survey" src="<?php bloginfo('template_directory') ?>/images/button_survey_en.gif">
		</a>
	</div>
	
	<div id="nl_registration">
		<form method="post" action="http://regist.combzmail.jp/adddel.cgi">

		<table width="180" border="1" cellspacing="0" cellpadding="2" height="34" bordercolor="#999">
		<tr><td class="nls_title" height="23" valign="middle" bgcolor="#eca60f">
		<center><font color="#333333" ><b>Newsletter Subscription</b></font></center>
		<input type="hidden" name="mode" value="add"/>
		<input type="hidden" name="event" value="hp"/>
		<input type="hidden" name="magid" value="x8tr"/>
		</td></tr>
		<tr><td height="23" bgcolor="#fbfaf5">
		<table width="100%" border="0" cellpadding="5" cellspacing="5">
		 <tr><td>Please fill out the form below and click submit button to subscribe to monthly newsletter of Pangaea.</td></tr>
		 <tr arign="right"><td>Email 
		 	<input type="text" name="email" size="20" maxlength="200" style="width:150px"/></td></tr>
		 <tr arign="right"><td>Name 
		 	<input type="text" name="name" size="20" maxlength="50" style="width:150px"/></td></tr>
		 <tr arign="right"><td><input type="submit" name="submit" value="Submit"/></td></tr>
		<tr><td><span style="font: 11px bold;">*<a href="http://www.pangaean.org/common/english/newsletter/index/index_newsletter_change.html"><b>Click here</b></a> to change or unsubscribe.</span>
		</td></tr>
		 </table>
		</td></tr>
		</table>
		</form>
	</div>
</div><!--/#banner-->
