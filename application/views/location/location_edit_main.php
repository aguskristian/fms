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
	<header><h3>Edit Location</h3></header>
		<div class="module_content">
           
    		<table width="350" border="0" align="center" cellpadding="3" cellspacing="3" background="../../images/latar.jpg">
        <?php echo form_open('controllerslc/submit'); ?>
        <?php echo form_hidden('lokasi_id',$fid); ?>
        
        <tr>
         <td> <strong><?php echo form_label('Kode Akun Asset '); ?></strong></td>
         <td> &nbsp;&nbsp;<?php echo form_input('asset_tabel_kode_akun',$fkode,'id="asset_tabel_kode_akun"'); ?></td>
         </tr>
           
       	<tr>
            <td ><strong>Nama Unit</strong> </td>
            <td > &nbsp;
            	
		<?php
            #inisiasi data dropdown ke dalam array
            $dropdown = array();
        
            #tambahkan data dropdown manual selain dari database
            $dropdown['all'] = '--- Unit ---';
            
                            
            if(!empty($query2))
            {
                  foreach($query2 as $row) 
                    {
                        $dropdown[$row->unit_nama] = $row->unit_nama;
                    }
            }
                            
            echo form_dropdown('unit_nama', $dropdown, 'all'); 
        ?>
            
       	</tr>
        
        <tr>
            <td ><strong>Nama Sub Unit</strong> </td>
            <td > &nbsp;
            	
		<?php
            #inisiasi data dropdown ke dalam array
            $dropdown = array();
        
            #tambahkan data dropdown manual selain dari database
            $dropdown['all'] = '--- Sub Unit ---';
            
                            
            if(!empty($query3))
            {
                  foreach($query3 as $row) 
                    {
                        $dropdown[$row->sub_unit_nama] = $row->sub_unit_nama;
                    }
            }
                            
            echo form_dropdown('sub_unit_nama', $dropdown, 'all'); 
        ?>
            
       	</tr>
        
 
 
       
            <td colspan="2" align="right"> <input type="submit" value="Add" > </td>
        </tr>
 
</table>

				<div class="clear"></div>
	</div>
</article><!-- end of stats article -->
	
    <div class="clear"></div>