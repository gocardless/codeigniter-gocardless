<?php

class Test_Merchant extends PHPUnit_Framework_TestCase {

	public function setUp() {

		$this->config = array(
			'app_id'		=> 'abc',
			'app_secret'	=> 'xyz',
			'access_token'	=> 'foo',
		);

    GoCardless::$environment = 'sandbox';
	  GoCardless::set_account_details($this->config);

	}

	/**
	 * Test that find generates the correct url
	 */
	public function testFind() {

		// Create a mock for the get method of GoCardless_Request
		$stub = $this->getMock('GoCardless_Request', array('get'));

		// Static dependency injection
		GoCardless::setClass('Request', get_class($stub));

		// Expected URL
		$merchant_url = GoCardless::$client->base_url . '/api/v1/merchants/123';

		$stub->staticExpects($this->once())
			->method('get')
			->with($this->equalTo($merchant_url));

		GoCardless_Merchant::find('123');

	}

	/**
	 * Test that find_with_client returns the correct object
	 */
	public function testFindWithClient() {

		// Create a mock for the get method of GoCardless_Request
		$stub = $this->getMock('GoCardless_Request', array('get'));

		// Static dependency injection
		GoCardless::setClass('Request', get_class($stub));

		$stub->staticExpects($this->any())
			->method('get')
			->will($this->returnValue(array('id' => '123')));

    $merchant = GoCardless_Merchant::find_with_client(GoCardless::$client, '123');

    $this->assertInstanceOf('GoCardless_Merchant', $merchant);
    $this->assertEquals('123', $merchant->id);

	}

}
