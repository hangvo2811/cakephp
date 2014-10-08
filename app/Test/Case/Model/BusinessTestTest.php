<?php
App::uses('BusinessTest', 'Model');

/**
 * BusinessTest Test Case
 *
 */
class BusinessTestTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.business_test'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BusinessTest = ClassRegistry::init('BusinessTest');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BusinessTest);

		parent::tearDown();
	}

}
