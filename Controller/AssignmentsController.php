<?php
App::uses('AppController', 'Controller');
/**
 * Assignments Controller
 *
 * @property Assignment $Assignment
 * @property PaginatorComponent $Paginator
 */
class AssignmentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

    public function beforeFilter() {
        $this->M = $this->Assignment;
        parent::beforeFilter();
    }

}
