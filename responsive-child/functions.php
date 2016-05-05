<?php //Opening PHP tag

	register_sidebar( array(
						  'name'          => __( 'Home Widget 4', 'responsive' ),
						  'description'   => __( 'Area 13 - sidebar-home.php - Displays on the Home Page', 'responsive' ),
						  'id'            => 'home-widget-4',
						  'before_title'  => '<div id="widget-title-four" class="widget-title-home"><h3>',
						  'after_title'   => '</h3></div>',
						  'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
						  'after_widget'  => '</div>'
					  ) );

?> 

<?php //Opening PHP tag

	register_sidebar( array(
						  'name'          => __( 'Home Widget 5', 'responsive' ),
						  'description'   => __( 'Area 14 - sidebar-home.php - Displays on the Home Page', 'responsive' ),
						  'id'            => 'home-widget-5',
						  'before_title'  => '<div id="widget-title-five" class="widget-title-home"><h3>',
						  'after_title'   => '</h3></div>',
						  'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
						  'after_widget'  => '</div>'
					  ) );

?> 