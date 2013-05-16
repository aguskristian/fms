<?php

	class Controllersinventory extends CI_Controller 
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
//==============================================INVENTORY=============================================================**
            
			function inventory() 
				{	if ($this->ag_auth->restrict('user',TRUE))
					#script dropdown an menuju ke function
				$data['query2'] = $this->asset_models->dropdown_unit();
					
					#memanggil view 'asset_input_data'
					$this->load->view('inventory/inventory_input_data',$data);
				}
			
			//-------------------------------------------------------------------------------------------------------
			function add_inventory()
    			{

					#menyimpan nilai input di file sementara dan menyimpan ke field database
       		 		$data = array(
                    'id_inventory'          => $this->input->post('id_inventory'),
           			'peralatan'             => $this->input->post('peralatan'),
					'no_inventory'          => $this->input->post('no_inventory'),
					'type_model'            => $this->input->post('type_model'),
                    'no_seri'               => $this->input->post('no_seri'),
                    'tahun_perolehan'       => $this->input->post('tahun_perolehan'),
                    'unit_nama'             => $this->input->post('unit_nama'),
                    'user'                  => $this->input->post('user'),
                    'main_trouble'          => $this->input->post('main_trouble'),
                    'date_trouble'          => $this->input->post('date_trouble'),
                    'sb'                    => $this->input->post('sb'),
                    'ur'                    => $this->input->post('ur'),
                    'scrp'                  => $this->input->post('scrp'),
                    'remaks'                => $this->input->post('remaks'));
                    
     
					
					#menuju ke function add_asset di asset_models
					$this->asset_models->add_inventory($data);
					
					#dialihkan ke function tabel_asset di controllersasset
					redirect('controllersinventory/tabel_inventory');
	}
			
			//-------------------------------------------------------------------------------------------------------
			function tabel_inventory()
    			{	
					if ($this->ag_auth->restrict('user',TRUE))
					#menuju ke function tabel_asset di asset_models
					$data['records'] = $this->asset_models->tabel_inventory();
					
					#memanggil view 'asset_tabel_data'
					$this->load->view('inventory/inventory_tabel_data',$data);
    			}
				
		
			//-------------------------------------------------------------------------------------------------------
			function delete_inventory($id)
				{
        			if ($this->ag_auth->restrict('user',TRUE))
					#$id = $this->input->post('asset_genfas_id');
					#echo $id;
					
					#menuju ke function tabel_asset di asset_models
					$this->asset_models->delete_inventory($id);
					
					#dialihkan ke function tabel_asset di controllersasset
					redirect('controllersinventory/tabel_inventory');
        			
    			}
			//-------------------------------------------------------------------------------------------------------
			function edit_inventory($id)
				{
					 #scrit untuk memanggil data yang berada di database
					 if ($this->ag_auth->restrict('user',TRUE))
                     $data['query2'] = $this->asset_models->dropdown_unit();
                     
					 $query = $this->asset_models->edit_inventory($id);
					 $data['fid_inventory']    = $query['id_inventory'];
					 $data['fperalatan']       = $query['peralatan'];
					 $data['fno_inventory']    = $query['no_inventory'];
					 $data['ftype_model']      = $query['type_model'];
					 $data['fno_seri']         = $query['no_seri'];
                     $data['tahun_perolehan']  = $query['tahun_perolehan'];
                     $data['fno_seri']         = $query['no_seri'];
                     $data['ftahun_perolehan'] = $query['tahun_perolehan'];
                     $data['funit_nama']       = $query['unit_nama'];
                     $data['fuser']            = $query['user'];
					 $data['fmain_trouble']    = $query['main_trouble'];
					 $data['fdate_trouble']    = $query['date_trouble'];
					 $data['fsb']              = $query['sb'];
                     $data['fur']              = $query['ur'];
                     $data['fscrp']            = $query['scrp'];
                     $data['fremaks']          = $query['remaks'];
					#script dropdown an menuju ke function dropdown_unit_repot di asset_models
					$data['query2'] = $this->asset_models->dropdown_unit();
					 
					#memanggil view 'report_edit_data' 
					$this->load->view('inventory/inventory_edit_data',$data);
 				}
				
			//-------------------------------------------------------------------------------------------------------
		function submit()
    			{
					if ($this->ag_auth->restrict('user',TRUE))
					
					#menyimpan nilai input di file sementara dan menyimpan ke field database
					
                    $id_inventory           = $this->input->post('id_inventory');
					$peralatan              = $this->input->post('peralatan');
					$no_inventory           = $this->input->post('no_inventory');
                    $type_model             = $this->input->post('type_model');
					$no_seri                = $this->input->post('no_seri');
                    $tahun_perolehan        = $this->input->post('tahun_perolehan');
                    $unit_nama              = $this->input->post('unit_nama');
                    $user                   = $this->input->post('user');
                    $main_trouble           = $this->input->post('main_trouble');
                    $date_trouble           = $this->input->post('date_trouble');
                    $sb                     = $this->input->post('sb');
                    $ur                     = $this->input->post('ur');
                    $scrp                   = $this->input->post('scrp');
                    $remaks                 = $this->input->post('remaks');
                    
     
					$data = array(
					'id_inventory'     =>$id_inventory,
					'peralatan'        =>$peralatan,
					'no_inventory'     =>$no_inventory,
                    'type_model'       =>$type_model,
                    'no_seri'          =>$no_seri,
                    'tahun_perolehan'  =>$tahun_perolehan,
                    'unit_nama'        =>$unit_nama,
                    'user'             =>$user,
                    'main_trouble'     =>$main_trouble,
                    'date_trouble'     =>$date_trouble,
                    'sb'               =>$sb,
                    'ur'               =>$ur,
                    'scrp'             =>$scrp,
                    'remaks'           =>$remaks);
					#script update berdasarkan 'id' terus menyimpan data 'id' yang di update ke database
					$this->db->where('lokasi_id',$id);
					$this->db->update('lokasi',$data);
					
				 	#script mengarahkan ke tabel_asset
					redirect('controllersinventory/tabel_inventory');
				}
    		//-------------------------------------------------------------------------------------------------------
			
	}
?>