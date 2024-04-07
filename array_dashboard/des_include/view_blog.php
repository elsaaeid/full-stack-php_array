<a href="?blog=add"> Add New blog</a>


<table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Blog_Image</th>
                                    	<th>Blog_Title</th>
                                        <th>Blog_Date</th>
                                        <th>Blog_Description</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $stmt = $coon->prepare("SELECT * FROM blog ORDER BY id DESC");
                                        $stmt->execute();
                                        while($row = $stmt->fetch()){
                                            ?>
                                        <tr>
                                        	<td><?php echo $row['id']?></td>
                                        	<td><img src="uploade/blog/<?php echo $row['blog_img']?>" style="width:300px;height:250px;"></td>
                                        	<td><?php echo $row['blog_title']?></td>
                                            <td><?php echo $row['blog_date']?></td>
                                            <td><?php echo $row['blog_description']?></td>
                                            <td><a href="?blog=edit&id=<?php echo $row['id']?>" class="btn btn-warning btn-sm"><i class="fa fa_edit"></i>Edit</a>
                                            <a href="function/delete_blog.php?id=<?php echo $row['id']?>" class="btn btn-delete btn-sm"><i class="fa fa_trash"></i>Delete</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
