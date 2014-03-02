<?php
App::uses('Zipcode', 'Model');

/**
 * Zipcode Test Case
 *
 */
class ZipcodeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.zipcode'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Zipcode = ClassRegistry::init('Zipcode');
	}

    public function testZip() {
        $zip = $this->Zipcode->find('first');
        $this->assertEquals($zip["Zipcode"]['zip'],'66046');
        //var_dump($zip);
        //return var_dump();
        //$this->
        //$this->assertContains('width: 90%', $this->Zipcode);

    }

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Zipcode);

		parent::tearDown();
	}

}
