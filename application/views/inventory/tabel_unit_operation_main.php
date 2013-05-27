<article class="module width_full" style="overflow-x: scroll;>
	<header><h3>Tabel Data Unit Operation</h3></header>
		<div class="module_content">
           
    		<table align="center" border="1" cellpadding="10" cellspacing="1">

        <tr align="center" bgcolor="#CCCCCC">
            
            <td> ID Inventory</td>
            <td> Peralatan</td>
            <td> No. Inventory</td>
            <td> Type/Model</td>
            <td> No. Seri</td>
            <td> Tahun Perolehan</td>
            <td> Unit</td>
            <td> User</td>
            <td> Main Trouble</td>
            <td> Date Trouble</td>
            <td> SB</td>
            <td> UR</td>
            <td> SCRP</td>
            <td> Remarks</td>
            <td colspan="2" > Pilihan</td>
           
        </tr>
        <?php foreach ($records1 as $key ): ?>
        <tr>
     		
            
            <td> <?php echo $key->id_inventory; ?> </td>
            <td> <?php echo $key->peralatan; ?> </td>
            <td> <?php echo $key->no_inventory; ?> </td>
            <td> <?php echo $key->type_model; ?> </td>
            <td> <?php echo $key->no_seri; ?> </td>
            <td> <?php echo $key->tahun_perolehan; ?> </td>
            <td> <?php echo $key->unit_nama; ?> </td>
            <td> <?php echo $key->user; ?> </td>
            <td> <?php echo $key->main_trouble; ?> </td>
            <td> <?php echo $key->date_trouble; ?> </td>
            <td> <?php echo $key->sb; ?> </td>
            <td> <?php echo $key->ur; ?> </td>
            <td> <?php echo $key->scrp; ?> </td>
            <td> <?php echo $key->remaks; ?> </td>
            
            <td><?php echo anchor('controllersinventory/edit_inventory/' . $key->id_inventory, 'Edit'); ?></td>
            <td><?php echo anchor('controllersinventory/delete_inventory/' . $key->id_inventory, 'Delete'); ?></td>
        </tr>
        <?php endforeach; ?>
 
    </table>

				<div class="clear"></div>
		</div>
</article><!-- end of stats article -->
	
    <div class="clear"></div>