<article class="module width_full">
	<header><h3>Tabel Troubleshooting</h3></header>
		<div class="module_content">
           
    		<table align="center" border="1" cellpadding="10" cellspacing="1">

        <tr align="center" bgcolor="#CCCCCC">
            <td> Id TS</td>
            <td> Kode Akun Asset</td>
            <td> Nama Asset</td>
            <td> Masalah</td>
            <td> Update On</td>
            <td> Update By</td>
            
        </tr>
        <?php foreach ($records as $key ): ?>
        <tr>
     		
            <td> <?php echo $key->troubleshooting_id; ?> </td>
            <td> <?php echo $key->asset_tabel_kode_akun; ?> </td>
            <td> <?php echo $key->asset_tabel_nama; ?> </td>
            <td> <?php echo $key->troubleshooting_masalah; ?> </td>
            <td> <?php echo $key->troubleshooting_update_on; ?> </td>
            <td> <?php echo $key->troubleshooting_update_by; ?> </td>
         
        </tr>
        <?php endforeach; ?>
 
    </table>

				<div class="clear"></div>
		</div>
</article><!-- end of stats article -->
	
    <div class="clear"></div>