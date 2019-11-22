<?php  

class JurusansController extends AppController{

	public $component = array('Session');

	public function index(){

		$data = $this->Jurusan->find('all');
		$this->set('jurusans',$data);
	}

	public function add(){

		$this->Jurusan->create();
		if($this->Jurusan->save($this->request->data)){
			$this->Session->setFlash('Data Berhasil disimpan');
			$this->redirect('index');
		}

	}

	public function view($id){

		$data = $this->Jurusan->findById($id);
		$this->set('jurusan',$data);

	}

	public function edit($id){

		$data = $this->Jurusan->findById($id);

		if($this->request->is(array('post','put'))){
			$this->Jurusan->id = $id;
			if($this->Jurusan->save($this->request->data)){
				$this->Session->setFlash('Data Berhasil diubah');
				$this->redirect('index');
			}
		}
		$this->request->data = $data;
	}

	public function delete($id){

		$this->Jurusan->id = $id;
		if($this->request->is(array('post','put'))){
			if($this->Jurusan->delete()){
				$this->Session->setFlash('Data Berhasil dihapus');
				$this->redirect('index');
			}
		}
	}
}