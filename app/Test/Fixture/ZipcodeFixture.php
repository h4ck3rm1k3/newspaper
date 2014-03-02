<?php
/**
 * ZipcodeFixture
 *
 */
class ZipcodeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'zip' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 5, 'key' => 'primary'),
		'city' => array('type' => 'string', 'null' => false, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'state' => array('type' => 'string', 'null' => false, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'latitude' => array('type' => 'float', 'null' => false, 'default' => '0.000000', 'length' => '10,6', 'key' => 'index'),
		'longitude' => array('type' => 'float', 'null' => false, 'default' => '0.000000', 'length' => '10,6', 'key' => 'index'),
		'timezone' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2),
		'dst' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'zip', 'unique' => 1),
			'zip' => array('column' => 'zip', 'unique' => 0),
			'latitude' => array('column' => 'latitude', 'unique' => 0),
			'longitude' => array('column' => 'longitude', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'zip' => 66046,
			'city' => 'Lawrence',
			'state' => 'ks',
			'latitude' => '38.932303',
			'longitude' => '-95.225130',
			'timezone' => -6,
			'dst' => 1
		),
	);
}
