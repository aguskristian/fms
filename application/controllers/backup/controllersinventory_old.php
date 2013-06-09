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
				$data['query5'] = $this->asset_models->dropdown_peralatan();
					
					#memanggil view 'asset_input_data'
					$this->load->view('inventory/inventory_input_data',$data);
				}
			
			//-------------------------------------------------------------------------------------------------------
			function add_inventory()
    			{

					#menyimpan nilai input di file sementara dan menyimpan ke field database
       		 		$data = array(
                    'id_wo_pmi'             	=> $this->input->post('id_wo_pmi'),
           			'no_issued'             	=> $this->input->post('no_issued'),
					'tanggal_date'          	=> $this->input->post('tanggal_date'),
					'prepared'              	=> $this->input->post('prepared'),
                    'no_inventaris'         	=> $this->input->post('no_inventaris'),
                    'peralatan_nama' 		  	=> $this->input->post('peralatan_nama'),
                    'unit_nama'             	=> $this->input->post('unit_nama'),
                    'user_pemakai'          	=> $this->input->post('user_pemakai'),
                    'problem'              		=> $this->input->post('problem'),
                    'action'                	=> $this->input->post('action'),
                    'mulai'                	 	=> $this->input->post('mulai'),
                    'selesai'               	=> $this->input->post('selesai'),
                    'pic'                   	=> $this->input->post('pic'),
                    'result'                	=> $this->input->post('result'),
                    'body_printer'			 	=> $this->input->post('body_printer'),
					'body_kursi_roda'			=> $this->input->post('body_kursi_roda'),
					'body_exaust_fan'			=> $this->input->post('body_exaust_fan'	),
					'body_ac'				 	=> $this->input->post('body_ac'),
					'body_hand_pallet' 			=> $this->input->post('body_hand_pallet'),
					'body_strapping'	 		=> $this->input->post('body_strapping'),
					'antena_lan_wifi' 			=> $this->input->post('antena_lan_wifi'),
					'antena_ground_to_air' 		=> $this->input->post('antena_ground_to_air'),
					'kabel_power_ac' 			=> $this->input->post('kabel_power_ac'),
					'kabel_power_exaust_fan' 	=> $this->input->post('kabel_power_exaust_fan'),
					'kabel_power_printer' 		=> $this->input->post('kabel_power_printer'),
					'kabel_power_telepon_fax' 	=> $this->input->post('kabel_power_telepon_fax'),
					'kabel_power_ground_to_air' => $this->input->post('kabel_power_ground_to_air'),
					'kabel_power_strapping' 	=> $this->input->post('kabel_power_strapping'),
					'motor_dinamo' 				=> $this->input->post('motor_dinamo'),
					'switchh_on_off' 			=> $this->input->post('switchh_on_off'),
					'heater_temperature' 		=> $this->input->post('heater_temperature'),
					'switchh_feed_tali' 		=> $this->input->post('switchh_feed_tali'),
					'strap_tension' 			=> $this->input->post('strap_tension'),
					'switchh_resetter' 			=> $this->input->post('switchh_resetter' ),
					'resetter_module' 			=> $this->input->post('resetter_module'),
					'element' 					=> $this->input->post('element' ),
					'tempat_tali' 				=> $this->input->post('tempat_tali'),
					'van_belt_reel' 			=> $this->input->post('van_belt_reel'),
					'roda_strapping' 			=> $this->input->post('roda_strapping'),
					'kipas_pendingin_element' 	=> $this->input->post('kipas_pendingin_element'),
					'kipas'						=> $this->input->post('kipas'),
					'tutup_kipas' 				=> $this->input->post('tutup_kipas'),
					'dinamo' 					=> $this->input->post('dinamo'),
					'bearing_dinamo' 			=> $this->input->post('bearing_dinamo'),
					'kabel_gulungan_dinamo' 	=> $this->input->post('kabel_gulungan_dinamo'),
					'freon' 					=> $this->input->post('freon'),
					'blower_in_door' 			=> $this->input->post('blower_in_door'),
					'blower_out_door' 			=> $this->input->post('blower_out_door'),
					'temperature_remote' 		=> $this->input->post('temperature_remote'),
					'condensor_compressor' 		=> $this->input->post('condensor_compressor'),
					'pembuangan_air' 			=> $this->input->post('pembuangan_air'),
					'kabel_coaxial' 			=> $this->input->post('kabel_coaxial'),
					'connector_rg10' 			=> $this->input->post('connector_rg10'),
					'channel_frekuensi' 		=> $this->input->post('channel_frekuensi'),
					'radio_base' 				=> $this->input->post('radio_base'),
					'speaker' 					=> $this->input->post('speaker'),
					'microphone' 				=> $this->input->post('microphone'),
					'transmite_receive' 		=> $this->input->post('transmite_receive'),
					'pesawat_telepon' 			=> $this->input->post('pesawat_telepon'),
					'soket_telepon'   			=> $this->input->post('soket_telepon'),
					'kabel_spiral' 				=> $this->input->post('kabel_spiral'),
					'kabel_soket' 				=> $this->input->post('kabel_soket'),
					'kabel_line_telepon' 		=> $this->input->post('kabel_line_telepon'),
					'tombol_numerik' 			=> $this->input->post('tombol_numerik' ),
					'switchh_volume_dering' 	=> $this->input->post('switchh_volume_dering'),
					'switchh_tone' 				=> $this->input->post('switchh_tone'),
					'pisau_pemotong_kertas' 	=> $this->input->post('pisau_pemotong_kertas'),
					'sensor_penarik_kertas' 	=> $this->input->post('sensor_penarik_kertas'),
					'radio' 					=> $this->input->post('radio'),
					'kabel_lan' 				=> $this->input->post('kabel_lan'),
					'connector_rg45' 			=> $this->input->post('connector_rg45'),
					'pointing' 					=> $this->input->post('pointing'),
					'switchh_20' 				=> $this->input->post('switchh_20'),
					'switchh_21' 				=> $this->input->post('switchh_21'),
					'bandwitch_latency' 		=> $this->input->post('bandwitch_latency'),
					'signal' 					=> $this->input->post('signal'),
					'tiang' 					=> $this->input->post('tiang'),
					'penahan_tiang' 			=> $this->input->post('penahan_tiang'),
					'pir_roll' 					=> $this->input->post('pir_roll'),
					'gulungan_kain' 			=> $this->input->post('gulungan_kain'),
					'kain_roll' 				=> $this->input->post('kain_roll'),
					'tutup_gulungan_kain' 		=> $this->input->post('tutup_gulungan_kain'),
					'pengait_kain_roll' 		=> $this->input->post('pengait_kain_roll'),
					'baut_penahan_kaki' 		=> $this->input->post('baut_penahan_kaki'),
					'roda_hand_pallet' 			=> $this->input->post('roda_hand_pallet'),
					'as_roda' 					=> $this->input->post('as_roda'),
					'bearing' 					=> $this->input->post('bearing'),
					'oil_hydrolic' 				=> $this->input->post('oil_hydrolic'),
					'seal_hydrolic' 			=> $this->input->post('seal_hydrolic'),
					'pegangan_penarik' 			=> $this->input->post('pegangan_penarik'),
					'sensor_kertas' 			=> $this->input->post('sensor_kertas'),
					'pita_tinta' 				=> $this->input->post('pita_tinta'),
					'kabel_data' 				=> $this->input->post('kabel_data'),
					'cartridge_head_printer' 	=> $this->input->post('cartridge_head_printer'),
					'roller_track_kertas' 		=> $this->input->post('roller_track_kertas'),
					'gear_pita' 				=> $this->input->post('gear_pita'),
					'scanner' 					=> $this->input->post('scanner'),
					'roda_belakang' 			=> $this->input->post('roda_belakang'),
					'roda_depan' 				=> $this->input->post('roda_depan'),
					'jari_jari_velg' 			=> $this->input->post('jari_jari_velg'),
					'rem' 						=> $this->input->post('rem'),
					'injakan_kaki' 				=> $this->input->post('injakan_kaki'),
					'sandaran_jok' 				=> $this->input->post('sandaran_jok'),
					'tempat_duduk' 				=> $this->input->post('tempat_duduk'),
					'pegangan_tangan' 			=> $this->input->post('pegangan_tangan'),
					

					
					 'ms_windows_laptop'             	=> $this->input->post('ms_windows_laptop'),
					 'driver_motherboard_laptop'        => $this->input->post('driver_motherboard_laptop' ),
					 'anti_virus_laptop'             	=> $this->input->post('anti_virus_laptop'),
					 'ms_office_laptop'					=> $this->input->post('ms_office_laptop'),
					 'aplikasi_laptop'					=> $this->input->post('aplikasi_laptop'),
					 'scan_virus_via_safe_mode_laptop'	=> $this->input->post('scan_virus_via_safe_mode_laptop'),
					 'scan_virus_via_normal_mode_laptop'=> $this->input->post('scan_virus_via_normal_mode_laptop'),
					 'clean_up_registry_laptop'			=> $this->input->post('clean_up_registry_laptop'),
					 'disk_clean_up_laptop'			    => $this->input->post('disk_clean_up_laptop'),
					 'defrag_harddisk_laptop'			=> $this->input->post('defrag_harddisk_laptop'),
					 'back_up_data_laptop'				=> $this->input->post('back_up_data_laptop'),				
					 'processor_laptop'					=> $this->input->post('processor_laptop'),
					 'thermal_paste_laptop'				=> $this->input->post('thermal_paste_laptop'),
					 'harddisk_laptop'					=> $this->input->post('harddisk_laptop'),
					 'ram_memory_laptop'				=> $this->input->post('ram_memory_laptop'),
					 'lcd_laptop'						=> $this->input->post('lcd_laptop'),
					 'drive_optic_laptop'				=> $this->input->post('drive_optic_laptop'),
					 'adaptor_laptop'					=> $this->input->post('adaptor_laptop'),
					 'motherboard_laptop'				=> $this->input->post('motherboard_laptop'),
					 'baterai_laptop'					=> $this->input->post('baterai_laptop'),
					 'keyboard_laptop'					=> $this->input->post('keyboard_laptop'),
					 'track_pad_laptop'					=> $this->input->post('track_pad_laptop'),
					 'body_laptop'						=> $this->input->post('body_laptop'),
					 		 

					 'ms_windows_pc'             	=> $this->input->post('ms_windows_pc'),
					 'driver_motherboard_pc'        => $this->input->post('driver_motherboard_pc'),
					 'anti_virus_pc'             	=> $this->input->post('anti_virus_pc'),
					 'ms_office_pc'					=> $this->input->post('ms_office_pc'),
					 'aplikasi_pc'					=> $this->input->post('aplikasi_pc'),
					 'scan_virus_via_safe_mode_pc'	=> $this->input->post('scan_virus_via_safe_mode_pc'),
					 'scan_virus_via_normal_mode_pc'=> $this->input->post('scan_virus_via_normal_mode_pc'),
					 'clean_up_registry_pc'			=> $this->input->post('clean_up_registry_pc'),
					 'disk_clean_up_pc'			    => $this->input->post('disk_clean_up_pc'),
					 'defrag_harddisk_pc'			=> $this->input->post('defrag_harddisk_pc'),
					 'back_up_data_pc'				=> $this->input->post('back_up_data_pc'),
			
					 'processor_pc'				    => $this->input->post('processor_pc'),
					 'thermal_paste_pc'				=> $this->input->post('thermal_paste_pc'),
					 'harddisk_pc'					=> $this->input->post('harddisk_pc'),
					 'ram_memory_pc'				=> $this->input->post('ram_memory_pc'),					 
					 'drive_optic_pc'				=> $this->input->post('drive_optic_pc'),
					 'power_supply_pc'				=> $this->input->post('power_supply_pc'),
					 'motherboard_pc'				=> $this->input->post('motherboard_pc'),
					 'kabel_power_pc'				=> $this->input->post('kabel_power_pc'),					
				     'keyboard_pc'					=> $this->input->post('keyboard_pc'),
					 'mouse_pc'						=> $this->input->post('mouse_pc'),
					 'fan_processor_pc'				=> $this->input->post('fan_processor_pc'),
					 'fan_chasing_pc'				=> $this->input->post('fan_chasing_pc'),
					 'body_pc'						=> $this->input->post('body_pc'));
					 
					 
					 
					 
					#menuju ke function add_asset di asset_models
					$this->asset_models->add_inventory($data);
					
					#dialihkan ke function tabel_asset di controllersasset
					redirect('controllersinventory/tabel_inventory');
	}
			
			//-------------------------------------------------------------------------------------------------------
			function tabel_inventory( $mode = '' )
    			{	
					if ($this->ag_auth->restrict('user',TRUE))
					#menuju ke function tabel_asset di asset_models
					$data['records'] = $this->asset_models->tabel_inventory();
					
					$data['komponen'] = $this->asset_models->daftar_komponen();
					
                    if ( 'search' == $mode ) $data['records'] = $this->asset_models->search_inventory( $this->input->post( 'search' ));                    
                    
					#memanggil view 'asset_tabel_data'
					$this->load->view('inventory/inventory_tabel_data', $data);
                    
    			}
				
			function inventory_komponen( $id_peralatan )
    			{	
					if ($this->ag_auth->restrict('user',TRUE))
					
					$data['komponen'] = $this->asset_models->inventory_komponen( $id_peralatan );
					
					$this->load->view('inventory/inventory_komponen', $data);
                    
    			}
                
			function tabel_unit_operation()
				{
					if ($this->ag_auth->restrict('user',TRUE))
					#menuju ke function tabel_asset_genfas di asset_models
					$data2['records1'] = $this->asset_models->tabel_unit_operation();
					
					#memanggil view 'asset_tabel_genfas_data'
					$this->load->view('inventory/tabel_unit_operation_data',$data2);
				}
                	function tabel_unit_technic()
				{
					if ($this->ag_auth->restrict('user',TRUE))
					#menuju ke function tabel_asset_genfas di asset_models
					$data2['records2'] = $this->asset_models->tabel_unit_technic();
					
					#memanggil view 'asset_tabel_genfas_data'
					$this->load->view('inventory/tabel_unit_technic_data',$data2);
				}
                	function tabel_unit_customerservice()
				{
					if ($this->ag_auth->restrict('user',TRUE))
					#menuju ke function tabel_asset_genfas di asset_models
					$data2['records3'] = $this->asset_models->tabel_unit_customerservice();
					
					#memanggil view 'asset_tabel_genfas_data'
					$this->load->view('inventory/tabel_unit_customerservice_data',$data2);
				}
				
                function tabel_unit_cargo()
				{
					if ($this->ag_auth->restrict('user',TRUE))
					#menuju ke function tabel_asset_genfas di asset_models
					$data2['records4'] = $this->asset_models->tabel_unit_cargo();
					
					#memanggil view 'asset_tabel_genfas_data'
					$this->load->view('inventory/tabel_unit_cargo_data',$data2);
				}
                function tabel_unit_internalservice()
				{
					if ($this->ag_auth->restrict('user',TRUE))
					#menuju ke function tabel_asset_genfas di asset_models
					$data2['records5'] = $this->asset_models->tabel_unit_internalservice();
					
					#memanggil view 'asset_tabel_genfas_data'
					$this->load->view('inventory/tabel_unit_internalservice_data',$data2);
				}
                function tabel_unit_finance()
				{
					if ($this->ag_auth->restrict('user',TRUE))
					#menuju ke function tabel_asset_genfas di asset_models
					$data2['records6'] = $this->asset_models->tabel_unit_finance();
					
					#memanggil view 'asset_tabel_genfas_data'
					$this->load->view('inventory/tabel_unit_finance_data',$data2);
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
						$data['query5'] = $this->asset_models->dropdown_peralatan();
					 $query = $this->asset_models->edit_inventory($id);
					 $data['fid_wo_pmi']               = $query['id_wo_pmi'];
					 $data['fno_issued']               = $query['no_issued'];
					 $data['ftanggal_date']            = $query['tanggal_date'];
					 $data['fprepared']                = $query['prepared'];
					 $data['fno_inventaris']           = $query['no_inventaris'];
                     $data['fperalatan_nama']     	   = $query['peralatan_nama'];
                     $data['funit_nama']               = $query['unit_nama'];
                     $data['fuser_pemakai']            = $query['user_pemakai'];
                     $data['fproblem']                 = $query['problem'];
					 $data['faction']                  = $query['action'];
					 $data['fmulai']                   = $query['mulai'];
					 $data['fselesai']                 = $query['selesai'];
                     $data['fpic']                     = $query['pic'];
                     $data['fresult']                  = $query['result'];
					 $data['fbody_strapping']          = $query['body_strapping'];
					 $data['fmotor_dinamo']			   = $query['motor_dinamo'];
					 $data['fswitchh_on_off']           = $query['switchh_on_off'];
					 $data['fheater_temperature']      = $query['heater_temperature'];
					 $data['fswitchh_feed_tali']        = $query['switchh_feed_tali'];
					 $data['fstrap_tension']           = $query['strap_tension'];
					 $data['fswitchh_resetter']         = $query['switchh_resetter'];
					 $data['fresetter_module']         = $query['resetter_module'];
					 $data['felement']                 = $query['element'];
      
					#script dropdown an menuju ke function dropdown_unit_repot di asset_models
					 
					#memanggil view 'report_edit_data' 
					$this->load->view('inventory/inventory_edit_data',$data);
 				}
				
			//-------------------------------------------------------------------------------------------------------
		function submit()
    			{
					if ($this->ag_auth->restrict('user',TRUE))
					
					#menyimpan nilai input di file sementara dan menyimpan ke field database
					
                    $id_wo_pmi               = $this->input->post('id_wo_pmi');
					$no_issued               = $this->input->post('no_issued');
					$tanggal_date            = $this->input->post('tanggal_date');
                    $prepared                = $this->input->post('prepared');
					$no_inventaris           = $this->input->post('no_inventaris');
                    $peralatan_nama     	 = $this->input->post('peralatan_nama');
                    $unit_nama               = $this->input->post('unit_nama');
                    $user_pemakai            = $this->input->post('user_pemakai');
                    $problem                 = $this->input->post('problem');
                    $action                  = $this->input->post('action');
                    $mulai                   = $this->input->post('mulai');
                    $selesai                 = $this->input->post('selesai');
                    $pic                     = $this->input->post('pic');
                    $result                  = $this->input->post('result');
					$body_strapping          = $this->input->post('body_strapping');
					$motor_dinamo			 = $this->input->post('motor_dinamo');
                    $switchh_on_off           = $this->input->post('switchh_on_off');
					$heater_temperature      = $this->input->post('heater_temperature');
					$switchh_feed_tali        = $this->input->post('switchh_feed_tali');
					$strap_tension           = $this->input->post('strap_tension');
					$switchh_resetter         = $this->input->post('switchh_resetter');
					$resetter_module         = $this->input->post('resetter_module');
					$element                 = $this->input->post('element');
					
					
					
     
					$data = array(
					'id_wo_pmi'                =>$id_wo_pmi,
					'no_issued'                =>$no_issued,
					'tanggal_date'             =>$tanggal_date,
                    'prepared'                 =>$prepared,
                    'no_inventaris'            =>$no_inventaris,
                    'peralatan_nama'      	   =>$peralatan_nama,
                    'unit_nama'                =>$unit_nama,
                    'user_pemakai'             =>$user_pemakai,
                    'problem'                  =>$problem,
                    'action'                   =>$action,
                    'mulai'                    =>$mulai,
                    'selesai'                  =>$selesai,
                    'pic'                      =>$pic,
                    'result'                   =>$result,
					'body_strapping'           =>$body_strapping,
					'motor_dinamo'			   =>$motor_dinamo,
					'switchh_on_off'            =>$switchh_on_off,
					'heater_temperature'       =>$heater_temperature,
					'switchh_feed_tali'         =>$switchh_feed_tali,
					'strap_tension'            =>$strap_tension,
					'switchh_resetter'          =>$switchh_resetter,
				    'resetter_module'          =>$resetter_module,
					'element'                  =>$element);
					#script update berdasarkan 'id' terus menyimpan data 'id' yang di update ke database
					$this->db->where('id_wo_pmi',$id_wo_pmi);
					$this->db->update('inventory',$data);
					
				 	#script mengarahkan ke tabel_asset
					redirect('controllersinventory/tabel_inventory');
				}
    		//-------------------------------------------------------------------------------------------------------
            function search() {
                
                $data['query']=$this->search->caridata();
                
               $search_result = $this->asset_models->search( $this->input->post( 'search' ));
                
                
                if ( $search_result ) {
                    
                    $data['result'] = $search_result;
                    
                    $this->load->view( '', $data);
                         
                } else {
                    
                    
                }
                
            }
            
			//-------------------------------------------------------------------------------------------------------
	}
?>