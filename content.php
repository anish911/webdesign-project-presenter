<?php
	// Content
	
	global $files;
	
	
	function build_page($array){
		
			$count_sections = 0;

			foreach($array as $item){			
			$count_sections++;
			
			$image_location = 'images/'.$item;		
			
			list($width, $height, $type, $attr) = getimagesize($image_location);	
				
				
			echo '<div style="height:'. $height .'px;background-image:url('. $image_location  .');" class="screen" id="section-'.$count_sections.'"></div>';		
		
		}
	}	

	
		
?>

<?php build_page($files); ?>

