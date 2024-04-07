<?php

$id =isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : exit();

$stmt = $coo->prepare("SELECT * FROM blog WHERE id = ?");
$stmt->execute([$id]);
$row = $stmt->fetch();



?>


<form action="function/update_blog.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?php echo $row["id"]?>">
<img src="uploade/blog/<?php echo $row["blog_img"]?>" style="width:300px;height:250px;margin=lift:450px;">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Blog Image</label>
                                                <input type="file" class="form-control" name="blog_img">
                                            </div>
                                        </div>
                                        <input type="hidden" name="old_img" value="<?php echo $row["blog_img"]?>"> 
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Blog Title</label>
                                                <input type="text" class="form-control" placeholder="blog title" name="blog_title value="<?php echo $row["blog_title"]?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Blog Date</label>
                                                <input type="date" class="form-control" placeholder="blog date" name="blog_date" value="<?php echo $row["blog_date"]?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Blog Description</label>
                                                <input type="text" class="form-control" placeholder="blog description" name="blog_description" value="<?php echo $row["blog_description"]?>">
                                            </div>
                                        </div>
                                    </div>



                                    <button type="submit" class="btn btn-info btn-fill pull-right">Edit Blog</button>
                                    <div class="clearfix"></div>
                                </form>