<a href="?slider=add"> Add New Slider</a>


<table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Slider_Image</th>
                                    	<th>Slider_Title</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $stmt = $coon->prepare("SELECT * FROM slider ORDER BY id DESC");
                                        $stmt->execute();
                                        while($row = $stmt->fetch()){
                                            ?>
                                        <tr>
                                        	<td><?php echo $row['id']?></td>
                                        	<td><img src="uploade/slider/<?php echo $row['slider_img']?>" style="width:300px;height:250px;"></td>
                                        	<td><?php echo $row['slider_title']?></td>
                                            <td><a href="?slider=edit&id=<?php echo $row['id']?>" class="btn btn-warning btn-sm"><i class="fa fa_edit"></i>Edit</a>
                                            <a href="function/delete_slider.php?id=<?php echo $row['id']?>" class="btn btn-delete btn-sm"><i class="fa fa_trash"></i>Delete</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
