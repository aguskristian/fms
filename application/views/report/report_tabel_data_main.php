<article class="module width_full" style="overflow-x: scroll;">
	<header><h3>Tabel Report </h3></header>
		<div class="module_content">
           
    		<table align="center" border="1" cellpadding="10" cellspacing="1">

        <tr align="center" bgcolor="#CCCCCC">
            
            <td> Id_Report</td>
            <td> Tanggal</td>
            <td> No. Work Order</td>
            <td> Peralatan</td>
            <td> No. Inventory</td>
            <td> Unit</td>
            <td> Jenis Kerusakan</td>
            <td> Tindakan Perbaikan</td>
            <td> Start</td>
            <td> Finish</td>
            <td> Selisih</td>
            <td> Pilihan</td>
        </tr>
        <?php foreach ($records as $key ): ?>
        <tr>
            <td> <?php echo $key->id_report; ?> </td>
            <td> <?php echo $key->tanggal; ?> </td>
            <td> <?php echo $key->no_wo; ?> </td>
            <td> <?php echo $key->peralatan; ?> </td>
            <td> <?php echo $key->no_inventory; ?> </td>
            <td> <?php echo $key->unit; ?> </td>
            <td> <?php echo $key->jenis_kerusakan; ?> </td>
            <td> <?php echo $key->tindakan_perbaikan; ?> </td>
            <td> <?php echo $key->mulai; ?> </td>
            <td> <?php echo $key->selesai; ?> </td>
            <td> <?php echo $key->selisih; ?> </td>
            <td><?php echo anchor('controllersreport/edit/' . $key->id_report, 'Edit') . ' | ' . 
                        anchor('controllersreport/delete_asset/' . $key->id_report, 'Delete'); ?></td>
        </tr>
        <?php endforeach; ?>
 
    </table>

				<div class="clear"></div>
		</div>
</article><!-- end of stats article -->
	
    <div class="clear"></div>