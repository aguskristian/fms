<?php

	class Controllershistory extends CI_Controller 
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
            function tabel_history()
			{
			if ($this->ag_auth->restrict('user',TRUE))
					#menuju ke function tabel_asset di asset_models
					$data['records'] = $this->asset_models->tabel_history();
					                
					#memanggil view 'asset_tabel_data'
					$this->load->view('history/history_tabel_data', $data);
			
			}
			
	}
?>