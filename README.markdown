CodeIgniter-Asset
================

CodeIgniter-Asset is a modular asset linking library with a helper for tidy views. It also aims to get people using absolute web paths for their asset loading instea of a URL which reduces the number of HTTP calls on each page, and means if they use SSL there wont be an issue with secure & non secure pages, etc.

Configuration
-------------

$config['asset_dir'] = Defaults to application directory. Set to folder in which assets/ sits.

$config['asset_url'] = Will normally be your base_url, but could be in a differentl ocation. Full http URL to the asset directories parent.

Usage
-----

Include a JS file from /assets/js/jquery/jquery.ajaxify.js

	<?= js('jquery/jquery.ajaxify.js'); ?>

Get the full site URL for an image on your site

	<?=image_url('logo.gif');?>

Get a CSS file from within a module:

	<?= css('somefile.css', 'news');?>

Get only the relative web-path to a CSS file:

	<?= css_path('style.css'); ?>


Extra
-----

If you'd like to request changes, report bug fixes, or contact
the developer of this library, email <email@philsturgeon.co.uk>
