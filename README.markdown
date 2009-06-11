CodeIgniter-Asset
================

CodeIgniter-Asset is a modular asset linking library with a helper for tidy views.

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
