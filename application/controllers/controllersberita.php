<?php

	class Controllersberita extends CI_Controller 
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
//============================================================================================================================
			function berita() 
				{	if ($this->ag_auth->restrict('user',TRUE))
					#script dropdown an menuju ke function
					$data['fasilitas'] = $this->asset_models->dropdown_fasilitas();
					
					#memanggil view 'asset_input_data'
					$this->load->view('berita/berita_input_data',$data);
				}
			
			//-------------------------------------------------------------------------------------------------------
			function add_berita()
    			{
					#menyimpan nilai input di file sementara dan menyimpan ke field database
       		 		$data = array(
                    'id_berita' => $this->input->post('id_berita'),
           			'hari' => $this->input->post('hari'),
					'tanggal' => $this->input->post('tanggal'),
					'jenis_fasilitas' => $this->input->post('jenis_fasilitas'),
                    'nama_fasilitas' => $this->input->post('nama_fasilitas'),
					'merk_type_jenis' => $this->input->post('merk_type_jenis'),
                    'no_seri' => $this->input->post('no_seri'),
                    'no_inventoris' => $this->input->post('no_inventoris'),
                    'lokasi_penempatan' => $this->input->post('lokasi_penempatan'),
                    'unit_penerima' => $this->input->post('unit_penerima'),
                    'unit_penyerahan' => $this->input->post('unit_penyerahan'));

					
					#menuju ke function add_asset di asset_models
					$this->asset_models->add_berita($data);
					
					#dialihkan ke function tabel_asset di controllersasset
					redirect('controllersberita/tabel_berita');
	}
			
			//-------------------------------------------------------------------------------------------------------
			function tabel_berita()
    			{	
					if ($this->ag_auth->restrict('user',TRUE))
					#menuju ke function tabel_asset di asset_models
					$data['records'] = $this->asset_models->tabel_berita();
					
					#memanggil view 'asset_tabel_data'
					$this->load->view('berita/berita_tabel_data',$data);
    			}
				
			
			//-------------------------------------------------------------------------------------------------------
			function delete_berita($id)
				{
        			if ($this->ag_auth->restrict('user',TRUE))
					#$id = $this->input->post('asset_genfas_id');
					#echo $id;
					
					#menuju ke function tabel_asset di asset_models
					$this->asset_models->delete_berita($id);
					
					#dialihkan ke function tabel_asset di controllersasset
					redirect('controllersberita/tabel_berita');
        			
    			}
			//-------------------------------------------------------------------------------------------------------
			function edit_berita($id)
				{
					 #scrit untuk memanggil data yang berada di database
					 if ($this->ag_auth->restrict('user',TRUE))
					 $query          = $this->asset_models->edit_berita($id);
					 $data['fid_berita']       = $query['id_berita'];
                     $data['fhari']            = $query['hari'];
                     $data['ftanggal']         = $query['tanggal'];
                     $data['fjenis_fasilitas'] = $query['jenis_fasilitas'];
                     $data['fnama_fasilitas']  = $query['nama_fasilitas'];
                     $data['fmerk_type_jenis'] = $query['merk_type_jenis'];
                     $data['fno_seri']         = $query['no_seri'];
                     $data['fno_inventaris']   = $query['no_inventaris'];
                     $data['flokasi_penempatan']    = $query['lokasi_penempatan'];
                     $data['funit_penerima']        = $query['unit_penerima'];
                     $data['funit_peyerahan']       = $query['unit_penyerahan'];
                     
               	
					#script dropdown an menuju ke function dropdown_unit_repot di asset_models
					$data['fasilitas'] = $this->asset_models->dropdown_fasilitas();
					 
					#memanggil view 'report_edit_data' 
					$this->load->view('berita/berita_edit_data',$data);
 				}
				
			//-------------------------------------------------------------------------------------------------------
			function submit()
    			{
					
					#menyimpan nilai input di file sementara dan menyimpan ke field database
					$id_berita = $this->input->post('id_berita');
					$hari  = $this->input->post('hari');
					$tanggal = $this->input->post('tanggal');
					$jenis_fasilitas = $this->input->post('jenis_fasilitas');
					$nama_fasilitas = $this->input->post('nama_fasilitas');
    	            $merk_type_jenis= $this->input->post('merk_type_jenis');
					$no_seri= $this->input->post('no_seri');
    	            $no_inventaris= $this->input->post('no_inventaris');
                	$lokasi_penempatan= $this->input->post('lokasi_penempatan');
                	$unit_penerima= $this->input->post('unit_penerima');
                	$unit_penyerahan = $this->input->post('unit_penyerahan');
					
					$data = array(
					'id_berita'=>$id_berita,
					'hari'=>$hari,
					'tanggal'=>$tanggal,
					'jenis_fasilitas'=>$jenis_fasilitas,
					'nama_fasilitas'=>$nama_fasilitas,
                    'merk_type_jenis'=>$merk_type_jenis,
                    'no_seri'=>$no_seri,
                    'no_inventaris'=>$no_inventaris,
                    'lokasi_penempatan'=>$lokasi_penempatan,
                    'unit_penerima'=>$unit_penerima,
					'unit_penyerahan' => $unit_penyerahan);
					
					#script update berdasarkan 'id' terus menyimpan data 'id' yang di update ke database
					$this->db->where('id_berita',$id);
					$this->db->update('berita_acara',$data);
					
				 	#script mengarahkan ke tabel_asset
					redirect('controllersberita/tabel_berita');
				}
    		//-------------------------------------------------------------------------------------------------------
			
	}
?>