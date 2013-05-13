<?php
	class Tampilan extends CI_Controller
		{ 
   			function index()
    			{
					$this->load->library('ag_auth');
					if ($this->ag_auth->restrict('user',TRUE))
					#memanggil file view 'utama'
					$this->load->view('utama');
   			 	}
		}
?>