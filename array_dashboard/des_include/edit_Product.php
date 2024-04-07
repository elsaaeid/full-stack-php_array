<?php

$id =isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : exit();

$stmt = $coo->prepare("SELECT * FROM product WHERE id = ?");
$stmt->execute([$id]);
$row = $stmt->fetch();



?>


<form action="function/update_product.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?php echo $row["id"]?>">
<img src="uploade/product/<?php echo $row["pro_img"]?>" style="width:300px;height:250px;margin=lift:450px;">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Product Image</label>
                                                <input type="file" class="form-control" name="pro_img">
                                            </div>
                                        </div>
                                        <input type="hidden" name="old_img" value="<?php echo $row["pro_img"]?>"> 
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Product Name</label>
                                                <input type="text" class="form-control" placeholder="product name" name="pro_name" value="<?php echo $row["pro_name"]?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Product Price</label>
                                                <input type="text" class="form-control" placeholder="product price" name="pro_price" value="<?php echo $row["pro_price"]?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Product Description</label>
                                                <input type="text" class="form-control" placeholder="product description" name="pro_info" value="<?php echo $row["pro_info"]?>">
                                            </div>
                                        </div>
                                    </div>



                                    <button type="submit" class="btn btn-info btn-fill pull-right">Edit Product</button>
                                    <div class="clearfix"></div>
                                </form>