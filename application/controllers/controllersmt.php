<?php 
class Controllersmt extends CI_Controller
{
	function __construct()
    			{
					parent::__construct();
					#memanggil model 'asset_models'
					$this->load->model('asset_models');
					#memanggil library 'ag_auth'
					$this->load->library('ag_auth');
				}
	//=================================================================================================
	function tambah_mt() 
				{
					if ($this->ag_auth->restrict('user',TRUE))
					#script dropdown an menuju ke function
					$data['query'] = $this->asset_models->dropdown_kode_akun3();
					
					#memanggil view maintenance_input_data
					$this->load->view('maintenance/maintenance_input_data',$data);
				}
	//=================================================================================================	
	function addmt()
				{
					if ($this->ag_auth->restrict('user',TRUE))
					#menyimpan nilai input di file sementara dan menyimpan ke field database
					$data = array(
					'asset_tabel_kode_akun'=>$this->input->post('asset_tabel_kode_akun'),
					'maintenance_nama'=>$this->input->post('nama'),
                    'testis'=>$this->input->post('testis'),
					'maintenance_waktu'=>$this->input->post('waktu'));
						
					#menuju ke function addmt di asset_models
					$this->asset_models->addmt($data);
					#dialihkan ke function mt_tabel di controllersts
					redirect('controllersmt/mt_tabel');
				}
	//=================================================================================================	
	function mt_tabel()
				{
				if ($this->ag_auth->restrict('user',TRUE))
				#menuju ke function mt_tabel di asset_models
				$data['records'] = $this->asset_models->mt_tabel();
				
				#memanggil view maintenance_tabel_data
				$this->load->view('/maintenance/maintenance_tabel_data',$data);
				}
}
	