<article class="module width_full" style="overflow-x: scroll;">
	<header><h3>Tabel Asset </h3></header>
		<div class="module_content">
           
    		<table align="center" border="1" cellpadding="10" cellspacing="1">

        <tr align="center" bgcolor="#CCCCCC">
            
            <td> Id Berita</td>
            <td> Hari </td>
            <td> Tanggal</td>
            <td> Jenis Fasilitas</td>
            <td> Nama Fasilitas</td>
            <td> Merk/Type/Jenis</td>
            <td> no_seri</td>
            <td> No_inventaris</td>
            <td> Lokasi Penempatan</td>
            <td> Unit Penerima</td>
            <td> Unit Penyerahan</td>
            <td colspan="2" > Pilihan</td>
        </tr>
        <?php foreach ($records as $key ): ?>
        <tr>
     		
            
            <td> <?php echo $key->id_berita; ?> </td>
            <td> <?php echo $key->hari; ?> </td>
            <td> <?php echo $key->tanggal; ?> </td>
            <td> <?php echo $key->jenis_fasilitas; ?> </td>
            <td> <?php echo $key->nama_fasilitas; ?> </td>
            <td> <?php echo $key->merk_type_jenis; ?> </td>
            <td> <?php echo $key->no_seri; ?> </td>
            <td> <?php echo $key->no_inventoris; ?> </td>
            <td> <?php echo $key->lokasi_penempatan; ?> </td>
            <td> <?php echo $key->unit_penerima; ?> </td>
            <td> <?php echo $key->unit_penyerahan; ?> </td>
            
            <td><?php echo anchor('controllersberita/edit_berita/' . $key->id_berita, 'Edit'); ?></td>
            <td><?php echo anchor('controllersberita/delete_asset/' . $key->id_berita, 'Delete'); ?></td>
        </tr>
        <?php endforeach; ?>
 
    </table>

				<div class="clear"></div>
		</div>
</article><!-- end of stats article -->
	
    <div class="clear"></div>