<?php
App::uses('AppController', 'Controller');
/**
 * Submissions Controller
 *
 * @property Submission $Submission
 * @property PaginatorComponent $Paginator
 */
class SubmissionsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function beforeFilter() {
		$this->M = $this->Submission;
		parent::beforeFilter();
    }

}
