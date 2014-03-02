<?php
App::uses('Newspaper', 'Model');

/**
 * Newspaper Test Case
 *
 */
class NewspaperTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.newspaper'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Newspaper = ClassRegistry::init('Newspaper');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Newspaper);

		parent::tearDown();
	}

}
