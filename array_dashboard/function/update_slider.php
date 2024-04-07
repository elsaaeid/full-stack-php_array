<?php

include 'connection.php';

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
 }elseif ( empty($img['name'])) {
   $new_name = $_POST['old_img'];
}
$id = $_POST['id'];

$slider_title = filter_var($_POST['slider_title'],FILTER_SANITIZE_STRENG);
    $stmt = $coon->prepare("UPDATE slider SET slider_img = ?,slider_title = ? WHERE id = ?");
    $stmt->execute([$new_name,$slider_title,$id]);
    header("Location:../slider.php");
    exit();
}