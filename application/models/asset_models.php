<?php
	class Asset_models extends CI_Model
	{
 
 
 //========================================REPORT=======================================================
 function add_report ($data)
 {
    $query =$this->db->insert('report',$data);
 }
 //-----------------------------------------------------------------------------------------------------
 
 //-----------------------------------------------------------------------------------------------------
 	function tabel_report()
    		{
				#memanggil nilai dari tabel 'asset_tabel'
       			$query = $this->db->get('report');
				return $query->result();
			}
 //-------------------------------------------------------------------------------------------------------
 	function delete_report($id)
			{
        		#menghapus nilai berdasarkan id
				$this->db->delete('report', array('id_report'=>$id));
    		}
 //-----------------------------------------------------------------------------------------------------
 function edit_report($id)
			{
				 #mengedit nilai berdasarkan id
				 $query = $this->db->get_where('report',array('id_report'=>$id));
				 return $query->row_array();
			}
//=======================================PMI (Preventive Maintenance Instruction)=======================
    function add_pmi($data){
    
				$query = $this->db->insert('pmi',$data);
    		
}
//------------------------------------------------------------------------------------------------------
	function tabel_pmi()
    		{
				#memanggil nilai dari tabel 'asset_tabel'
       			$query = $this->db->get('pmi');
				return $query->result();
			}
 //-----------------------------------------------------------------------------------------------------
 	function edit_pmi($id)
			{
				 #mengedit nilai berdasarkan id
				 $query = $this->db->get_where('pmi',array('id_pmi'=>$id));
				 return $query->row_array();
			}
  //----------------------------------------------------------------------------------------------------
  		function delete_pmi($id)
			{
        		#menghapus nilai berdasarkan id
				$this->db->delete('pmi', array('id_pmi'=>$id));
    		}
 //-----------------------------------------------------------------------------------------------------
 	function dropdown_action()
			{
					# memilih semua data dari table kategori	
					$this->db->from('action');
	
					# urutkan data berdasarkan kategori_id ascending
					$this->db->order_by('id_action', 'ASC'); 
			
					$action = $this->db->get();
			
					# jika null atur data default kategori_id = 0
					if ($action->num_rows() == 0)
					{
					$action->action= '0';
			}
								
		return $action->result();
		}
 //=====================================BERITA ACARA====================================================
    function add_berita($data)
 {
    $query =$this->db->insert('berita_acara',$data);
 }
 //-----------------------------------------------------------------------------------------------------
 	function tabel_berita()
    		{
				#memanggil nilai dari tabel 'asset_tabel'
       			$query = $this->db->get('berita_acara');
				return $query->result();
			}
 //-----------------------------------------------------------------------------------------------------
   	function edit_berita($id)
			{
				 #mengedit nilai berdasarkan id
				 $query = $this->db->get_where('berita_acara',array('id_berita'=>$id));
				 return $query->row_array();
			}         
  //----------------------------------------------------------------------------------------------------
    	function delete_berita($id)
			{
        		#menghapus nilai berdasarkan id
				$this->db->delete('berita_acara', array('id_berita'=>$id));
    		}        
 //-----------------------------------------------------------------------------------------------------
 function dropdown_fasilitas()
			{
					# memilih semua data dari table kategori	
					$this->db->from('fasilitas');
	
					# urutkan data berdasarkan kategori_id ascending
					$this->db->order_by('id_fasilitas', 'ASC'); 
			
					$fasilitas = $this->db->get();
			
					# jika null atur data default kategori_id = 0
					if ($fasilitas->num_rows() == 0)
					{
					$fasilitas->fasilitas= '0';
			}
								
		return $fasilitas->result();
		}
  //---------------------------------------------------------------------------------------------------
 
//=======================================ASSET==========================================================
        
  		function add_asset($data)
    		{
        		#menyimpan nilai pada tabel 'asset_tabel'
				$query = $this->db->insert('asset_tabel',$data);
    		}
		//-------------------------------------------------------------------------------------------------------

		function tabel_asset()
    		{
				#memanggil nilai dari tabel 'asset_tabel'
       			$query = $this->db->get('asset_tabel');
				return $query->result();
			}
		//-------------------------------------------------------------------------------------------------------
			
		function tabel_asset_genfas()
			{
				#memanggil nilai dari tabel 'asset_tabel' yang berkategori 'genfas'
				$this->db->where('asset_tabel_kategori','genfas');
				$query2 = $this->db->get('asset_tabel');
				return $query2->result();
			}
		//-------------------------------------------------------------------------------------------------------
		
		function tabel_asset_siskom()
			{
				#memanggil nilai dari tabel 'asset_tabel' yang berkategori 'siskom'
				$this->db->where('asset_tabel_kategori','siskom');
				$query3 = $this->db->get('asset_tabel');
				return $query3->result();
			}
		//-------------------------------------------------------------------------------------------------------
		
		function tabel_asset_nonsiskom()
			{
				#memanggil nilai dari tabel 'asset_tabel' yang berkategori 'nonsiskom'
				$this->db->where('asset_tabel_kategori','nonsiskom');
				$query4 = $this->db->get('asset_tabel');
				return $query4->result();
			}
		//-------------------------------------------------------------------------------------------------------
		
		function delete_asset($id)
			{
        		#menghapus nilai berdasarkan id
				$this->db->delete('asset_tabel', array('asset_tabel_id'=>$id));
    		}
		//-------------------------------------------------------------------------------------------------------
		
		function edit_asset($id)
			{
				 #mengedit nilai berdasarkan id
				 $query = $this->db->get_where('asset_tabel',array('asset_tabel_id'=>$id));
				 return $query->row_array();
			}
			
		//-------------------------------------------------------------------------------------------------------
		
		function dropdown_kategori_asset()
			{
					# memilih semua data dari table kategori		
					$this->db->from('kategori');
	
					# urutkan data berdasarkan kategori_id ascending
					$this->db->order_by('kategori_id', 'ASC'); 
			
					$query1 = $this->db->get();
			
					# jika null atur data default kategori_id = 0
					if ($query1->num_rows() == 0)
					{
					$query1->kategori_id = '0';
			}
								
		return $query1->result();
		}
		//-------------------------------------------------------------------------------------------------------
		
		function dropdown_unit()
			{
					# memilih semua data dari table kategori	
					$this->db->from('unit');
	
					# urutkan data berdasarkan kategori_id ascending
					$this->db->order_by('unit_id', 'ASC'); 
			
					$query2 = $this->db->get();
			
					# jika null atur data default kategori_id = 0
					if ($query2->num_rows() == 0)
					{
					$query2->unit_id = '0';
			}
								
		return $query2->result();
		}
		//-------------------------------------------------------------------------------------------------------
        function dropdown_activities_software()
			{
					# memilih semua data dari table kategori	
					$this->db->from('software');
	
					# urutkan data berdasarkan kategori_id ascending
					$this->db->order_by('id_software', 'ASC'); 
			
					$software= $this->db->get();
			
					# jika null atur data default kategori_id = 0
					if ($software->num_rows() == 0)
					{
					$software->unit_id = '0';
			}
								
		return $software->result();
		}
		//--------------------------------------------------------------------------------------------------------
        function dropdown_activities_hardware()
			{
					# memilih semua data dari table kategori	
					$this->db->from('hardware');
	
					# urutkan data berdasarkan kategori_id ascending
					$this->db->order_by('id_hardware', 'ASC'); 
			
					$hardware= $this->db->get();
			
					# jika null atur data default kategori_id = 0
					if ($hardware->num_rows() == 0)
					{
					$hardware->unit_id = '0';
			}
								
		return $hardware->result();
		}
		//-------------------------------------------------------------------------------------------------------
		
		function dropdown_sub_unit()
			{
					# memilih semua data dari table kategori
					$this->db->from('sub_unit');
	
					# urutkan data berdasarkan kategori_id ascending
					$this->db->order_by('sub_unit_id', 'ASC'); 
			
					$query3 = $this->db->get();
			
					# jika null atur data default kategori_id = 0
					if ($query3->num_rows() == 0)
					{
					$query3->sub_unit_id = '0';
			}
								
		return $query3->result();
		}
//=======================================INVENTORY=========================================================

        function add_inventory($data)
    		{
        		#menyimpan nilai pada tabel 'asset_tabel'
				$query = $this->db->insert('inventory',$data);
    		}
//---------------------------------------------------------------------------------------------------------
        function tabel_inventory()
    		{
				#memanggil nilai dari tabel 'asset_tabel'
       			$query = $this->db->get('inventory');
				return $query->result();
			}
            
//-------------------------------------------------------------------------------------------------------
		
		function delete_inventory($id)
			{
        		#menghapus nilai berdasarkan id
				$this->db->delete('inventory', array('id_inventory'=>$id));
    		}
//-------------------------------------------------------------------------------------------------------
		
		function edit_inventory($id)
			{
				 #mengedit nilai berdasarkan id
				 $query = $this->db->get_where('inventory',array('id_inventory'=>$id));
				 return $query->row_array();
			}
			
//-------------------------------------------------------------------------------------------------------

//=======================================LOCATION==========================================================
		function add_location($data)
    		{
        		#menyimpan nilai lokasi ke database
				$query = $this->db->insert('lokasi',$data);
    		}
		//-------------------------------------------------------------------------------------------------------	
			function dropdown_kode_akun()
			{
					# memilih semua data dari table kategori		
					$this->db->from('asset_tabel');
	
					# urutkan data berdasarkan kategori_id ascending
					$this->db->order_by('asset_tabel_kode_akun', 'ASC'); 
			
					$query = $this->db->get();
			
					# jika null atur data default kategori_id = 0
					if ($query->num_rows() == 0)
					{
					$query->asset_tabel_kode_akun = '0';
			}
								
		return $query->result();
		}
		//-------------------------------------------------------------------------------------------------------
	
		function tabel_location()
    		{
					#memanggil semua nilai yang ada di tabel 'lokasi'
					$this->db->select("*");
					$this->db->from("lokasi");
					$this->db->join("asset_tabel","asset_tabel.asset_tabel_kode_akun=lokasi.asset_tabel_kode_akun");
					$query = $this->db->get();
					return $query->result();
			}
		//-------------------------------------------------------------------------------------------------------
		
		function delete_location($id)
			{
        			#menghapus nilai berdasarkan  id
					$this->db->delete('lokasi', array('lokasi_id'=>$id));
    		}
		//-------------------------------------------------------------------------------------------------------
		function edit_location($id)
			{
				 #mengedit nilai berdasarkan id
				$query = $this->db->get_where('lokasi',array('lokasi_id'=>$id));
				return $query->row_array();
			}
		
//=====================================================MAINTENANCE============================================
		function addmt($data)
    		{
        		#menyimpan nilai maintenance ke database
				$query = $this->db->insert('maintenance',$data);
    		}
		//-------------------------------------------------------------------------------------------------------
		function mt_tabel()
    		{
       			#memanggil semua nilai yang ada di tabel 'maintenance'
				$this->db->select("*");
				$this->db->from("maintenance");
				$this->db->join("asset_tabel","asset_tabel.asset_tabel_kode_akun=maintenance.asset_tabel_kode_akun");
       			$query = $this->db->get();
				return $query->result();
			}
		
		function dropdown_kode_akun3()
		{
				# select all data from table kategori		
                $this->db->from('asset_tabel');

                # urutkan data berdasarkan kategori_id ascending
				$this->db->order_by('asset_tabel_kode_akun', 'ASC'); 
		
				$query = $this->db->get();
		
				# if null set data default kategori_id = 0
				if ($query->num_rows() == 0)
				{
			   	$query->asset_tabel_kode_akun = '0';
				}
								
		return $query->result();
		}

//=====================================================TROUBLESHOOTING============================================
	
		function addts($data)
    		{
        		#menyimpan nilai troubleshooting ke database
				$query = $this->db->insert('troubleshooting',$data);
    		}
		//-------------------------------------------------------------------------------------------------------
		
		function ts_tabel()
    		{
       			#memanggil semua nilai yang ada di tabel 'troubleshooting'
				$this->db->select("*");
				$this->db->from("troubleshooting");
				$this->db->join("asset_tabel","asset_tabel.asset_tabel_kode_akun=troubleshooting.asset_tabel_kode_akun");
				$query = $this->db->get();
				return $query->result();
			}
	}
    
    //=====================================================History============================================
	
		function addts($data)
    		{
        		#menyimpan nilai history ke database
				$query = $this->db->insert('history',$data);
    		}
		//-------------------------------------------------------------------------------------------------------
		
		function ts_tabel()
    		{
       			#memanggil semua nilai yang ada di tabel 'troubleshooting'
				$this->db->select("*");
				$this->db->from("history");
				$query = $this->db->get();
				return $query->result();
			}
?>
