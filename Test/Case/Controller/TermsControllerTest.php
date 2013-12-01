<?php
App::uses('TermsController', 'Controller');

/**
 * TermsController Test Case
 *
 */
class TermsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.term',
		'app.course',
		'app.assignment',
		'app.res_folder',
		'app.section',
		'app.section_type',
		'app.enrollment',
		'app.user',
		'app.profile',
		'app.submission',
		'app.courses_user',
		'app.permission',
		'app.permissions_user',
		'app.role',
		'app.roles_user',
		'app.sections_user',
		'app.grade',
		'app.res_file'
	);

}
