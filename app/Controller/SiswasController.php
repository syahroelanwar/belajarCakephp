<?php  

class SiswasController extends AppController{

	public $component = array('Session');

	public function index(){
		$data = $this->Siswa->find('all');
		$this->set('siswas',$data);
	}

	public function view($id){
		$data = $this->Siswa->findById($id);
		$this->set('siswa',$data);
	}

	public function add(){
		$this->Siswa->create();
		if($this->Siswa->save($this->request->data)){
			$this->Session->setFlash('Data Berhasil disimpan');
			$this->redirect('index');
		}
		$this->set('jurusans',$this->Siswa->Jurusan->find('list'));
	}

	public function edit($id){
		$data = $this->Siswa->findById($id);
		if($this->request->is(array('post','put'))){
			$this->Siswa->id = $id;
			if($this->Siswa->save($this->request->data)){
				$this->Session->setFlash('Data Berhasil diubah');
				$this->redirect('index');
			}
		}
		$this->set('jurusans',$this->Siswa->Jurusan->find('list'));
		$this->request->data = $data;
	}

	public function delete($id){
		$this->Siswa->id = $id;
		if($this->request->is(array('post','put'))){
			if($this->Siswa->delete()){
				$this->Session->setFlash('Data Berhasil dihapus');
				$this->redirect('index');
			}
		}
	}
}