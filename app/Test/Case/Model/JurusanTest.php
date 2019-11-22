<?php
App::uses('Jurusan', 'Model');

/**
 * Jurusan Test Case
 */
class JurusanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jurusan',
		'app.siswa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Jurusan = ClassRegistry::init('Jurusan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Jurusan);

		parent::tearDown();
	}

}
