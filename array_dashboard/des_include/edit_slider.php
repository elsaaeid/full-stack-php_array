<?php

$id =isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : exit();

$stmt = $coo->prepare("SELECT * FROM slider WHERE id = ?");
$stmt->execute([$id]);
$row = $stmt->fetch();



?>


<form action="function/update_slider.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?php echo $row["id"]?>">
<img src="uploade/slider/<?php echo $row["slider_img"]?>" style="width:300px;height:250px;margin=lift:450px;">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Image Slider</label>
                                                <input type="file" class="form-control" name="slider_img">
                                            </div>
                                        </div>
                                        <input type="hidden" name="old_img" value="<?php echo $row["slider_img"]?>"> 
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Title Slider</label>
                                                <input type="text" class="form-control" placeholder="slider title" name="slider_title" value="<?php echo $row["slider_title"]?>">
                                            </div>
                                        </div>
                                    </div>



                                    <button type="submit" class="btn btn-info btn-fill pull-right">Edit Slider</button>
                                    <div class="clearfix"></div>
                                </form>