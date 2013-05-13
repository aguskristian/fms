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


<article class="module width_full" style="overflow-x: scroll;">
	<header><h3>Input Data PMI (Preventive Maintenance Instruction</h3></header>
		<div class="module_content">
           
    		<table width="0" border="0" align="center" cellpadding="3" cellspacing="3" background="../../images/latar.jpg">
        
		<?php echo form_open_multipart('controllerspmi/add_pmi'); ?>
        
        <tr>
            <td width="128"> <strong>Equipment</strong> </td>
            <td width="296"> &nbsp;&nbsp;<input type="text" name="equipment"/> </td>
            <td> <strong>Type/Model</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="type_model"/> </td>
        </tr>
        <tr>
            <td> <strong>No. Inventory</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="no_inventory" /> </td>
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
            <td> <strong>No. WO</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="no_wo" /></td>
  
         
            <td> <strong>Date</strong> </td>
           <td> &nbsp;&nbsp;<input type="text" name="date" class="calender"> </td>
        </tr>
        <tr>
            <td> <strong>Start</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="mulai" /></td>
        
            <td> <strong>Finish</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
         
        <tr> 
            <td></td>
            <td colspan="2" align="left">&nbsp;&nbsp;<input type="submit" value="Add" > </td>
        </tr>
 
</table>

				<div class="clear"></div>
	</div>
</article><!-- end of stats article -->
	
    <div class="clear"></div>