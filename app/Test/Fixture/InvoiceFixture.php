<?php
/**
 * InvoiceFixture
 *
 */
class InvoiceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'company_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'product' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 350, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'price' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'vat' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'total' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'company_id' => 1,
			'product' => 'Lorem ipsum dolor sit amet',
			'price' => 1,
			'vat' => 1,
			'total' => 1,
			'created' => '2015-01-15 08:58:34',
			'modified' => '2015-01-15 08:58:34'
		),
	);

}
