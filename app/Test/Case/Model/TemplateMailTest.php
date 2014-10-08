<?php
App::uses('TemplateMail', 'Model');

/**
 * TemplateMail Test Case
 *
 */
class TemplateMailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.template_mail',
		'app.attach_file'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TemplateMail = ClassRegistry::init('TemplateMail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TemplateMail);

		parent::tearDown();
	}

/**
 * testFilterSubject method
 *
 * @return void
 */
	public function testFilterSubject() {
		$this->markTestIncomplete('testFilterSubject not implemented.');
	}

/**
 * testFilterName method
 *
 * @return void
 */
	public function testFilterName() {
		$this->markTestIncomplete('testFilterName not implemented.');
	}

/**
 * testFilterBody method
 *
 * @return void
 */
	public function testFilterBody() {
		$this->markTestIncomplete('testFilterBody not implemented.');
	}

}
