<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../calendar_js/jquery-ui-1.8.5.custom.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../calendar_js/jquery.ui.core.js"></script>
<script type="text/javascript" src="../../calendar_js/jquery.ui.datepicker.js"></script>
<script type="text/javascript" src="../../calendar_js/jquery.ui.widget.js"></script>
<script type="text/javascript" src="../../calendar_js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../../calendar_js/jquery-ui-1.8.5.custom.min.js"></script>
<script type="text/javascript"> jQuery.noConflict() </script>
<script>
 jQuery(function(){
	jQuery('.calender').datepicker({dateFormat:'yy-mm-dd',changeMonth:true,changeYear:true});

});
</script>


<article class="module width_full">
	<header><h3>Edit Data Berita Acara</h3></header>
		<div class="module_content">
           
    		<table width="0" border="0" align="center" cellpadding="3" cellspacing="3" background="../../images/latar.jpg">
        <?php echo form_open_multipart('controllersberita/submit'); ?>
 		<?php echo form_hidden('id_berita',$fid_berita); ?>
        
        
         <tr>
         <td> <strong><?php echo form_label('Hari'); ?></strong></td>
         <td> <?php echo form_input('hari',$fhari,'id="hari"'); ?></td>
         </tr>    
          <tr>
         <td> <strong><?php echo form_label('Tanggal'); ?></strong></td>
         <td> <?php echo form_input('tanggal',$ftanggal,'id="tanggal"'); ?></td>
         </tr>
          <tr>
           
        <tr>
            <td ><strong>Jenis Fasilitas</strong> </td>
            <td >
            	
		<?php
            #inisiasi data dropdown ke dalam array
            $dropdown = array();
        
            #tambahkan data dropdown manual selain dari database
            $dropdown['all'] = '---- Pilih Fasilitas----';
            
                            
            if(!empty($fasilitas))
            {
                  foreach($fasilitas as $row) 
                    {
                        $dropdown[$row->nama_fasilitas] = $row->nama_fasilitas;
                    }
            }
                            
            echo form_dropdown('nama_fasilitas', $dropdown, 'all'); 
        ?>
            
       	</tr>
        
        <tr>
         <td><strong> <?php echo form_label('Nama Fasilitas'); ?></strong></td>
         <td> <?php echo form_input('nama_fasilitas',$fnama_fasilitas,'id="nama_fasilitas"'); ?></td>
         </tr>  
         
         <tr>
         <td><strong> <?php echo form_label('Merk/Type/Jenis'); ?></strong></td>
         <td> <?php echo form_input('merk_type_jenis',$fmerk_type_jenis,'id="merk_type_jenis"'); ?></td>
         </tr>
         <tr>
         <td><strong> <?php echo form_label('No. Seri'); ?></strong></td>
         <td> <?php echo form_input('no_seri',$fno_seri,'id="no_seri"'); ?></td>
         </tr>
         <tr>
         <td><strong> <?php echo form_label('No. Inventoris'); ?></strong></td>
         <td> <?php echo form_input('no_inventaris',$fno_inventaris,'id="no_inventaris"'); ?></td>
         </tr>
         <tr>
         <td><strong> <?php echo form_label('Lokasi Penempatan'); ?></strong></td>
         <td> <?php echo form_input('lokasi_penempatan',$flokasi_penempatan,'id="lokasi_penempatan"'); ?></td>
         </tr>
         <tr>
         <td><strong> <?php echo form_label('Unit Penerima'); ?></strong></td>
         <td> <?php echo form_input('unit_penerima',$funit_penerima,'id="unit_penerima"'); ?></td>
         </tr>
         <tr>
         <td><strong> <?php echo form_label('Unit Penyerahan'); ?></strong></td>
         <td> <?php echo form_input('unit_penyerahan',$funit_penyerahan,'id="unit_penyerahan"'); ?></td>
         </tr>
          
         <tr>
         <td></td>
         <td> <?php    echo form_submit('submit','Submit','id="submit"'); echo form_close(); ?> </td>
         </tr>
 
</table>

				<div class="clear"></div>
	</div>
</article><!-- end of stats article -->
	
    <div class="clear"></div>