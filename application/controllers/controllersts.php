<?php 
class Controllersts extends CI_Controller
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
	function tambah_ts() 
				{	
					if ($this->ag_auth->restrict('user',TRUE))
					#script dropdown yang menuju ke functions
					$data['query'] = $this->asset_models->dropdown_kode_akun();
					
					#memanggil view 'troubleshooting_input_data'
					$this->load->view('troubleshooting/troubleshooting_input_data',$data);
				}
	//=================================================================================================	
	function addts()
				{
					if ($this->ag_auth->restrict('user',TRUE))
					#menyimpan nilai input di file sementara dan menyimpan ke field database
					$data = array(
					'asset_tabel_kode_akun'=>$this->input->post('asset_tabel_kode_akun'),
					'troubleshooting_masalah'=>$this->input->post('troubleshooting_masalah'));
						
					#menuju ke function addts di asset_models
					$this->asset_models->addts($data);
					#dialihkan ke function ts_tabel di controllersts
					redirect('controllersts/ts_tabel');
				}
	//=================================================================================================	
	function ts_tabel()
				{
				if ($this->ag_auth->restrict('user',TRUE))
				#menuju ke function ts_tabel di asset_models
				$data['records'] = $this->asset_models->ts_tabel();
				
				#memanggil view troubleshooting_tabel_data
				$this->load->view('/troubleshooting/troubleshooting_tabel_data',$data);
				}
}
	