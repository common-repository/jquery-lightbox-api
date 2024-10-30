=== Plugin Name ===
Contributors: patrik bona
Tags: jQuery, lightBox, API
Requires at least: 2.8.0
Tested up to: 3.0.1
Stable tag: 0.1.1

Simple PHP wrapper for jQuery lightBox JS call. Bundled together with all needed files.

== Description ==

This plugin provides PHP function `jquery_lightbox($selectors)`, which generates all needed JS code for calling jQuery lightBox.

For example:

`<?php jquery_lightbox('a img.lightbox'); ?>`


will generate this code:

`<script type="text/javascript"> 
jQuery(document).ready(function() {
	jQuery('a img.lightbox').lightBox({
		imageLoading: 'http://www.example.com/wp-content/plugins/jquery-lightbox-api/images/lightbox-ico-loading.gif',
		imageBtnClose: 'http://www.example.com/wp-content/plugins/jquery-lightbox-api/images/lightbox-btn-close.gif',
		imageBtnPrev: 'http://www.example.com/wp-content/plugins/jquery-lightbox-api/images/lightbox-btn-prev.gif',
		imageBtnNext: 'http://www.example.com/wp-content/plugins/jquery-lightbox-api/images/lightbox-btn-next.gif',
		imageBlank: 'http://www.example.com/wp-content/plugins/jquery-lightbox-api/images/lightbox-blank.gif'
	});
});
</script>` 


So you will just simply call PHP function `jquery_lightbox()` and you don't need to take care about all the pats, or including and uploading anything else.

Plugin is bundled with all need jQuery lightBox files and it will take care about including them...

Also multiple selectors in format `jquery_lightbox(array('selector1', 'selector2', ...))` are supported.

== Installation ==

1. Upload `jquery-lightbox-api` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 0.1.1 =
* Fixed paths to lightBox icons.

= 0.1.0 =
* First release.
