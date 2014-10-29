				<br class="clear">
			
<!-- Footer -->	
			<!--フッターを幅いっぱいにする為のボックス -->
			<div id="footerbg">			
				<div id="footer">

					<?php dynamic_sidebar( 'footer-widget1' ); ?>
					
					<p class="copy">
					<a href="<?php echo get_option( 'siteurl' ); ?>/wpweb/en/privacy-policy/">
						Privacy policy
					</a>　｜　
					<a href="<?php echo get_option( 'siteurl' ); ?>/wpweb/en/mission/organization-overview/#contact">
						   Contact
					</a>
					</br>
						Copyright (c) 2003 - 2014 NPO PANGAEA. All Rights Reserved.

					</p>

				</div><!-- /#footer -->
			</div><!-- /#footerbg -->
		</div><!-- /#wrapper -->
	</div><!-- /#page -->
<?php wp_footer(); ?>
</body>
</html>