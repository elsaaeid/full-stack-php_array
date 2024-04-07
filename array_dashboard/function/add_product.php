<?php
include'connection.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	
	$img = $_FILES['pro_img'];
	
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
				
				move_uploaded_file($img_temp, '../uploade/product/' .$new_name);
				
			}
		}
    }

    $pro_name = filter_var($_POST['pro_name'],FILTER_SANITIZE_STRENG);
    $pro_price = filter_var($_POST['pro_price'],FILTER_SANITIZE_NUMBER_INT);
    $pro_desc =  filter_var($_POST['pro_desc'],FILTER_SANITIZE_STRENG);

    $stmt = $coon->prepare("INSER INTO product(pro_name,pro_img,pro_price,pro_desc) VALUES (:pro_name, :pro_img, :pro_price, :pro_desc)");
    $stmt->execute([


        'pro_name' => $pro_name,
        'pro_img' => $pro_img,
        'pro_price' => $pro_price,
        'pro_info' => $pro_desc,
    ]);
    header("Location:../products.php");
    exit();
}

?>