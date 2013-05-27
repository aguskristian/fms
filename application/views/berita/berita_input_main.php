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
	<header><h3>Form Berita Acara</h3></header>
		<div class="module_content">
           
    		<table width="0" border="0" align="center" cellpadding="3" cellspacing="3" background="../../images/latar.jpg">
        
		<?php echo form_open_multipart('controllersberita/add_berita'); ?>
        
        <tr>
            <td width="128"> <strong>ID Berita Acara</strong> </td>
            <td width="236"> &nbsp;&nbsp;<input type="text" name="id_berita"/> </td>
        </tr>
        <tr>
            <td> <strong>Hari</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="hari"/> </td>
        </tr>
        <tr>
            <td> <strong>Tanggal</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="tanggal" class="calender"/> </td>
        </tr>
        
        
        
         <tr>
            <td ><strong>Jenis Fasilitas</strong> </td>
            <td > &nbsp;
            	
		<?php
            #inisiasi data dropdown ke dalam array
            $dropdown = array();
        
            #tambahkan data dropdown manual selain dari database
            $dropdown['all'] = '---- Pilih Fasilitas ----';
            
                            
            if(!empty($fasilitas))
            {
                  foreach($fasilitas as $row) 
                    {
                        $dropdown[$row->jenis_fasilitas] = $row->jenis_fasilitas;
                    }
            }
                            
            echo form_dropdown('jenis_fasilitas', $dropdown, 'all'); 
        ?>
            
       	</tr>
        
        <tr>
            <td> <strong>Nama Fasilitas</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="nama_fasilitas"/> </td>
        </tr>
        <tr>
            <td> <strong>Merk/Type/Jenis</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="merk_type_jenis" /> </td>
        </tr>
        <tr>
            <td> <strong>No. Seri</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="no_seri" /> </td>
        </tr>
        <tr>
            <td> <strong>No. Inventaris</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="no_inventaris" /> </td>
        </tr>
        <tr>
            <td> <strong>Lokasi Penempatan</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="lokasi_penempatan" /> </td>
        </tr>
        <tr>
            <td> <strong>Unit Penerima</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="unit_penerima" /> </td>
        </tr>
        <tr>
            <td> <strong>Unit Penyerahan</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="unit_penyerahan" /> </td>
        </tr>
        
       
            <td></td>
            <td colspan="2" align="left">&nbsp;&nbsp;<input type="submit" value="Add" /> </td>
        </tr>
 
</table>

				<div class="clear"></div>
	</div>
</article><!-- end of stats article -->
	
    <div class="clear"></div>