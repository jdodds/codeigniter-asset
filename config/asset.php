<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Use Assset Directory
|--------------------------------------------------------------------------
| Whether or not to use a special directory for the assets folder. 
| This is a boolean value.
|
*/

$config['asset_use_dir'] = true;

/*
|--------------------------------------------------------------------------
| Asset Directory Name
|--------------------------------------------------------------------------
|
| Name of the directory (WITH trailing slash) that will hold your assets
|
*/
$config['asset_dir_name'] = 'assets/';

/*
|--------------------------------------------------------------------------
| Asset Directory
|--------------------------------------------------------------------------
|
| Absolute path from the webroot to your CodeIgniter root. Typically this will be your APPPATH,
| WITHOUT a trailing slash
|
|
*/

// This crazy line means it will use the app path whether its in the web root or not
// Feel free to change this to something more normal lookin!
  
$config['asset_dir'] = parse_url(config_item('base_url'), PHP_URL_PATH);

/*
|--------------------------------------------------------------------------
| Asset URL
|--------------------------------------------------------------------------
|
| URL to your CodeIgniter root. Typically this will be your base URL,
| WITHOUT a trailing slash:
|
|	http://example.com/assets
|
*/

// Right now its pointing to the same place as the base_url 
  $config['asset_url'] = config_item('base_url');

/*
|--------------------------------------------------------------------------
| Asset Sub-folders
|--------------------------------------------------------------------------
|
| Names for the img, js and css folders. Can be renamed to anything
|
| asset_img_dir = 'img';
| asset_js_dir = 'js';
| asset_css_dir = 'css';
|
*/
$config['asset_img_dir'] = 'img';
$config['asset_js_dir'] = 'js';
$config['asset_css_dir'] = 'css';

?>