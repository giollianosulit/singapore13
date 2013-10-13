<?php
class PlaceController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

	public function index() {
		$this->set('place', $this->Place->find('all'));
		for($i = 1; $i<=13; $i++){
		$this->set('day'.$i.'', $this->Place->find('all', array(
			'conditions' => array('dates_iddates' => $i)
			)));
	} 
	}
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid Place'));
		}

		$place = $this->Place->findById($id);
		if (!$place) {
			throw new NotFoundException(__('Invalid Place'));
		}
		$this->set('place', $place);
	}
	public function add() {
		$date = $this->Place->find('list');
		if ($this->request->is('post')) {
			$this->Place->create();
			if ($this->Place->save($this->request->data)) {
				$this->Session->setFlash(__('Your item has been added.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to add item.'));
		}
	}
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$place = $this->Place->findById($id);
		if (!$place) {
			throw new NotFoundException(__('Invalid post'));
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Place->id = $id;
			if ($this->Place->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}

			$this->Session->setFlash(__('Unable to update your post.'));
		}

		if (!$this->request->data) {
			$this->request->data = $place;
		}
	}
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Place->delete($id)) {
			$this->Session->setFlash(__('The post with id: %s has been deleted.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}
	}
}
?>