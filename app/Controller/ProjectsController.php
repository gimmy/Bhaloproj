<?php
App::uses('AppController', 'Controller');
/**
 * Projects Controller
 *
 * @property Project $Project
 */
class ProjectsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Project->recursive = 0;
		$this->set('projects', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Project->id = $id;
		if (!$this->Project->exists()) {
			throw new NotFoundException(__('Invalid project'));
		}
		$this->set('project', $this->Project->read(null, $id));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Project->create();

			// Overwrite the user that is creating this Project and add and edit
			// data.
			$now = date('Y-m-d H:i:s');
			$this->request->data['Project']['user_id'] = AuthComponent::user('id');
			$this->request->data['Project']['insertion_date'] = $now;
			$this->request->data['Project']['modified_date']  = $now;

			if ($this->request->data['Project']['sponsor'])
				$this->request->data['Project']['sponsor_added_date'] = $now;
			if ($this->request->data['Project']['verified'])
				$this->request->data['Project']['verification_date'] = $now;

			if ($this->Project->save($this->request->data)) {
				$this->Session->setFlash(__('The project has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.'));
			}
		}
		$countries = $this->Project->Country->find('list');
		$priorities = $this->Project->Priority->find('list');
		$areas = $this->Project->Area->find('list');
		$states = $this->Project->State->find('list');
		$results = $this->Project->Result->find('list');
		$this->set(compact('countries', 'priorities', 'areas', 'states', 'results'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Project->id = $id;
		if (!$this->Project->exists()) {
			throw new NotFoundException(__('Invalid project'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {

                        $now = date('Y-m-d H:i:s');
                        $this->request->data['Project']['modified_date']  = $now;

                        if ($this->request->data['Project']['sponsor'] && ($this->Project->sponsor != true))
                                $this->request->data['Project']['sponsor_added_date'] = $now;
                        if ($this->request->data['Project']['project_verified'] && ($this->Project->project_verified != true))

                                $this->request->data['Project']['verification_date'] = $now;

			if ($this->Project->save($this->request->data)) {
				$this->Session->setFlash(__('The project has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Project->read(null, $id);
		}
		$countries = $this->Project->Country->find('list');
		$priorities = $this->Project->Priority->find('list');
		$areas = $this->Project->Area->find('list');
		$states = $this->Project->State->find('list');
		$results = $this->Project->Result->find('list');
		$this->set(compact('countries', 'priorities', 'areas', 'states', 'results'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Project->id = $id;
		if (!$this->Project->exists()) {
			throw new NotFoundException(__('Invalid project'));
		}
		if ($this->Project->delete()) {
			$this->Session->setFlash(__('Project deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Project was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
