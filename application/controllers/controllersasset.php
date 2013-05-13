<?php

	class Controllersasset extends CI_Controller 
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
//==============================================ASSET=============================================================**
			
            function pasang_nomor() {
                
                //if ($this->ag_auth->restrict('user', TRUE))
                
                $this->load->view('asset/contoh_asset_unit');
            }
            function simpan_nomor() {
                
                $data['kode_alam'] = $this->input->post('unit_kode_alam');
                $data['nomor_prediksi'] = $this->input->post('unit_prediksi_nomor');
                $data['waktu_perolehan'] = $this->input->post('waktu_perolehan_kode_alam');
       
                $this->asset_models->simpan_nomor($data);
                
                redirect('controllersasset/pasang_nomor');
                 
            }
            //==================================================================================================================//
            function siskom (){
                
                $this->load->view('asset/input_siskom');
            }
            
            function simpan_siskom(){
            $data['nama_barang'] = $this->input->post('nama_barang');
            $data['jenis_barang']= $this->input->post('jenis_barang');
            $data['waktu_perolehan'] =$this->input->post('waktu_perolehan');
            
            redirect('controllersasset/add');
            }
            
            
			function asset() 
				{	if ($this->ag_auth->restrict('user',TRUE))
					#script dropdown an menuju ke function
					$data['query'] = $this->asset_models->dropdown_kategori_asset();
					
					#memanggil view 'asset_input_data'
					$this->load->view('asset/asset_input_data',$data);
				}
			
			//-------------------------------------------------------------------------------------------------------
			function add_asset()
    			{
					#settingan untuk upload gambar
					if ($this->ag_auth->restrict('user',TRUE))
					$namafile = $_FILES['userfile']["name"];
					$namafile = "assetgapura_".time().".jpg";
					$config['upload_path'] = './uploads/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['file_name'] = $namafile;
					
					#script untuk perintah upload
					$this->load->library('upload', $config);
					$this->upload->data();
					$this->upload->do_upload();
					
					#script untuk menetapkan ekstensi menjadi 'JPG'
					$image_data = $this->upload->data();
					$config = array (
					'file_type' =>jpg
					);
					
					#script untuk membuat icon atau resize
					$image_data2 = $this->upload->data();
					$config = array(
						'source_image' => $image_data2['full_path'],
						'new_image' => './uploads/icon',
						'maintain_ration' => true,
						'width' => 150,
						'height' => 100);
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

					#menyimpan nilai input di file sementara dan menyimpan ke field database
       		 		$data = array('asset_tabel_kode_akun' => $this->input->post('asset_tabel_kode_akun'),
           			'asset_tabel_kategori' => $this->input->post('asset_tabel_kategori'),
					'asset_tabel_nama' => $this->input->post('asset_tabel_nama'),
					'asset_tabel_bulan_tahun_perolehan' => $this->input->post('asset_tabel_bulan_tahun_perolehan'),
					'asset_tabel_gambar' => $namafile);
					
					#menuju ke function add_asset di asset_models
					$this->asset_models->add_asset($data);
					
					#dialihkan ke function tabel_asset di controllersasset
					redirect('controllersasset/tabel_asset');
	}
			
			//-------------------------------------------------------------------------------------------------------
			function tabel_asset()
    			{	
					if ($this->ag_auth->restrict('user',TRUE))
					#menuju ke function tabel_asset di asset_models
					$data['records'] = $this->asset_models->tabel_asset();
					
					#memanggil view 'asset_tabel_data'
					$this->load->view('asset/asset_tabel_data',$data);
    			}
				
			function tabel_asset_genfas()
				{
					if ($this->ag_auth->restrict('user',TRUE))
					#menuju ke function tabel_asset_genfas di asset_models
					$data2['records2'] = $this->asset_models->tabel_asset_genfas();
					
					#memanggil view 'asset_tabel_genfas_data'
					$this->load->view('asset/asset_tabel_genfas_data',$data2);
				}
				
			function tabel_asset_siskom()
				{
					if ($this->ag_auth->restrict('user',TRUE))
					#menuju ke function tabel_asset_siskom di asset_models
					$data3['records3'] = $this->asset_models->tabel_asset_siskom();
					
					#memanggil view 'asset_tabel_siskom_data'
					$this->load->view('asset/asset_tabel_siskom_data',$data3);
				}
				
			function tabel_asset_nonsiskom()
				{
					if ($this->ag_auth->restrict('user',TRUE))
					#menuju ke function tabel_asset_nonsiskom di asset_models
					$data4['records4'] = $this->asset_models->tabel_asset_nonsiskom();
					
					#memanggil view 'asset_tabel_nonsiskom_data'
					$this->load->view('asset/asset_tabel_nonsiskom_data',$data4);
				}
			//-------------------------------------------------------------------------------------------------------
			function delete_asset($id)
				{
        			if ($this->ag_auth->restrict('user',TRUE))
					#$id = $this->input->post('asset_genfas_id');
					#echo $id;
					
					#menuju ke function tabel_asset di asset_models
					$this->asset_models->delete_asset($id);
					
					#dialihkan ke function tabel_asset di controllersasset
					redirect('controllersasset/tabel_asset');
        			
    			}
			//-------------------------------------------------------------------------------------------------------
			function edit($id)
				{
					 #scrit untuk memanggil data yang berada di database
					 if ($this->ag_auth->restrict('user',TRUE))
					 $query          = $this->asset_models->edit_asset($id);
					 $data['fid']    = $query['asset_tabel_id'];
					 $data['fkode']    = $query['asset_tabel_kode_akun'];
					 $data['fnama']    = $query['asset_tabel_nama'];
					 $data['fdate']    = $query['asset_tabel_bulan_tahun_perolehan'];
					 $data['fgambar']    = $query['asset_tabel_gambar'];
					 
					
					
					#script dropdown an menuju ke function dropdown_unit_repot di asset_models
					$data['query'] = $this->asset_models->dropdown_unit_report();
					 
					#memanggil view 'report_edit_data' 
					$this->load->view('asset/asset_edit_data',$data);
 				}
				
			//-------------------------------------------------------------------------------------------------------
			function submit()
    			{
					#settingan untuk upload gambar
					if ($this->ag_auth->restrict('user',TRUE))
					$namafile = $_FILES['userfile']["name"];
					$namafile = "assetgapura_".time().".jpg";
					$config['upload_path'] = './uploads/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['file_name'] = $namafile;
					
					#script untuk perintah upload
					$this->load->library('upload', $config);
					$this->upload->data();
					$this->upload->do_upload();
					
					#script untuk menetapkan ekstensi menjadi 'JPG'
					$image_data = $this->upload->data();
					$config = array (
					'file_type' =>jpg
					);
					
					#script untuk membuat icon atau resize
					$image_data2 = $this->upload->data();
					$config = array(
						'source_image' => $image_data2['full_path'],
						'new_image' => './uploads/icon',
						'maintain_ration' => true,
						'width' => 150,
						'height' => 100);
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					
					#menyimpan nilai input di file sementara dan menyimpan ke field database
					$id  = $this->input->post('asset_tabel_id');
					$kode  = $this->input->post('asset_tabel_kode_akun');
					$kategori  = $this->input->post('asset_tabel_kategori');
					$nama = $this->input->post('asset_tabel_nama');
					$date = $this->input->post('asset_tabel_bulan_tahun_perolehan');
					$gambar= $namafile;
					
					$data = array(
					'asset_tabel_id'=>$id,
					'asset_tabel_kode_akun'=>$kode,
					'asset_tabel_kategori'=>$kategori,
					'asset_tabel_nama'=>$nama,
					'asset_tabel_bulan_tahun_perolehan'=>$date,
					'asset_tabel_gambar' => $gambar);
					
					#script update berdasarkan 'id' terus menyimpan data 'id' yang di update ke database
					$this->db->where('asset_tabel_id',$id);
					$this->db->update('asset_tabel',$data);
					
				 	#script mengarahkan ke tabel_asset
					redirect('controllersasset/tabel_asset');
				}
    		//-------------------------------------------------------------------------------------------------------
			
	}
?>