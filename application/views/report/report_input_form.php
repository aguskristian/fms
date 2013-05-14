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
	<header><h3>Input Data Report</h3></header>
		<div class="module_content">
           
    		<table width="0" border="0" align="center" cellpadding="3" cellspacing="3" background="../../images/latar.jpg">
        
		<?php echo form_open_multipart('controllersreport/add_report'); ?>
        
        <tr>
            <td width="128"> <strong>ID Report</strong> </td>
            <td width="236"> &nbsp;&nbsp;<input type="text" name="id_report"/> </td>
        </tr>
         <tr>
            <td> <strong>Tanggal</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="tanggal" class="calender"/> </td>
        </tr>
        <tr>
            <td width="128"> <strong>No. Work Order</strong> </td>
            <td width="236"> &nbsp;&nbsp;<input type="text" name="no_wo" value="DPS/TEK/FAS/WO/"/> </td>
        </tr>
        <tr>
            <td width="128"> <strong>Peralatan</strong> </td>
            <td width="236"> &nbsp;&nbsp;<input type="text" name="peralatan"/> </td>
        </tr>
        <tr>
            <td width="128"> <strong>No. Inventory</strong> </td>
            <td width="236"> &nbsp;&nbsp;<input type="text" name="no_inventory"/> </td>
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
           <td> <strong>Jenis Kerusakan</strong> </td>
           <td> &nbsp;&nbsp;<textarea name="jenis_kerusakan" cols="40" rows="5"></textarea> </td>
        </tr>
        <tr>
            <td> <strong>Tindakan Perbaikan</strong> </td>
            <td> &nbsp;&nbsp;<textarea name="tindakan_perbaikan" cols="40" rows="5"></textarea> </td>
        </tr>
        <tr>
            <td width="128"> <strong>Start</strong> </td>
            <td width="236"> &nbsp;&nbsp;<input type="text" name="mulai"/> </td>
        </tr>
        <tr>
            <td width="128"> <strong>Finish</strong> </td>
            <td width="236"> &nbsp;&nbsp;<input type="text" name="selesai"/> </td>
        </tr>
        <tr>
            <td width="128"> <strong>Selisih Waktu Kerja (Manhours)</strong> </td>
            <td width="236"> &nbsp;&nbsp;<input type="text" name="selisih"/> </td>
        </tr>
        
            <td></td>
            <td colspan="2" align="left">&nbsp;&nbsp;<input type="submit" value="Add"/> </td>
        </tr>
 
</table>
/
				<div class="clear"></div>
	</div>
</article><!-- end of stats article -->
	
    <div class="clear"></div>