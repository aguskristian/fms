<?php

	class Controllerspmi extends CI_Controller 
		{
			function __construct()
    			{
					parent::__construct();
					#memanggil helper 'form','array'
					$this->load->helper(array('form', 'url'));
					#memanggil model 'asset_models'
					$this->load->model('asset_models');
					#memanggil library 'ag_auth'
					$this->load->library('ag_auth');
					//$this->ag_auth->restrict('admin',TRUE);
				}
                
//==============================================PMI==============================================================
function pmi(){
     if ($this->ag_auth->restrict('user',TRUE))
					#script dropdown an menuju ke function
					$data['action'] = $this->asset_models->dropdown_action();
					
    $this->load->view('pmi/pmi_input_data',$data);
    }
//-----------------------------------------------------------------------------------------------------------------
function add_pmi(){
      $data = array('id_pmi'            => $this->input->post('id_pmi'),
           			'equipment'         => $this->input->post('equipment'),
					'type_model'        => $this->input->post('type_model'),
					'unit_lokasi'       => $this->input->post('unit_lokasi'),
                    'no_wo'             => $this->input->post('no_wo'),
                    'Activities'        => $this->input->post('activities'),
                    'tanggal'           => $this->input->post('tanggal'),
                    'mulai'             => $this->input->post('mulai'),
                    'selesai'           => $this->input->post('finish'));
					
					$this->asset_models->add_pmi($data);
					
					redirect('controllerspmi/pmi');
}
//--------------------------------------------------------------------------------------------------------------------
function tabel_pmi()
  	{	
	if ($this->ag_auth->restrict('user',TRUE))
	#menuju ke function tabel_asset di asset_models
	$data['records'] = $this->asset_models->tabel_pmi();
	#memanggil view 'asset_tabel_data'
	$this->load->view('pmi/pmi_tabel_data',$data);
 	}
 //--------------------------------------------------------------------------------------------------------------------		
	}
?>