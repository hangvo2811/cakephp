<?php
/**
 * TemplateMailFixture
 *
 */
class TemplateMailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'subject' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 600, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'body' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'status' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'unsigned' => false),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'cc' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1500, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'bcc' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1500, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 600, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'section_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'template_mail_type_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'subject' => 'Lorem ipsum dolor sit amet',
			'body' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'status' => 1,
			'user_id' => 1,
			'created' => '2014-10-02 07:50:55',
			'modified' => '2014-10-02 07:50:55',
			'cc' => 'Lorem ipsum dolor sit amet',
			'bcc' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'section_id' => 1,
			'template_mail_type_id' => 1
		),
	);

}
