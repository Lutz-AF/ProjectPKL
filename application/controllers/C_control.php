<?php
defined('BASEPATH')or exit ("NO direct access script allowed");

class C_control extends CI_Controller {
	public function index(){
		$data['data'] = $this->M_model->tampil_data('hp');
		$this->load->view('V_view',$data);
	}
	public function Edit_data($id){
		$data['data'] = $this->M_model->Tampil_dataEdit($id);
		$this->load->view('V_Edit',$data);
	}

	public function proses_Edit($id){
		$nama_hp = $_POST['nama_hp'];
		$jenis_hp = $_POST['jenis_hp'];
		$tanggal_beli = $_POST['tanggal_beli'];

		if ($jenis_hp == ('sentuh')) {

			$jenis_hp = 'sentuh';

		}else{
			$jenis_hp = 'ketik';
		}

		$data = array('nama_hp' => $nama_hp, 'jenis_hp' => $jenis_hp, 'tanggal_beli' => $tanggal_beli);

		$edit = $this->M_model->Update_data($data,$id);

		if ($edit > 0){
			redirect('C_control/index');
		}
	}

	public function hapus_data($id){

		$hapus = $this->M_model->Hapus_data($id);

			if ($hapus > 0) {
				redirect('C_control/index');
			}else {
				echo "Gagal Dihapus!";
			}
	}

	public function Tambah_data()
	{
		$this->load->view('V_tambah');
	}

	public function proses_Tambah(){
		$nama_hp = $_POST['nama_hp'];
		$jenis_hp = $_POST['jenis_hp'];
		$tanggal_beli = $_POST['tanggal_beli'];

		if ($jenis_hp == ('sentuh')){
			$jenis_hp = 'sentuh';
		}else {
			$jenis_hp = 'ketik';
		}
		$data = array('nama_hp' => $nama_hp,'jenis_hp' => $jenis_hp,'tanggal_beli' => $tanggal_beli);

		$this->M_model->M_Tambah('hp',$data);

		redirect('C_control/index','refresh');
	}
}
?>