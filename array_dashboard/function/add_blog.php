<?php
include'connection.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	
	$img = $_FILES['blog_img'];
	
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
				
				move_uploaded_file($img_temp, '../uploade/blog/' .$new_name);
				
			}
		}
    }

    $blog_title = filter_var($_POST['pro_name'],FILTER_SANITIZE_STRENG);
    $blog_date = filter_var($_POST['pro_price'],FILTER_SANITIZE_NUMBER_INT);
    $blog_description =  filter_var($_POST['pro_desc'],FILTER_SANITIZE_STRENG);

    $stmt = $coon->prepare("INSER INTO blog(blog_img,blog_title,blog_date,blog_description) VALUES (:blog_img,:blog_title, :blog_date, :blog_description)"); 
    $stmt->execute([


        'blog_img' => $blog_img,
        'blog_title' => $blog_title,
        'blog_date' => $blog_date,
        'blog_description' => $blog_description,
    ]);
    header("Location:../blog.php");
    exit();
}

?>