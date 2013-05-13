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
	<header><h3>Form Alat Siskom</h3></header>
		<div class="module_content">
           
    		<table width="0" border="0" align="center" cellpadding="3" cellspacing="3" background="../../images/latar.jpg">
        
		<?php echo form_open('controllersasset/simpan_nomor'); ?>
        
        <tr>
            <td width="128"> <strong>nama barang</strong> </td>
            <td width="236"> &nbsp;&nbsp;<input type="text" name="nama_barang"> </td>
        </tr>
        
        <tr>
            <td> <strong>jenis barang</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="jenis_barang"> </td>
        </tr>
        <tr>
            <td> <strong>Waktu Perolehan</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="waktu_perolehan" class="calender"> </td>
        </tr>

        <tr>
            <td></td>
            <td colspan="2" align="left">&nbsp;&nbsp;<input type="submit" value="add" > </td>
        </tr>
 
</table>

				<div class="clear"></div>
	</div>
</article><!-- end of stats article -->
	
    <div class="clear"></div>