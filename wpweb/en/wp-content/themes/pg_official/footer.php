				<br class="clear">
			
<!-- Footer -->	
			<!--フッターを幅いっぱいにする為のボックス -->
			<div id="footerbg">			
				<div id="footer">

					<?php dynamic_sidebar( 'footer-widget1' ); ?>
					
					<p class="copy">
						Privacy policy   |  Contact</br>
						Copyright (c) 2003 - 2014 NPO PANGAEA. All Rights Reserved.
						<!--
						&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
						Theme Design by <a href="http://www.webcreatormana.com/">Mana</a> 
						from <a href="http://www.webcreatorbox.com/">Webクリエイターボックス</a>
						-->
					</p>

				</div><!-- /#footer -->
			</div><!-- /#footerbg -->
		</div><!-- /#wrapper -->
	</div><!-- /#page -->
<?php wp_footer(); ?>
</body>
</html>