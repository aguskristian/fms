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
	<header><h3>Maintenance</h3></header>
		<div class="module_content">
           
   		  <table align="center" border="0" cellpadding="3" cellspacing="3" bgcolor="#FFF">
        <?php echo form_open('controllersmt/addmt'); ?>
 
        <tr>
            <td> <strong>Kode Akun Asset</strong></td>
            <td> &nbsp;
           <?php
            #inisiasi data dropdown ke dalam array
            $dropdown = array();
        
            #tambahkan data dropdown manual selain dari database
            $dropdown['all'] = '--- Pilih Kode Akun ---';
            
                            
            if(!empty($query))
            {
                  foreach($query as $row) 
                    {
                        $dropdown[$row->asset_tabel_kode_akun] = $row->asset_tabel_kode_akun;
                    }
            }
                            
            echo form_dropdown('asset_tabel_kode_akun', $dropdown, 'all'); 
        ?> 
            </td>
        </tr>        
         <tr>
            <td> <strong>Keterangan Maintenance</strong> </td>
            <td> &nbsp;&nbsp;<textarea name="nama" cols="40" rows="5"></textarea> </td>
        </tr>        
         <tr>
            <td> <strong>Waktu Maintenance</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="waktu" class="calender"/> </td>
        </tr>
 
        <tr>
            <td colspan="4" align="right"> <input type="submit" value="Add" > </td>
        </tr>
 
		</table>

				<div class="clear"></div>
		</div>
</article><!-- end of stats article -->
	
    <div class="clear"></div>