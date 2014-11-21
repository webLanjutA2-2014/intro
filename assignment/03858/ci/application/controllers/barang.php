<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function index()
	{
		$this->load->model('transaksi');
		$data['barang'] = $this->transaksi->daftar();
		$this->load->view('daftarBarang', $data);
	}

	public function tambah(){
		if($this->input->post('submit')){
			$data['nama_pengguna'] = $this->input->post('nama');
			$data['no_hp'] = $this->input->post('no_hp');
			$data['keterangan'] = $this->input->post('keterangan');
			$data['no_loker'] = $this->input->post('no_loker');
			$this->load->model('transaksi');
			if($this->transaksi->simpan($data)){
				$this->index();
			}else{
				echo "Iput data gagal";
			}
		}else{
			$this->load->view('form_penitipan');
		}

		
	}
}
