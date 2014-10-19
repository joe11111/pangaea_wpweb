<div id="side-navi">
	<div class="widget-area">
		<ul>
			<?php
				$stakeholderSide = Stakeholder::__getInstance($post->ID);
				//side-widgetを呼び出す
				dynamic_sidebar( $stakeholderSide -> getCurenntName() );  
			?>
		</ul>
	</div><!-- /.widget-area -->
	
	<?php 
		get_template_part('banner');
	 ?>
	
</div><!-- /#side -->
				