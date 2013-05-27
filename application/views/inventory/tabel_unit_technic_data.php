<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Gapura Angkasa</title>
	
<?php

	$this->load->helper('HTML');
	echo link_tag('css/layout.css');
?>
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

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

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
    	<?php echo $this->load->view('utama_header');?>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<?php echo $this->load->view('inventory/tabel_unit_technic_secondary_bar');?>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		<?php echo $this->load->view('utama_sidebar');?>
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		<?php echo $this->load->view('inventory/tabel_unit_technic_main');?>
	</section>


</body>

</html>