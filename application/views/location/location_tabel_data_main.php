<article class="module width_full">
	<header><h3>Tabel Asset Location</h3></header>
		<div class="module_content">
           
    		<table align="center" border="1" cellpadding="10" cellspacing="1">

        <tr align="center" bgcolor="#CCCCCC">
            
            <td> Kode Akun Asset</td>
            <td> Nama Asset</td>
            <td> Unit</td>
            <td> Sub Unit</td>
            <td> Update On</td>
            <td> Update By</td>
            <td colspan="2" > Pilihan</td>
        </tr>
        <?php foreach ($records as $key ): ?>
        <tr>
     		
            
            <td> <?php echo $key->asset_tabel_kode_akun; ?> </td>
            <td> <?php echo $key->asset_tabel_nama; ?> </td>
            <td> <?php echo $key->unit_nama; ?> </td>
            <td> <?php echo $key->sub_unit_nama; ?> </td>
            <td> <?php echo $key->lokasi_update_on; ?> </td>
            <td> <?php echo $key->lokasi_update_by; ?> </td>
            <td><?php echo anchor('controllerslc/edit_location/' . $key->lokasi_id, 'Edit'); ?></td>
            <td><?php echo anchor('controllerslc/delete_location/' . $key->lokasi_id, 'Delete'); ?></td>
        </tr>
        <?php endforeach; ?>
 
    </table>

				<div class="clear"></div>
		</div>
</article><!-- end of stats article -->
	
    <div class="clear"></div>
    <article class="module width_full">
	<header><center><h4>Map Location</h4></center></header>
		<div class="module_content">
        	
            <table align="center" border="0" cellpadding="10" cellspacing="5">

        <tr align="center" bgcolor="">
         <ul class="toggle">
            
            <td><strong><li class="icn_new_article"><?php echo anchor("controllerslc/map_op","Operation");?></li></strong></td>
            <td><strong><li class="icn_categories"><?php echo anchor("controllerslc/map_cg","Cargo");?></li></strong></td>
			<td><strong><li class="icn_categories"><?php echo anchor("controllerslc/map_cs","Coustomer Service");?></li></strong></td>
            <td><strong><li class="icn_categories"><?php echo anchor("controllerslc/map_tech","Technical");?></li></strong></td>
            <td><strong><li class="icn_categories"><?php echo anchor("controllerslc/map_is","Internal Service");?></li></strong></td>
            <td><strong><li class="icn_categories"><?php echo anchor("controllerslc/map_fin","Finance");?></li></strong></td>
            
            
		</ul>
        </tr>
            </table>
        </div>
        </article>