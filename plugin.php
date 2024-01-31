<?php
/**
 * Plugin Name: Force using PclZip
 * Plugin URI: https://github.com/aaronjorbin/force-pclzip
 * Description:  Bypass the use of ZipArchive and force your site to use PclZip.
 * Version: 0.1.0
 * Author: Aaron Jorbin
 * Author URI: https://aaron.jorb.in
 * Tested up to: 6.4.3
 */

 // if this file is called directly, abort.
 if ( ! defined( 'WPINC' ) ) {
	 die;
 }

 add_filter( 'unzip_file_use_ziparchive', '__return_false' );

