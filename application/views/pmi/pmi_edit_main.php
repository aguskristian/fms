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
	<header><h3>Edit PMI</h3></header>
		<div class="module_content">
           
    		<table width="0" border="0" align="center" cellpadding="3" cellspacing="3" background="../../images/latar.jpg">
        <?php echo form_open_multipart('controllerspmi/submit'); ?>
 		<?php echo form_hidden('id_pmi',$fid_pmi); ?>
        
        
         <tr>
         <td> <strong><?php echo form_label('equipment'); ?></strong></td>
         <td> <?php echo form_input('equipment',$fequipment,'id="equipment"'); ?></td>
         </tr>  
         <tr>
         <td> <strong><?php echo form_label('type_model'); ?></strong></td>
         <td> <?php echo form_input('type_model',$ftype_model,'id="type_model"'); ?></td>
         </tr>  
          <tr>
         <td> <strong><?php echo form_label('no_inventory'); ?></strong></td>
         <td> <?php echo form_input('no_inventory',$fno_inventory,'id="no_inventory"'); ?></td>
         </tr>  
         <tr>
            <td ><strong>Nama Unit</strong> </td>
            <td > &nbsp;
            	
		<?php
            #inisiasi data dropdown ke dalam array
            $dropdown = array();
        
            #tambahkan data dropdown manual selain dari database
            $dropdown['all'] = '--- Unit/Lokasi ---';
            
                            
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
        <td> <strong><?php echo form_label('no_wo'); ?></strong></td>
        <td> <?php echo form_input('no_wo',$fno_wo,'id="no_wo"'); ?></td>
        </tr>
        <tr>
        <td> <strong><?php echo form_label('tanggal'); ?></strong></td>
        <td> <?php echo form_input('tanggal',$ftanggal,'id="tanggal"'); ?></td>
        </tr>
        <tr>
        <td> <strong><?php echo form_label('mulai'); ?></strong></td>
        <td> <?php echo form_input('mulai',$fmulai,'id="mulai"'); ?></td>
        </tr>
        <tr>
        <td> <strong><?php echo form_label('selesai'); ?></strong></td>
        <td> <?php echo form_input('selesai',$fselesai,'id="selesai"'); ?></td>
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