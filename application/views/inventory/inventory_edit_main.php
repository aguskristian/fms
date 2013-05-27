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
	<header><h3>Edit Data Inventory</h3></header>
		<div class="module_content">
           
    		<table width="0" border="0" align="center" cellpadding="3" cellspacing="3" background="../../images/latar.jpg">
        <?php echo form_open_multipart('controllersinventory/submit'); ?>
 		<?php echo form_hidden('id_inventory',$fid); ?>
        
        
         <tr>
         <td> <strong><?php echo form_label('Peralatan'); ?></strong></td>
         <td> <?php echo form_input('peralatan',$fperalatan,'id="peralatan"'); ?></td>
         </tr>   
         <tr>
         <td> <strong><?php echo form_label('No. Inventory'); ?></strong></td>
         <td> <?php echo form_input('no_inventory',$fno_inventory,'id="no_inventory"'); ?></td>
         </tr> 
         <tr>
         <td> <strong><?php echo form_label('Type/Model'); ?></strong></td>
         <td> <?php echo form_input('type_model',$ftype_model,'id="type_model" '); ?></td>
         </tr>
         
         <tr>
         <td> <strong><?php echo form_label('No. Seri'); ?></strong></td>
         <td> <?php echo form_input('no_seri',$fno_seri,'id="no_seri"'); ?></td>
         </tr>
         
         <tr>
         <td> <strong><?php echo form_label('Tahun Perolehan'); ?></strong></td>
         <td> <?php echo form_input('tahun_perolehan',$ftahun_perolehan,'id="tahun_perolehan"'); ?></td>
         </tr>
         
          <tr>
            <td ><strong>Unit</strong> </td>
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
         <td> <strong><?php echo form_label('User'); ?></strong></td>
         <td> <?php echo form_input('user',$fuser,'id="user"'); ?></td>
         </tr>
         
         <tr>
         <td> <strong><?php echo form_label('Main Trouble'); ?></strong></td>
         <td> <?php echo form_input('main_trouble',$fmain_trouble,'id="main_trouble"'); ?></td>
         </tr>
         
         <tr>
         <td> <strong><?php echo form_label('date_trouble'); ?></strong></td>
         <td> <?php echo form_input('date_trouble',$fdate_trouble,'id="date_trouble"'); ?></td>
         </tr>
         
         <tr>
         <td> <strong><?php echo form_label('SB'); ?></strong></td>
         <td> <?php echo form_input('sb',$fsb,'id="sb"'); ?></td>
         </tr>
         
         <tr>
         <td> <strong><?php echo form_label('UR'); ?></strong></td>
         <td> <?php echo form_input('ur',$fur,'id="ur"'); ?></td>
         </tr>
         
         <tr>
         <td> <strong><?php echo form_label('SCRP'); ?></strong></td>
         <td> <?php echo form_input('scrp',$fscrp,'id="scrp"'); ?></td>
         </tr>
         
         <tr>
         <td> <strong><?php echo form_label('Remaks'); ?></strong></td>
         <td> <?php echo form_input('remaks',$fremaks,'id="remaks"'); ?></td>
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