<?php
include'connection.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	
	$img = $_FILES['slider_img'];
	
	if(! empty($img['name'])){
		
	$img = $_FILES['img'];
	$img_name = $img['name'];
	$img_size = $img['size'];
	$img_error = $img['error'];
	$img_temp = $img['tmp_name'];
	
	$allowed_img = array('jpg','png','jpeg');
	
	
	if($img_error == 4){
		
		echo 'please uploade file';
		exit();
		
	}else{
		
		$img_explode = explode('.',$img_name);
		
//		print_r($img_explode);
		
		$img_extension = end($img_explode);
		
//		echo $img_extension;
		$new_name = rand(0, 1000000000) . '.' . $img_extension; 
//		صوره جديده
		
		if(! in_array($img_extension,$allowed_img)){
			
			echo 'please choice another file'
			exit();
		}else{
			
			if($img_size > 15728640){
				
				echo 'please choise another file bigger tnan 5 MB'
				exit();
			}else{
				
				move_uploaded_file($img_temp, '../uploade/slider/' .$new_name);
				
			}
		}
    }
    $slider_title = filter_var($_POST['slider_title'],FILTER_SANITIZE_STRENG);
    $stmt = $coon->prepare("INSER INTO slider(slider_img,slider_title) VALUES (:img,:title)");
    $stmt->execute([

        'img' => $new_name,
        'title' => $slider_title
    ]);
    header("Location:../slider.php");
    exit();
}

?>