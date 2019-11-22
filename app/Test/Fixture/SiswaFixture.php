<?php
/**
 * Siswa Fixture
 */
class SiswaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'nis' => array('type' => 'integer', 'null' => false, 'default' => null),
		'nama' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50),
		'jk' => array('type' => 'text', 'null' => false, 'default' => null),
		'alamat' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100),
		'tgl_lahir' => array('type' => 'date', 'null' => false, 'default' => null),
		'jurusan_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'nis' => 1,
			'nama' => 'Lorem ipsum dolor sit amet',
			'jk' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'alamat' => 'Lorem ipsum dolor sit amet',
			'tgl_lahir' => '2019-11-09',
			'jurusan_id' => 1
		),
	);

}
