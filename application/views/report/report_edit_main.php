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
	<header><h3>Edit Data Report</h3></header>
		<div class="module_content">
           
    		<table width="0" border="0" align="center" cellpadding="3" cellspacing="3" background="../../images/latar.jpg">
        <?php echo form_open_multipart('controllersreport/submit'); ?>
       	
         <tr>
         <td> <strong><?php echo form_label('Tanggal'); ?></strong></td>
         <td> <?php echo form_input('tanggal',$ftanggal,'id="tanggal"'); ?></td>
         </tr>    
         
        <tr>
            <td ><strong>Unit</strong> </td>
            <td >
            	
		<?php
            #inisiasi data dropdown ke dalam array
            $dropdown = array();
        
            #tambahkan data dropdown manual selain dari database
            $dropdown['all'] = '---- Pilih Unit----';
            
                            
            if(!empty($dropdown_unit))
            {
                  foreach($dropdown_unit as $row) 
                    {
                        $dropdown_unit[$row->unit] = $row->unit;
                    }
            }
                            
            echo form_dropdown('unit', $dropdown, 'all'); 
        ?>
            
       	</tr>
        
        <tr>
         <td><strong> <?php echo form_label('No Work Order'); ?></strong></td>
         <td> <?php echo form_input('no_wo',$fno_wo,'id="no_wo"'); ?></td>
         </tr>  
         <tr>
         <td><strong> <?php echo form_label('Peralatan'); ?></strong></td>
         <td> <?php echo form_input('peralatan',$fperalatan,'id="peralatan"'); ?></td>
         </tr>
         <tr>
         <td><strong> <?php echo form_label('No Inventory'); ?></strong></td>
         <td> <?php echo form_input('no_inventory',$fno_inventory,'id="no_inventory"'); ?></td>
         </tr>
         <tr>
         <td><strong> <?php echo form_label('Jenis Kerusakan'); ?></strong></td>
         <td> <?php echo form_input('jenis_kerusakan',$fjenis_kerusakan,'id="jenis_kerusakan"'); ?></td>
         </tr>
         <tr>
         <td><strong> <?php echo form_label('Tindakan Perbaikan'); ?></strong></td>
         <td> <?php echo form_input('tindakan_perbaikan',$ftindakan_perbaikan,'id="tindakan_perbaikan"'); ?></td>
         </tr>
         <tr>
         <td><strong> <?php echo form_label('Start'); ?></strong></td>
         <td> <?php echo form_input('mulai',$fstart,'id="mulai"'); ?></td>
         </tr>
         <tr>
         <td><strong> <?php echo form_label('finish'); ?></strong></td>
         <td> <?php echo form_input('selesai',$ffinish,'id="selesai"'); ?></td>
         </tr>
         <tr>
         <td><strong> <?php echo form_label('selisih'); ?></strong></td>
         <td> <?php echo form_input('selisih',$fselisih,'id="selisih"'); ?></td>
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