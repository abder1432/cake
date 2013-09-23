<?php
/**
 * CommentFixture
 *
 */
class CommentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'key' => 'primary'),
		'post_id' => array('type' => 'biginteger', 'null' => false, 'default' => '0'),
		'author' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'author_email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'author_url' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'author_ip' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'content' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'approved' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'agent' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'parent_id' => array('type' => 'biginteger', 'null' => true, 'default' => null),
		'lft' => array('type' => 'biginteger', 'null' => true, 'default' => null),
		'rght' => array('type' => 'biginteger', 'null' => true, 'default' => null),
		'user_id' => array('type' => 'biginteger', 'null' => false, 'default' => '0'),
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
			'id' => '',
			'post_id' => '',
			'author' => 'Lorem ipsum dolor sit amet',
			'author_email' => 'Lorem ipsum dolor sit amet',
			'author_url' => 'Lorem ipsum dolor sit amet',
			'author_ip' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-09-22 23:55:07',
			'content' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'approved' => 1,
			'agent' => 'Lorem ipsum dolor sit amet',
			'parent_id' => '',
			'lft' => '',
			'rght' => '',
			'user_id' => ''
		),
	);

}
