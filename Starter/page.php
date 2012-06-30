<?php 
get_header();
if(is_page('xx')) :
elseif(is_page('yy')) :
else :
	get_template_part( 'loop', 'page' );
endif;
get_sidebar();
get_footer(); 
?>