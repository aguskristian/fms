<?php
class Controllerslc extends CI_Controller
{
	function __construct()
    			{
					parent::__construct();
					#memanggil model 'asset_models'
					$this->load->model('asset_models');
					#memanggil library 'ag_auth'
					$this->load->library('ag_auth');
				}
//==============================================LOCATION==========================================================**
	
			
			function location() 
				{	
					if ($this->ag_auth->restrict('user',TRUE))
					#script dropdown an menuju ke function 
					$data['query1'] = $this->asset_models->dropdown_kode_akun();
					$data['query2'] = $this->asset_models->dropdown_unit();
					$data['query3'] = $this->asset_models->dropdown_sub_unit();
					
					
					#memanggil view 'asset_input_data'
					$this->load->view('location/location_input_data',$data);
				}
			//-------------------------------------------------------------------------------------------------------
			function add_location()
    			{
       		 		if ($this->ag_auth->restrict('user',TRUE))
					#menyimpan nilai input di file sementara dan menyimpan ke field database
					$data = array('asset_tabel_kode_akun' => $this->input->post('asset_tabel_kode_akun'),
           			'unit_nama' => $this->input->post('unit_nama'),
					'sub_unit_nama'=> $this->input->post('sub_unit_nama'));
 
					#menuju ke function add_location di asset_models
					$this->asset_models->add_location($data);
					#dialihkan ke function tabel_location di controllerslc
					redirect('controllerslc/tabel_location');
    			}
			
			//-------------------------------------------------------------------------------------------------------
			function tabel_location()
    			{
					if ($this->ag_auth->restrict('user',TRUE))
					#menuju ke function tabel_location di asset_models
					$data['records'] = $this->asset_models->tabel_location();
					
					#memanggil view location_tabel_data
					$this->load->view('location/location_tabel_data',$data);
    			}
			//-------------------------------------------------------------------------------------------------------
			function delete_location($id)
				{
        			if ($this->ag_auth->restrict('user',TRUE))
					#$id = $this->input->post('asset_genfas_id');
					#echo $id;
					
					#menuju ke function delete_location di asset_models
					$this->asset_models->delete_location($id);
					
					#dialihkan ke function tabel_location di controllerslc
					redirect('controllerslc/tabel_location');
        			
    			}
			//-------------------------------------------------------------------------------------------------------
			function edit_location($id)
				{
					if ($this->ag_auth->restrict('user',TRUE))
					#script dropdown an menuju ke function
					$data['query1'] = $this->asset_models->dropdown_kode_akun();
					$data['query2'] = $this->asset_models->dropdown_unit();
					$data['query3'] = $this->asset_models->dropdown_sub_unit();
					
					 $query          = $this->asset_models->edit_location($id);
					 $data['fid']    = $query['lokasi_id'];
					 $data['fkode']    = $query['asset_tabel_kode_akun'];
					 $data['funit']    = $query['unit_nama'];
					 $data['fsubunit']    = $query['sub_unit_nama'];
					  
					#script untuk memanggil view location_edit_data  
					$this->load->view('location/location_edit_data',$data);
				}
			//-------------------------------------------------------------------------------------------------------	
			function submit()
    			{
					if ($this->ag_auth->restrict('user',TRUE))
					
					#menyimpan nilai input di file sementara dan menyimpan ke field database
					$id  = $this->input->post('lokasi_id');
					$kode  = $this->input->post('asset_tabel_kode_akun');
					$unit  = $this->input->post('unit_nama');
					$subunit  = $this->input->post('sub_unit_nama');
					$data = array(
					'lokasi_id'=>$id,
					'asset_tabel_kode_akun'=>$kode,
					'unit_nama'=>$unit,
					'sub_unit_nama'=>$subunit);
					
					#script update berdasarkan 'id' terus menyimpan data 'id' yang di update ke database
					$this->db->where('lokasi_id',$id);
					$this->db->update('lokasi',$data);
					
				 	#script mengarahkan ke tabel_asset
					redirect('controllerslc/tabel_location');
				}
			//-------------------------------------------------------------------------------------------------------
			function map_op() 
				{
					if ($this->ag_auth->restrict('user',TRUE))
					#memanggil view asset_op_map
					$this->load->view('location/asset_op_map');
				}
			function map_is() 
				{
					if ($this->ag_auth->restrict('user',TRUE))
					#memanggil view asset_is_map
					$this->load->view('location/asset_is_map');
				}
			function map_cs() 
				{
					if ($this->ag_auth->restrict('user',TRUE))
					#memanggil view asset_cs_map
					$this->load->view('location/asset_cs_map');
				}
			function map_cg() 
				{
					if ($this->ag_auth->restrict('user',TRUE))
					#memanggil view asset_cg_map
					$this->load->view('location/asset_cg_map');
				}
			function map_tech() 
				{
					if ($this->ag_auth->restrict('user',TRUE))
					#memanggil view asset_tech_map
					$this->load->view('location/asset_tech_map');
				}
			function map_fin() 
				{
					if ($this->ag_auth->restrict('user',TRUE))
					#memanggil view asset_fin_map
					$this->load->view('location/asset_fin_map');
				}
			//-------------------------------------------------------------------------------------------------------
	}	
?>