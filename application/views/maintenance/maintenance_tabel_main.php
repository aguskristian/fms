<article class="module width_full">
	<header><h3>Tabel Maintenance</h3></header>
		<div class="module_content">
           
    		<table align="center" border="1" cellpadding="10" cellspacing="1">

        <tr align="center" bgcolor="#CCCCCC">
            <td> Id MT</td>
            <td> Kode Akun</td>
            <td> Nama Asset</td>
            <td> Nama Maintenance</td>
            <td> Waktu Maintenance</td>
            <td> Update On</td>
            <td> Update By</td>
        </tr>
        <?php foreach ($records as $key ): ?>
        <tr>
     		
            <td> <?php echo $key->maintenance_id; ?> </td>
            <td> <?php echo $key->asset_tabel_kode_akun; ?> </td>
            <td> <?php echo $key->asset_tabel_nama; ?> </td>
            <td> <?php echo $key->maintenance_nama; ?> </td>
            <td> <?php echo $key->maintenance_waktu; ?> </td>
           	<td> <?php echo $key->maintenance_update_on; ?> </td>
            <td> <?php echo $key->maintenance_update_by; ?> </td>
        </tr>
        <?php endforeach; ?>
 
    </table>

				<div class="clear"></div>
		</div>
</article><!-- end of stats article -->
	
    <div class="clear"></div>