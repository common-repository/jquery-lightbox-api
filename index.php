<?php
/*
Plugin Name: jQuery lightBox API
Description: Simple PHP wrapper for jQuery lightBox JS call. Bundled together with all needed files.
Author: Patrik Bóna
Author URI: http://www.mrhead.sk/
Version: 0.1.1
*/

function jquery_lightbox_add_scripts() {
	wp_enqueue_script('jquery-lightbox', plugins_url('jquery-lightbox-api/js/jquery.lightbox-0.5.js'), array('jquery'), false, true);
	wp_enqueue_style('jquery-lightbox-css', plugins_url('jquery-lightbox-api/css/jquery.lightbox-0.5.css'));
}
add_action('template_redirect', 'jquery_lightbox_add_scripts');

function jquery_lightbox($selectors) {
	if(!is_array($selectors))
		$selectors = array($selectors);
?>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('<?php echo array_shift($selectors);?>')<?php foreach($selectors as $selector) { ?>.add('<?php echo $selector; ?>')<?php } ?>.lightBox({
				imageLoading: '<?php echo plugins_url('/jquery-lightbox-api/images/'); ?>lightbox-ico-loading.gif',
	            imageBtnClose: '<?php echo plugins_url('/jquery-lightbox-api/images/'); ?>lightbox-btn-close.gif',
	            imageBtnPrev: '<?php echo plugins_url('/jquery-lightbox-api/images/'); ?>lightbox-btn-prev.gif',
	            imageBtnNext: '<?php echo plugins_url('/jquery-lightbox-api/images/'); ?>lightbox-btn-next.gif',
	            imageBlank: '<?php echo plugins_url('/jquery-lightbox-api/images/'); ?>lightbox-blank.gif'
			});
		});
	</script>
<?php }