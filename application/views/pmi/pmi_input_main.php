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
         <tr>
            <td> <strong>No. WO</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="no_wo" /></td>
  
         
            <td> <strong>Date</strong> </td>
           <td> &nbsp;&nbsp;<input type="text" name="date" class="calender"> </td>
        </tr>
            <td> <strong>Start</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="mulai" /></td>
        
            <td> <strong>Finish</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
         <tr>
            <td> <strong>MS. Windows</strong> </td>
            <td> <strong>Action
           
                	
    		<?php
                #inisiasi data dropdown ke dalam array
                $dropdown = array();
            
                #tambahkan data dropdown manual selain dari database
                $dropdown['all'] = '---- Pilih Action ----';
                
                                
                if(!empty($action))
                {
                      foreach($action as $row) 
                        {
                            $dropdown[$row->nama_action] = $row->nama_action;
                        }
                }
                                
                echo form_dropdown('action', $dropdown, 'all'); 
            ?>
            </strong>
            </td>
            <td> <strong>Remark</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>PIC</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>INSP</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
        <tr>
            <td> <strong>Driver Motherboard</strong> </td>
            <td> <strong>Action
       
            	
    		<?php
                #inisiasi data dropdown ke dalam array
                $dropdown = array();
            
                #tambahkan data dropdown manual selain dari database
                $dropdown['all'] = '---- Pilih Action ----';
                
                                
                if(!empty($action))
                {
                      foreach($action as $row) 
                        {
                            $dropdown[$row->nama_action] = $row->nama_action;
                        }
                }
                                
                echo form_dropdown('action', $dropdown, 'all'); 
            ?>
            </strong>
        </td>
            <td> <strong>Remark</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>PIC</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>INSP</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
        <tr>
            <td> <strong>Anti Virus</strong> </td>
            <td> <strong>Action
       
            	
    		<?php
                #inisiasi data dropdown ke dalam array
                $dropdown = array();
            
                #tambahkan data dropdown manual selain dari database
                $dropdown['all'] = '---- Pilih Action ----';
                
                                
                if(!empty($action))
                {
                      foreach($action as $row) 
                        {
                            $dropdown[$row->nama_action] = $row->nama_action;
                        }
                }
                                
                echo form_dropdown('action', $dropdown, 'all'); 
            ?>
            </strong>
            </td>
            <td> <strong>Remark</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>PIC</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>INSP</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
        <tr>
            <td> <strong>MS. Office 2007</strong> </td>
            <td> <strong>Action
       
            	
    		<?php
                #inisiasi data dropdown ke dalam array
                $dropdown = array();
            
                #tambahkan data dropdown manual selain dari database
                $dropdown['all'] = '---- Pilih Action ----';
                
                                
                if(!empty($action))
                {
                      foreach($action as $row) 
                        {
                            $dropdown[$row->nama_action] = $row->nama_action;
                        }
                }
                                
                echo form_dropdown('action', $dropdown, 'all'); 
            ?>
            </strong>
            </td>
            <td> <strong>Remark</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>PIC</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>INSP</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
        <tr>
            <td> <strong>Aplikasi</strong> </td>
            <td> <strong>Action
       
            	
    		<?php
                #inisiasi data dropdown ke dalam array
                $dropdown = array();
            
                #tambahkan data dropdown manual selain dari database
                $dropdown['all'] = '---- Pilih Action ----';
                
                                
                if(!empty($action))
                {
                      foreach($action as $row) 
                        {
                            $dropdown[$row->nama_action] = $row->nama_action;
                        }
                }
                                
                echo form_dropdown('action', $dropdown, 'all'); 
            ?>
            </strong>
            </td>
            <td> <strong>Remark</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>PIC</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>INSP</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
        <tr>
            <td> <strong>Scan virus via safe mode</strong> </td>
            <td> <strong>Action
       
            	
    		<?php
                #inisiasi data dropdown ke dalam array
                $dropdown = array();
            
                #tambahkan data dropdown manual selain dari database
                $dropdown['all'] = '---- Pilih Action ----';
                
                                
                if(!empty($action))
                {
                      foreach($action as $row) 
                        {
                            $dropdown[$row->nama_action] = $row->nama_action;
                        }
                }
                                
                echo form_dropdown('action', $dropdown, 'all'); 
            ?>
            </strong>
            </td>
            <td> <strong>Remark</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>PIC</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>INSP</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
        <tr>
            <td> <strong>Scan virus via normal mode</strong> </td>
            <td> <strong>Action
       
            	
    		<?php
                #inisiasi data dropdown ke dalam array
                $dropdown = array();
            
                #tambahkan data dropdown manual selain dari database
                $dropdown['all'] = '---- Pilih Action ----';
                
                                
                if(!empty($action))
                {
                      foreach($action as $row) 
                        {
                            $dropdown[$row->nama_action] = $row->nama_action;
                        }
                }
                                
                echo form_dropdown('action', $dropdown, 'all'); 
            ?>
            </strong>
            </td>
            <td> <strong>Remark</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>PIC</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>INSP</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
        <tr>
            <td> <strong>Clean up registry</strong> </td>
            <td> <strong>Action
       
            	
    		<?php
                #inisiasi data dropdown ke dalam array
                $dropdown = array();
            
                #tambahkan data dropdown manual selain dari database
                $dropdown['all'] = '---- Pilih Action ----';
                
                                
                if(!empty($action))
                {
                      foreach($action as $row) 
                        {
                            $dropdown[$row->nama_action] = $row->nama_action;
                        }
                }
                                
                echo form_dropdown('action', $dropdown, 'all'); 
            ?>
            </strong>
            </td>
            <td> <strong>Remark</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>PIC</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>INSP</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
        <tr>
            <td> <strong>Disk clean up</strong> </td>
            <td> <strong>Action
       
            	
    		<?php
                #inisiasi data dropdown ke dalam array
                $dropdown = array();
            
                #tambahkan data dropdown manual selain dari database
                $dropdown['all'] = '---- Pilih Action ----';
                
                                
                if(!empty($action))
                {
                      foreach($action as $row) 
                        {
                            $dropdown[$row->nama_action] = $row->nama_action;
                        }
                }
                                
                echo form_dropdown('action', $dropdown, 'all'); 
            ?>
            </strong>
            </td>
            <td> <strong>Remark</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>PIC</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>INSP</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
        <tr>
            <td> <strong>Defrag harddisk</strong> </td>
            <td> <strong>Action
       
            	
    		<?php
                #inisiasi data dropdown ke dalam array
                $dropdown = array();
            
                #tambahkan data dropdown manual selain dari database
                $dropdown['all'] = '---- Pilih Action ----';
                
                                
                if(!empty($action))
                {
                      foreach($action as $row) 
                        {
                            $dropdown[$row->nama_action] = $row->nama_action;
                        }
                }
                                
                echo form_dropdown('action', $dropdown, 'all'); 
            ?>
            </strong>
            </td>
            <td> <strong>Remark</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>PIC</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>INSP</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
        <tr>
            <td> <strong>Back up data</strong> </td>
            <td> <strong>Action
       
            	
    		<?php
                #inisiasi data dropdown ke dalam array
                $dropdown = array();
            
                #tambahkan data dropdown manual selain dari database
                $dropdown['all'] = '---- Pilih Action ----';
                
                                
                if(!empty($action))
                {
                      foreach($action as $row) 
                        {
                            $dropdown[$row->nama_action] = $row->nama_action;
                        }
                }
                                
                echo form_dropdown('action', $dropdown, 'all'); 
            ?>
            </strong>
            </td>
            <td> <strong>Remark</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>PIC</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>INSP</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
        <tr>
            <td> <strong>Processor</strong> </td>
            <td> <strong>Action
       
            	
    		<?php
                #inisiasi data dropdown ke dalam array
                $dropdown = array();
            
                #tambahkan data dropdown manual selain dari database
                $dropdown['all'] = '---- Pilih Action ----';
                
                                
                if(!empty($action))
                {
                      foreach($action as $row) 
                        {
                            $dropdown[$row->nama_action] = $row->nama_action;
                        }
                }
                                
                echo form_dropdown('action', $dropdown, 'all'); 
            ?>
            </strong>
            </td>
            <td> <strong>Remark</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>PIC</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>INSP</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
        <tr>
            <td> <strong>Thermal paste</strong> </td>
            <td> <strong>Action
       
            	
    		<?php
                #inisiasi data dropdown ke dalam array
                $dropdown = array();
            
                #tambahkan data dropdown manual selain dari database
                $dropdown['all'] = '---- Pilih Action ----';
                
                                
                if(!empty($action))
                {
                      foreach($action as $row) 
                        {
                            $dropdown[$row->nama_action] = $row->nama_action;
                        }
                }
                                
                echo form_dropdown('action', $dropdown, 'all'); 
            ?>
            </strong>
            </td>
            <td> <strong>Remark</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>PIC</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>INSP</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
        <tr>
            <td> <strong>Harddisk</strong> </td>
            <td> <strong>Action
       
            	
    		<?php
                #inisiasi data dropdown ke dalam array
                $dropdown = array();
            
                #tambahkan data dropdown manual selain dari database
                $dropdown['all'] = '---- Pilih Action ----';
                
                                
                if(!empty($action))
                {
                      foreach($action as $row) 
                        {
                            $dropdown[$row->nama_action] = $row->nama_action;
                        }
                }
                                
                echo form_dropdown('action', $dropdown, 'all'); 
            ?>
            </strong>
            </td>
            <td> <strong>Remark</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>PIC</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>INSP</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
        <tr>
            <td> <strong>RAM / memory</strong> </td>
            <td> <strong>Action
       
            	
    		<?php
                #inisiasi data dropdown ke dalam array
                $dropdown = array();
            
                #tambahkan data dropdown manual selain dari database
                $dropdown['all'] = '---- Pilih Action ----';
                
                                
                if(!empty($action))
                {
                      foreach($action as $row) 
                        {
                            $dropdown[$row->nama_action] = $row->nama_action;
                        }
                }
                                
                echo form_dropdown('action', $dropdown, 'all'); 
            ?>
            </strong>
            </td>
            <td> <strong>Remark</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>PIC</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>INSP</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
        <tr>
            <td> <strong>Drive optic</strong> </td>
            <td> <strong>Action
       
            	
    		<?php
                #inisiasi data dropdown ke dalam array
                $dropdown = array();
            
                #tambahkan data dropdown manual selain dari database
                $dropdown['all'] = '---- Pilih Action ----';
                
                                
                if(!empty($action))
                {
                      foreach($action as $row) 
                        {
                            $dropdown[$row->nama_action] = $row->nama_action;
                        }
                }
                                
                echo form_dropdown('action', $dropdown, 'all'); 
            ?>
            </strong>
            </td>
            <td> <strong>Remark</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>PIC</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>INSP</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
        <tr>
            <td> <strong>Power supply</strong> </td>
            <td> <strong>Action
       
            	
    		<?php
                #inisiasi data dropdown ke dalam array
                $dropdown = array();
            
                #tambahkan data dropdown manual selain dari database
                $dropdown['all'] = '---- Pilih Action ----';
                
                                
                if(!empty($action))
                {
                      foreach($action as $row) 
                        {
                            $dropdown[$row->nama_action] = $row->nama_action;
                        }
                }
                                
                echo form_dropdown('action', $dropdown, 'all'); 
            ?>
            </strong>
            </td>
            <td> <strong>Remark</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>PIC</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>INSP</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
        <tr>
            <td> <strong>Motherboard</strong> </td>
            <td> <strong>Action
       
            	
    		<?php
                #inisiasi data dropdown ke dalam array
                $dropdown = array();
            
                #tambahkan data dropdown manual selain dari database
                $dropdown['all'] = '---- Pilih Action ----';
                
                                
                if(!empty($action))
                {
                      foreach($action as $row) 
                        {
                            $dropdown[$row->nama_action] = $row->nama_action;
                        }
                }
                                
                echo form_dropdown('action', $dropdown, 'all'); 
            ?>
            </strong>
            </td>
            <td> <strong>Remark</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>PIC</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>INSP</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
        <tr>
            <td> <strong>Kabel power</strong> </td>
            <td> <strong>Action
       
            	
    		<?php
                #inisiasi data dropdown ke dalam array
                $dropdown = array();
            
                #tambahkan data dropdown manual selain dari database
                $dropdown['all'] = '---- Pilih Action ----';
                
                                
                if(!empty($action))
                {
                      foreach($action as $row) 
                        {
                            $dropdown[$row->nama_action] = $row->nama_action;
                        }
                }
                                
                echo form_dropdown('action', $dropdown, 'all'); 
            ?>
            </strong>
            </td>
            <td> <strong>Remark</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>PIC</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>INSP</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
        <tr>
            <td> <strong>Keyboard</strong> </td>
            <td> <strong>Action
       
            	
    		<?php
                #inisiasi data dropdown ke dalam array
                $dropdown = array();
            
                #tambahkan data dropdown manual selain dari database
                $dropdown['all'] = '---- Pilih Action ----';
                
                                
                if(!empty($action))
                {
                      foreach($action as $row) 
                        {
                            $dropdown[$row->nama_action] = $row->nama_action;
                        }
                }
                                
                echo form_dropdown('action', $dropdown, 'all'); 
            ?>
            </strong>
            </td>
            <td> <strong>Remark</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>PIC</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>INSP</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
        <tr>
            <td> <strong>Mouse</strong> </td>
            <td> <strong>Action
       
            	
    		<?php
                #inisiasi data dropdown ke dalam array
                $dropdown = array();
            
                #tambahkan data dropdown manual selain dari database
                $dropdown['all'] = '---- Pilih Action ----';
                
                                
                if(!empty($action))
                {
                      foreach($action as $row) 
                        {
                            $dropdown[$row->nama_action] = $row->nama_action;
                        }
                }
                                
                echo form_dropdown('action', $dropdown, 'all'); 
            ?>
            </strong>
            </td>
            <td> <strong>Remark</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>PIC</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>INSP</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
        <tr>
            <td> <strong>Fan processor</strong> </td>
            <td> <strong>Action
       
            	
    		<?php
                #inisiasi data dropdown ke dalam array
                $dropdown = array();
            
                #tambahkan data dropdown manual selain dari database
                $dropdown['all'] = '---- Pilih Action ----';
                
                                
                if(!empty($action))
                {
                      foreach($action as $row) 
                        {
                            $dropdown[$row->nama_action] = $row->nama_action;
                        }
                }
                                
                echo form_dropdown('action', $dropdown, 'all'); 
            ?>
            </strong>
            </td>
            <td> <strong>Remark</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>PIC</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>INSP</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
        <tr>
            <td> <strong>Fan chasing</strong> </td>
            <td> <strong>Action
       
            	
    		<?php
                #inisiasi data dropdown ke dalam array
                $dropdown = array();
            
                #tambahkan data dropdown manual selain dari database
                $dropdown['all'] = '---- Pilih Action ----';
                
                                
                if(!empty($action))
                {
                      foreach($action as $row) 
                        {
                            $dropdown[$row->nama_action] = $row->nama_action;
                        }
                }
                                
                echo form_dropdown('action', $dropdown, 'all'); 
            ?>
            </strong>
            </td>
            <td> <strong>Remark</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>PIC</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>INSP</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
        </tr>
        <tr>
            <td> <strong>Chasing / Body</strong> </td>
            <td> <strong>Action
       
            	
    		<?php
                #inisiasi data dropdown ke dalam array
                $dropdown = array();
            
                #tambahkan data dropdown manual selain dari database
                $dropdown['all'] = '---- Pilih Action ----';
                
                                
                if(!empty($action))
                {
                      foreach($action as $row) 
                        {
                            $dropdown[$row->nama_action] = $row->nama_action;
                        }
                }
                                
                echo form_dropdown('action', $dropdown, 'all'); 
            ?>
            </strong>
            </td>
            <td> <strong>Remark</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>PIC</strong> </td>
            <td> &nbsp;&nbsp;<input type="text" name="selesai" /></td>
            <td> <strong>INSP</strong> </td>
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