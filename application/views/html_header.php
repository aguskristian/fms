<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Gapura Angkasa</title>
	
<?php

	$this->load->helper('HTML');
	echo link_tag('css/bootstrap.css');
	echo link_tag('css/layout.css');
	
	
?>
	<!--[if lt IE 9]>
	<?php echo link_tag('css/ie.css'); ?>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<script src="<?php echo base_url() ?>js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>js/hideshow.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.equalHeight.js"></script>
	<script type="text/javascript" src<?php echo base_url() ?>js/bootstrap.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	
		$(".tablesorter").tablesorter();

		//When page loads...
		$(".tab_content").hide(); //Hide all content
		$("ul.tabs li:first").addClass("active").show(); //Activate first tab
		$(".tab_content:first").show(); //Show first tab content

		//On Click Event
		$("ul.tabs li").click(function() {

			$("ul.tabs li").removeClass("active"); //Remove any "active" class
			$(this).addClass("active"); //Add "active" class to selected tab
			$(".tab_content").hide(); //Hide all tab content

			var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
			$(activeTab).fadeIn(); //Fade in the active ID content
			return false;
		});
		
		$('[rel=popover]').popover({ 
			html : true, 
			content: function() {
				return $(this).parent().find('.popover-content').html();
			}

		});

	});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>
