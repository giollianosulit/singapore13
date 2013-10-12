<?php
class PlaceController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');
 
	public function index() {
		$this->set('place', $this->Place->find('all'));
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
        if ($this->request->is('post')) {
            $this->Place->create();
            if ($this->Place->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your post.'));
        }
    }
}
?>