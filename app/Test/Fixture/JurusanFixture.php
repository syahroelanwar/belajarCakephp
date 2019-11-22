<?php
/**
 * Jurusan Fixture
 */
class JurusanFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'nama_jurusan' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'nama_jurusan' => 'Lorem ipsum dolor sit amet'
		),
	);

}
