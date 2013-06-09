<article class="module width_full" style="overflow:scroll">
	<header><h3>Tabel Data LOG BOOK</h3></header>
		<div class="module_content">
           
    		<table align="center" border="1" cellpadding="10" cellspacing="1">

        <tr align="center" bgcolor="#CCCCCC">
         
            
            <td> No. Inventory </td>
            <td> Equipment (Peralatan)</td>
            <td> Deskripsi Peralatan (Description)</td>
            <td> Unit</td>
            <td> Unit Pengguna / User </td>
			<td> No. Work Order (WO) </td>	
			<td> Tanggal </td>
			<td> Trouble(Kerusakan) </td>
			<td> Perbaikan (Service or Repair) </td>
            <td> Start  </td>
			<td> Finish </td>
			<td> Result (Hasil) </td>
			<td> Mechanic </td>
			<td> Inspector </td>
			<td> Remaks </td>
        </tr>
        <?php foreach ($records as $key ): ?>
        <tr>
     		
            
            <td> <?php echo $key->no_inventaris; ?> </td>
            <td> <?php echo $key->peralatan_nama; ?> </td>
            <td>  </td>
            <td> <?php echo $key->unit_nama; ?> </td>
			<td> <?php echo $key->user_pemakai; ?> </td>
			<td> <?php echo $key->no_issued; ?> </td>
			<td> <?php echo $key->tanggal_date; ?> </td>
			<td> <?php echo $key->problem; ?> </td>
			<td> <?php echo $key->action; ?> </td>
			<td> <?php echo $key->mulai; ?> </td>
			<td> <?php echo $key->selesai; ?> </td>
			<td> <?php echo $key->result; ?> </td>
			<td> <?php echo $key->prepared; ?> </td>
			<td> <?php echo $key->pic; ?> </td>          
            <td>  </td>  
        </tr>
        <?php endforeach; ?>
 
    </table>

				<div class="clear"></div>
		</div>
</article><!-- end of stats article -->
	
    <div class="clear"></div>