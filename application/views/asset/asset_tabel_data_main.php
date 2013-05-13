<article class="module width_full">
	<header><h3>Tabel Asset </h3></header>
		<div class="module_content">
           
    		<table align="center" border="1" cellpadding="10" cellspacing="1">

        <tr align="center" bgcolor="#CCCCCC">
            
            <td> Kode Akun</td>
            <td> Kategori</td>
            <td> Nama Asset</td>
            <td> Waktu Perolehan</td>
            <td width="150"> Gambar</td>
            <td> Update On</td>
            <td> Update By</td>
            <td colspan="2" > Pilihan</td>
        </tr>
        <?php foreach ($records as $key ): ?>
        <tr>
     		
            
            <td> <?php echo $key->asset_tabel_kode_akun; ?> </td>
            <td> <?php echo $key->asset_tabel_kategori; ?> </td>
            <td> <?php echo $key->asset_tabel_nama; ?> </td>
            <td> <?php echo $key->asset_tabel_bulan_tahun_perolehan; ?> </td>
            <td align="center"> <img src="<?php echo base_url(); ?>uploads/<?php echo $key->asset_tabel_gambar?>" width="150", height="100" /> </td>
            <td> <?php echo $key->asset_tabel_update_on; ?> </td>
            <td> <?php echo $key->asset_tabel_update_by; ?> </td>
            <td><? echo anchor('controllersasset/edit/' . $key->asset_tabel_id, 'Edit'); ?></td>
            <td><? echo anchor('controllersasset/delete_asset/' . $key->asset_tabel_id, 'Delete'); ?></td>
        </tr>
        <?php endforeach; ?>
 
    </table>

				<div class="clear"></div>
		</div>
</article><!-- end of stats article -->
	
    <div class="clear"></div>