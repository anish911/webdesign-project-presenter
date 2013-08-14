<?php
 

	// Loop in folder
	$files = array_diff( scandir("images"), array(".", "..") );
	
	

	
	function build_nav($array){
		
		$count_nav = 0;
		
		echo '<div class="pagenav"><span class="title">DESIGN NAV</span><ul>';
			foreach($array as $item){			
			$count_nav++;
			
			$exif = exif_read_data('images/'.$item, 0, true);
				
			echo '<li><a class="show" href="#section-'.$count_nav.'">'. $exif[IFD0][Title] .'</a></li>';
		
		}
		
		echo '</ul></div>';
	}
	
?>

<?php include('header.php');?>
<body>

	<div class="container">
		
	<?php build_nav($files); ?>
	<?php include('content.php');?>   
	
	</div>
	
<?php include('footer.php');?>	
</body>
</html>

