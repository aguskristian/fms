
        
        <h3>Berita Acara</h3>
		<ul class="toggle">
            <li class="icn_new_article"> <?php echo anchor("controllersberita/berita","Form Berita Acara");?></li>
            <li class="icn_categories">  <?php echo anchor("controllersberita/tabel_berita","Tabel Berita Acara");?></li>
		</ul>
        
         
           <h3>Asset</h3>
            <ul class="toggle">
        
            <li class="icn_categories">
            
                <a href="#" class="subtoggleLink">Data Asset</a>
                <ul class="subtoggle">
                
                    <li class="icn_new_article"><?php echo anchor("controllersasset/asset","Input Asset ");?></li>      
                </ul>
            </li>
			<li class="icn_categories"><?php echo anchor("controllersasset/tabel_asset","Tabel Asset ");?></li>
            <li class="icn_categories"><?php echo anchor("controllersasset/tabel_asset_genfas","Tabel Asset Genfas");?></li>
            <li class="icn_categories"><?php echo anchor("controllersasset/tabel_asset_siskom","Tabel Asset Siskom");?></li>
            <li class="icn_categories"><?php echo anchor("controllersasset/tabel_asset_nonsiskom","Tabel Asset Non Siskom");?></li>
		</ul>
        
        
        <h3>Location</h3>
		<ul class="toggle">
            <li class="icn_new_article"><?php echo anchor("controllerslc/location","Update Location");?></li>
            <li class="icn_categories"><?php echo anchor("controllerslc/tabel_location","Tabel Asset Location");?></li>
		</ul>
        
        
        
        <h3>Work Order</h3>
		<ul class="toggle">
            <li class="icn_new_article"><?php echo anchor("controllersmt/tambah_mt","Input Maintenance");?></li>
            <li class="icn_categories"><?php echo anchor("controllersmt/mt_tabel","Tabel Maintenance");?></li>
            <li class="icn_new_article"><?php echo anchor("controllersts/tambah_ts","Input Troubleshooting");?></li>
            <li class="icn_categories"><?php echo anchor("controllersts/ts_tabel","Tabel Troubleshooting");?></li>
		</ul>
        
        
        <h3>Inventory</h3>
            <ul class="toggle">
        
            <li class="icn_categories">
            
                <a href="#" class="subtoggleLink">Data Inventory</a>
                <ul class="subtoggle">
                
                    <li class="icn_new_carticle"><?php echo anchor("controllersinventory/inventory","Input Data Inventory");?></li>      
                </ul>
            </li>
             <li class="icn_categories">
            
                <a href="#" class="subtoggleLink">Tabel Inventory</a>
                <ul class="subtoggle">
                
                    <li class="icn_new_article"><?php echo anchor("controllersinventory/tabel_inventory","Tabel Data Inventory");?></li>
                    <li class="icn_new_article"><?php echo anchor("controllersinventory/tabel_unit_technic","Unit Technic");?></li> 
                    <li class="icn_new_article"><?php echo anchor("controllersinventory/tabel_unit_operation","Unit Operation");?></li> 
                    <li class="icn_new_article"><?php echo anchor("controllersinventory/tabel_unit_customerservice","Unit Customer Service");?></li> 
                    <li class="icn_new_article"><?php echo anchor("controllersinventory/tabel_unit_cargo","Unit Cargo");?></li> 
                    <li class="icn_new_article"><?php echo anchor("controllersinventory/tabel_unit_internalservice","Unit Internal Service");?></li> 
                    <li class="icn_new_article"><?php echo anchor("controllersinventory/tabel_unit_finance","Unit Finance");?></li> 
                    
                       
                </ul>
            </li>

		</ul>
        
        <h3>Preventive Maintanance Intruction </h3>
            <ul class="toggle">
        
            <li class="icn_categories">
            
                <a href="#" class="subtoggleLink">PMI</a>
                <ul class="subtoggle">
                    <li class="icn_new_article"><?php echo anchor("controllerspmi/pmi","Input Data PMI");?></li> 
                    <li class="icn_new_article"><?php echo anchor("controllerspmi/tabel_pmi","Tabel Data PMI ");?></li>      
                </ul>
		</ul>
        
         <ul>
        	<h3>Report Manhours</h3>
            <ul class="toggle">
            
             <li class="icn_folder"> 

           <a href="#" class="subtoggleLink">Report</a>
            <ul class="subtoggle">
            <li class="icn_categories"><?php echo anchor("controllersreport/report","Input Report ");?></li>     
            <li class="icn_categories"><?php echo anchor("controllersreport/tabel_report","Tabel Report");?></li>     
           </ul></li></ul>
           
		<footer>
            <center><p>................</p></center>
			<p><center><strong>Copyright &copy; 2013 Gapura Angkasa, Create by <a href="#">Team Gapura Angkasa</a></strong></center></p>
            <hr />
            <hr />
            <hr />
            <hr />
            <hr />
            <hr />
            <hr />
            <hr />
            <hr />
            <hr />
            <hr />
		</footer>