<?php
App::uses('AppModel', 'Model');
/**
 * Zipcode Model
 *
 */
class Zipcode extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'zip';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'zip';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'zip' => array(
			'postal' => array(
				'rule' => array('postal', null, 'us'),
				'allowEmpty' => false,
				'required' => true,
			),
		),
		'city' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				'allowEmpty' => false,
				'required' => true,
			),
		),
		'state' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				'allowEmpty' => false,
				'required' => true,
			),
		),
		'latitude' => array(
			'between' => array(
				'rule' => array('range', -90, 90),
				'allowEmpty' => false,
				'required' => true,
			),
		),
		'longitude' => array(
			'blank' => array(
				'rule' => array('range', -180, 180),
				'allowEmpty' => false,
				'required' => true,
			),
		),
		'timezone' => array(
			'between' => array(
				'rule' => array('range', -24, 24),
				'allowEmpty' => false,
				'required' => true,
			),
		),
	);
}
