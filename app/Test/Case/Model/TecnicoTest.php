<?php
App::uses('Tecnico', 'Model');

/**
 * Tecnico Test Case
 *
 */
class TecnicoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tecnico'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tecnico = ClassRegistry::init('Tecnico');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tecnico);

		parent::tearDown();
	}

}
