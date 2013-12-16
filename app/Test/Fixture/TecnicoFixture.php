<?php
/**
 * TecnicoFixture
 *
 */
class TecnicoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cpf' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'data_de_nascimento' => array('type' => 'date', 'null' => true, 'default' => null),
		'salario' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '7,2'),
		'anos_de_experiencia' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'nome' => 'Lorem ipsum dolor sit amet',
			'cpf' => 'Lorem ips',
			'data_de_nascimento' => '2013-12-16',
			'salario' => 1,
			'anos_de_experiencia' => 1,
			'created' => '2013-12-16 16:27:48',
			'modified' => '2013-12-16 16:27:48'
		),
	);

}
