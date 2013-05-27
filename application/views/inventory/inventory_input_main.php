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
	<header><h3>Input Data Inventory </h3></header>
		<div class="module_content">
           
    		<table width="0" border="0" align="center" cellpadding="3" cellspacing="3" background="../../images/latar.jpg">
        
		<?php echo form_open_multipart('controllersinventory/add_inventory'); ?>
        
        <tr>
            <td> <strong>ID Inventory</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="id_inventory"/> </td>
  
         
      
            <td> <strong>Peralatan</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="peralatan"/> </td>
        
        
        <tr>
            <td> <strong>No. Inventory</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="no_inventory"/> </td>
        
        
        
            <td> <strong>Type/Model</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="type_model"/> </td>
        
        
        <tr>
            <td> <strong>No. Seri</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="no_seri"/> </td>
  
       
        
            <td> <strong>Tahun Perolehan</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="tahun_perolehan" class="calender"/> </td>

        
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
            
       	
        
        
        <tr>
            <td> <strong>User</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="user" /> </td>
        
         
        
            <td> <strong>Main Trouble</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="main_trouble"/> </td>
        </tr>
         
        
            <td> <strong>Date Trouble</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="date_trouble" class="calender"/> </td>
        
         
        
            <td> <strong>Kondisi Serviceable</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="sb"/> </td>
        </tr>
        
        
            <td> <strong>Kondisi UR</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="ur"/> </td>
        
        
        
            <td> <strong>Kondisi SCRP</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="scrp"/> </td>
        </tr>
        <tr>
            <td> <strong>Remarks</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="remaks"/> </td>
        </tr>
         
            <td></td>
            <td colspan="2" align="left">&nbsp;&nbsp;<input type="submit" value="Add" > </td>
        </tr>
        
 
</table>

				<div class="clear"></div>
	</div>
</article><!-- end of stats article -->
	
    <div class="clear"></div>