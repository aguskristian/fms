<article class="module width_full" style="overflow-x: scroll;>
	<header><h3>Tabel Preventive Maintenance Instruction </h3></header>
		<div class="module_content">
           
    		<table align="center" border="1" cellpadding="10" cellspacing="1">

        <tr align="center" bgcolor="#CCCCCC">
            
            <td> Equipment</td>
            <td> ID PMI</td>
            <td> Type Model</td>
            <td> NO. Inventory</td>
            <td> Unit Lokasi</td>
            <td> Ms. Office</td>
            <td> Driver Motherboard</td>
            <td> Antivirus</td>
            <td> Ms. Windows</td>
            <td> Aplikasi</td>
            <td> Scan Virus Via Safe Mode</td>
            <td> Scan Virus Via Normal Mode</td>
            <td> Clean Up Registry</td>
            <td> Disk Clean Up</td>
            <td> Defrag Hardisk</td>
            <td> Back Up Data</td>
            <td> Processor</td>
            <td> Thermal Paste</td>
            <td> Hardware</td>
            <td> RAM / Memory</td>
            <td> Driver Optic</td>
            <td> Power Supply</td>
            <td> MOtherboard</td>
            <td> Kabel Power</td>
            <td> Keyboard</td>
            <td> Mouse</td>
            <td> Fan Processsor</td>
            <td> Fan Chasing</td>
            <td> Chasing/Body</td>
            <td> Action</td>
            <td> Remark</td>
            <td> PIC</td>
            <td> Insp</td>
            <td> No Work Order</td>
            <td> Date</td>
            <td> Start</td>
            <td> Selesai</td>
            
            <td colspan="2" > Pilihan</td>
        </tr>
        <?php foreach ($records as $key ): ?>
        <tr>
     		
            
            <td> <?php echo $key->equipment; ?> </td>
            <td> <?php echo $key->id_pmi; ?> </td>
            <td> <?php echo $key->type_model; ?> </td>
            <td> <?php echo $key->no_inventory; ?> </td>
            <td> <?php echo $key->unit_lokasi; ?> </td>
              <td> <?php echo $key->ms_windows; ?> </td>
              <td> <?php echo $key->driver_motherboard; ?> </td>
              <td> <?php echo $key->antivirus; ?> </td>
              <td> <?php echo $key->ms_office; ?> </td> 
              <td> <?php echo $key->aplikasi; ?> </td>
              <td> <?php echo $key->scan_virus_via_safe_mode; ?> </td>
              <td> <?php echo $key->scan_virus_via_normal_mode; ?> </td>
              <td> <?php echo $key->clean_up_registry; ?> </td>
              <td> <?php echo $key->disk_clean_up; ?> </td>
              <td> <?php echo $key->defrag_hardisk; ?> </td>
              <td> <?php echo $key->unit_lokasi; ?> </td>
              <td> <?php echo $key->unit_lokasi; ?> </td>
              <td> <?php echo $key->unit_lokasi; ?> </td>
              <td> <?php echo $key->unit_lokasi; ?> </td>
              <td> <?php echo $key->unit_lokasi; ?> </td>
              <td> <?php echo $key->unit_lokasi; ?> </td>
              <td> <?php echo $key->unit_lokasi; ?> </td>
              <td> <?php echo $key->unit_lokasi; ?> </td>
              <td> <?php echo $key->unit_lokasi; ?> </td>
              <td> <?php echo $key->unit_lokasi; ?> </td>
              <td> <?php echo $key->unit_lokasi; ?> </td>                 
            <td> <?php echo $key->no_wo; ?> </td>
            <td> <?php echo $key->tanggal; ?> </td>
            <td> <?php echo $key->mulai; ?> </td>
            <td> <?php echo $key->selesai; ?> </td>
            <td><?php echo anchor('controllerspmi/edit_pmi/' . $key->id_pmi, 'Edit'); ?></td>
            <td><?php echo anchor('controllerspmi/delete_asset/' . $key->id_pmi, 'Delete'); ?></td>
        </tr>
        <?php endforeach; ?>
 
    </table>

				<div class="clear"></div>
		</div>
</article><!-- end of stats article -->
	
    <div class="clear"></div>