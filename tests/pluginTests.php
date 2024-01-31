<?php


use Yoast\PHPUnitPolyfills\TestCases\TestCase;

class pluginTests extends TestCase {

	public function test_unzip_file_use_ziparchive(){
		$use_ziparchive = apply_filters( 'unzip_file_use_ziparchive', true );
		$this->assertFalse( $use_ziparchive );
	}

}
