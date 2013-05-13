<?php

	class Controllersreport extends CI_Controller 
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
  //=====================================REPORT============================//
  
  function report()
  {
    if ($this->ag_auth->restrict('user',TRUE))
		#script dropdown an menuju ke function
         $data['dropdown_unit'] = $this->asset_models->dropdown_unit_report();
					
    $this->load->view('report/report_input_main', $data);
  } 
 //---------------------------------------------------------------------------//
  function add_report()
  {
    $data ['id_report'] = $this->input->post('id_report');
    $data ['tanggal'] = $this->input->post('tanggal');
    $data ['no_wo'] = $this->input->post('no_wo');
    $data ['peralatan'] = $this->input->post('peralatan');
    $data ['no_inventory'] = $this->input->post('no_inventory');
    $data ['unit'] = $this->input->post('unit');
    $data ['jenis_kerusakan'] = $this->input->post('jenis_kerusakan');
    $data ['tindakan_perbaikan'] = $this->input->post('tindakan_perbaikan');
    $data ['mulai'] = $this->input->post('mulai');
    $data ['selesai'] = $this->input->post('selesai');
    $data ['selisih'] = $this->input->post('selisih');
  
    $this->asset_models->add_report($data);
    redirect ('controllersreport/report');
    }
  //--------------------------------------TABEL REPORT---------------------------//
  function tabel_report()
  	{	
	if ($this->ag_auth->restrict('user',TRUE))
	#menuju ke function tabel_asset di asset_models
	$data['records'] = $this->asset_models->tabel_report();
			
	#memanggil view 'asset_tabel_data'
	$this->load->view('report/report_tabel_data',$data);
 	}
  //--------------------------------------DELETE REPORT----------------------------//
  function delete_report($id)
				{
        			if ($this->ag_auth->restrict('user',TRUE))
					
					#menuju ke function tabel_asset di asset_models
					$this->asset_models->delete_report($id);
					
					#dialihkan ke function tabel_asset di controllersasset
					redirect('controllersreport/tabel_report');
        			
    			}
  //-------------------------------------EDIT REPORT--------------------------------//
  function edit($id)
				{
					 #scrit untuk memanggil data yang berada di database
					 if ($this->ag_auth->restrict('user',TRUE))
					 $query= $this->asset_models->edit_report($id);
					 $data['ftanggal']                  = $query['tanggal'];
					 $data['fno_wo']                    = $query['no_wo'];
					 $data['fperalatan']                = $query['peralatan'];
					 $data['fno_inventory']             = $query['no_inventory'];
                     $data['funit']                     = $query['unit'];
                     $data['fjenis_kerusakan']          = $query['jenis_kerusakan'];
                     $data['ftindakan_perbaikan']       = $query['tindakan_perbaikan'];
                     $data['fstart']                    = $query['mulai'];
                     $data['ffinish']                   = $query['selesai'];
                     $data['fselisih']                  = $query['selisih'];
					 
					
					
					#script dropdown an menuju ke function dropdown_unit_report di asset_models
					$data['query'] = $this->asset_models->dropdown_unit_report();
					 
					#memanggil view 'asset_edit_data' 
					$this->load->view('report/report_edit_data',$data);
 				}
     //----------------------------------------------------------------------------------------------//
     	function submit()
    			{
					
					#menyimpan nilai input di file sementara dan menyimpan ke field database
					$tanggal                   = $this->input->post('tanggal');
					$no_wo                     = $this->input->post('no_wo');
					$peralatan                 = $this->input->post('peralatan');
					$no_inventory              = $this->input->post('no_inventory');
                    $unit                      = $this->input->post('unit');
                    $jenis_kerusakan           = $this->input->post('jenis_kerusakan');
                    $tindakan_perbaikan        = $this->input->post('tindakan_perbaikan');
                    $mulai                     = $this->input->post('mulai');
                    $selesai                   = $this->input->post('selesai');
                    $selisih                   = $this->input->post('selisih');
					
					$data = array(
					'tanggal'=>$kode,
					'no_wo'=>$kategori,
					'peralatan'=>$nama,
					'no_inventory'=>$no_inventory,
                    'unit'=>$unit,
                    'jenis_kerusakan'=>$jenis_kerusakan,
                    'tindakan_perbaikan'=>$tindakan_perbaikan,
                    'mulai'=>$mulai,
                    'selesai'=>$selesai,
                    'selisih'=>$selisih);
					
					#script update berdasarkan 'id' terus menyimpan data 'id' yang di update ke database
					$this->db->where('id_report',$id);
					$this->db->update('report',$data);
					
				 	#script mengarahkan ke tabel_asset
					redirect('controllersreport/tabel_report');
				}
  //-------------------------------------------FINDING REPORT-----------------------------------------------
  
  //--------------------------------------------------------------------------------------------------------
  
  
 }          
?>