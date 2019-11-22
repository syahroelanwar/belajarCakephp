<?php
App::uses('AppModel', 'Model');
/**
 * Siswa Model
 *
 * @property Jurusan $Jurusan
 */
class Siswa extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Jurusan' => array(
			'className' => 'Jurusan',
			'foreignKey' => 'jurusan_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
