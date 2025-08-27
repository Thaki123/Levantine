<?php 

include_once 'backend/includes/db_connect.php';

function get_masonry($connection) {
	$q = "SELECT * FROM album ORDER BY position ASC";
	$r = mysqli_query($connection,$q);
	$r_all = "";


	while($array = mysqli_fetch_assoc($r)){	
		$r_all.= 
			'<div class="item" style="background-image: url(\'uploads/albums/'.$array["image2_link"].'\');">
                    <a href="showcase-details.php?id='.$array["id"].'">
                        <img src="uploads/albums/'.$array["image_link"].'" title="'.$array["name"].'" alt="'.$array["name"].'" />
                        <div class="layer"></div>
                        <div class="itemDetails">
                            <div class="itemName">'.$array["name"].'</div>
                            <div class="itemTitle">'.$array["title"].'</div>
							<div class="itemDots">.</div>
                        </div>
                    </a>
                </div>';
	}


	return $r_all;
}

function get_gallery($id, $connection) {
	$q = "SELECT * FROM gallery WHERE album_id = '".$id."' ORDER BY position ASC";
	$r = mysqli_query($connection,$q);
	$r_all = "";

	while($array = mysqli_fetch_assoc($r)){	
		$r_all.= '<div class="imageItem">
					<img src="uploads/gallery/'.$array["image_link"].'" title="'.$array["name"].'" alt="'.$array["name"].'" width="70%" />
				  </div>';
	}


	return $r_all;
}


function get_album_details($id, $connection) {
	$q = "SELECT * FROM album WHERE id = '".$id."' ORDER BY position ASC";
	$r = mysqli_query($connection,$q);
	$r_all = "";


	while($array = mysqli_fetch_assoc($r)){	
		$r_all.= 
			'<div class="itemName">'.$array["name"].'</div>
			<div class="itemTitle">'.$array["title"].'</div>
			<div class="itemDots">.</div>
			<div class="itemDesc">'.$array["description"].'</div>';
			
	}


	return $r_all;
}


function get_process_images($connection) {
	$q = "SELECT image_link FROM process ORDER BY position ASC";
	$r = mysqli_query($connection,$q);
	$r_all = "";

	while($array = mysqli_fetch_assoc($r)){	
		$r_all.= 
			'<div class="halfBox imgBox imgBox1" style="background-image: url(\'uploads/process/'.$array["image_link"].'\');"></div>';
	}


	return $r_all;
}

?>