<?php 
	/**
		* @Author				: Localhost {Ferdhika Yudira}
		* @Email				: fer@dika.web.id
		* @Web					: http://dika.web.id
		* @Date					: 2015-02-16 16:50:07
	**/
namespace Controllers;
use Resources, Models, Library;

class Siswa extends Resources\Controller{
	public function __construct(){
		parent::__construct();
		 // Load model siswa
		$this->siswa = new Models\M_siswa; //M_siswa adalah nama file di folder Models
		$this->request = new Resources\Request; //Ngambil dari folder panada/resource
	}

	public function index(){
		//buat statusnya
		$piew['stt'] = null;
		//aksi tombol simpan
		if($this->request->post('simpan')){
			$nama = $this->request->post('nama');
			$alamat = $this->request->post('alamat');
			$data = array( //sesuaikan dengan field
				'nama' => $nama, 
				'alamat' => $alamat
				);
			$this->siswa->simpan($data);
			$piew['stt'] = 'berhasil disimpan';
		}

		$this->output('siswa/form',$piew);
	}

	public function tampil(){ //tampl semua data
		$piew = array(
			'data' => $this->siswa->tampil(),
			);
		$this->output('siswa/tampil',$piew);
	}

	public function lihat($id=null){ //tampil satu data
		$dat = $this->siswa->lihat($id);
		$piew['data'] = $dat;
		//kalo kosong datanya di redirek
		if(empty($dat)){$this->redirect('siswa/tampil');}

		$this->output('siswa/lihat',$piew); //view
	}

	public function ubah($id=null){
		//buat statusnya
		$piew['stt'] = null;
		//tampilin data
		$dat = $this->siswa->lihat($id);
		$piew['data'] = $dat;
		//kalo kosong datanya di redirek
		if(empty($dat)){$this->redirect('siswa/tampil');}
		//aksi tombol ubah
		if($this->request->post('ubah')){
			$nama = $this->request->post('nama');
			$alamat = $this->request->post('alamat');
			//id
			$idna['id'] = $id;
			$data = array( //sesuaikan dengan field
				'nama' => $nama, 
				'alamat' => $alamat
				);
			$this->siswa->ubah($data,$idna);
			$piew['stt'] = 'berhasil diubah';
			//redirect
			$this->redirect('siswa/tampil');
		}

		$this->output('siswa/ubah',$piew);
	}

	public function hapus($id=null){
		//cek data buat di hapus
		$dat = $this->siswa->lihat($id);
		$piew['data'] = $dat;
		//kalo kosong datanya di redirek
		if(empty($dat)){$this->redirect('siswa/tampil');}
		//hapus
		$this->siswa->hapus($id);
		//redirect
		$this->redirect('siswa/tampil');
	}
}