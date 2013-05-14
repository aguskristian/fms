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
    	            $data['query2'] = $this->asset_models->dropdown_unit();

                    
    $this->load->view('pmi/pmi_input_data', $data);
    }
//-----------------------------------------------------------------------------------------------------------------
function add_pmi(){
      $data = array('id_pmi'            => $this->input->post('id_pmi'),
           			'equipment'         => $this->input->post('equipment'),
					'type_model'        => $this->input->post('type_model'),
                    'no_inventory'      => $this->input->post('no_inventory'),
					'unit_nama'         => $this->input->post('unit_nama'),
                    'no_wo'             => $this->input->post('no_wo'),
                    'tanggal'           => $this->input->post('tanggal'),
                    'mulai'             => $this->input->post('mulai'),
                    'selesai'           => $this->input->post('selesai'));
					
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
 	function edit_pmi($id)
				{
					 #scrit untuk memanggil data yang berada di database
					 if ($this->ag_auth->restrict('user',TRUE))
					 $query                     = $this->asset_models->edit_pmi($id);
					 $data['fid_pmi']           = $query['id_pmi'];
                     $data['fequipment']        = $query['equipment'];
					 $data['ftype_model']       = $query['type_model'];
                     $data['funit_nama']        = $query['unit_nama'];
					 $data['fno_wo']            = $query['no_wo'];
                     $data['fno_inventory']     = $query['no_inventory'];
					 $data['ftanggal']          = $query['tanggal'];
					 $data['fmulai']            = $query['mulai'];
                     $data['fselesai']          = $query['selesai'];
					 
					
					
					#script dropdown an menuju ke function dropdown_unit_repot di asset_models
					$data['query2'] = $this->asset_models->dropdown_unit();
                     
					#memanggil view 'report_edit_data' 
					$this->load->view('pmi/pmi_edit_data',$data);
 				}
 //--------------------------------------------------------------------------------------------------------------------
 	function delete_pmi($id)
				{
        			if ($this->ag_auth->restrict('user',TRUE))
					#$id = $this->input->post('asset_genfas_id');
					#echo $id;
					
					#menuju ke function delete_location di asset_models
					$this->asset_models->delete_pmi($id);
					
					#dialihkan ke function tabel_location di controllerslc
					redirect('controllerspmi/tabel_pmi');
        			
    			}
 //--------------------------------------------------------------------------------------------------------------------
 	function submit()
    			{
					if ($this->ag_auth->restrict('user',TRUE))
					
					#menyimpan nilai input di file sementara dan menyimpan ke field database
                    $id_pmi        = $this->input->post('id_pmi');
					$equipment     = $this->input->post('equipment');
					$type_model    = $this->input->post('type_model');
					$unit_nama     = $this->input->post('unit_nama');
                   	$no_wo         = $this->input->post('no_wo');
                   	$no_inventory  = $this->input->post('no_inventory');
                   	$tanggal       = $this->input->post('tanggal');
                   	$mulai         = $this->input->post('mulai');
                   	$selesai       = $this->input->post('selesai');
					
                    $data = array(
            		'id_pmi'=>$id_pmi,
                	'equipment'=>$equipment,
                	'type_model'=>$type_model,
                	'unit_nama'=>$unit_nama,
                	'no_wo'=>$no_wo,	
                	'no_inventory'=>$no_inventory,
                    'tanggal'=>$tanggal,
                    'mulai'=>$mulai,
                    'selesai'=>$selesai);
	
            					
					#script update berdasarkan 'id' terus menyimpan data 'id' yang di update ke database
					$this->db->where('id_pmi',$id_pmi);
					$this->db->update('pmi',$data);
					
				 	#script mengarahkan ke tabel_asset
					redirect('controllerspmi/tabel_pmi');
				}		
//---------------------------------------------------------------------------------------------------------------------
    }
    
?>