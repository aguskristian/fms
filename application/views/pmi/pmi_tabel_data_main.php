<article class="module width_full">
	<header><h3>Tabel Preventive Maintenance Instruction </h3></header>
		<div class="module_content">
           
    		<table align="center" border="1" cellpadding="10" cellspacing="1">

        <tr align="center" bgcolor="#CCCCCC">
            
            
            <td> ID PMI</td>
            <td> Equipment</td>
            <td> Type Model</td>
            <td> NO. Inventory</td>
            <td> Unit dan Lokasi</td>
            <td> No Work Order</td>
            <td> Tanggal</td>
            <td> Start</td>
            <td> Selesai</td>
            
            <td colspan="2" > Pilihan</td>
        </tr>
        <?php if ( count($records) ) foreach ($records as $key ): ?>
        <tr>
     		
            <td> <?php echo $key->id_pmi; ?> </td>
            <td> <?php echo $key->equipment; ?> </td>
            <td> <?php echo $key->type_model; ?> </td>
            <td> <?php echo $key->no_inventory; ?> </td>
            <td> <?php echo $key->unit_nama; ?> </td>
            <td> <?php echo $key->no_wo; ?> </td>
            <td> <?php echo $key->tanggal; ?> </td>
            <td> <?php echo $key->mulai; ?> </td>
            <td> <?php echo $key->selesai; ?> </td>
            <td><?php echo anchor('controllerspmi/edit_pmi/' . $key->id_pmi, 'Edit'); ?></td>
            <td><?php echo anchor('controllerspmi/delete_pmi/' . $key->id_pmi, 'Delete'); ?></td>
        </tr>
        <?php 
        
            endforeach;
            
            else {
                
        ?>
        
            <td>(Kosong)</td>
            <td>(Kosong)</td>
            <td>(Kosong)</td>
            <td>(Kosong)</td>
            <td>(Kosong)</td>
            <td>(Kosong)</td>
            <td>(Kosong)</td>
            <td>(Kosong)</td>
            <td>(Kosong)</td>
        <?php
            
            } 

        ?>
 
    </table>

				<div class="clear"></div>
		</div>
</article><!-- end of stats article -->
	
    <div class="clear"></div>