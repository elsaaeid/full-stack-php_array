<a href="?Product=add"> Add New product</a>


<table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>product_Image</th>
                                    	<th>product_Name</th>
                                        <th>product_price</th>
                                        <th>product_Description</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $stmt = $coon->prepare("SELECT * FROM product ORDER BY id DESC");
                                        $stmt->execute();
                                        while($row = $stmt->fetch()){
                                            ?>
                                        <tr>
                                        	<td><?php echo $row['id']?></td>
                                        	<td><img src="uploade/product/<?php echo $row['pro_img']?>" style="width:300px;height:250px;"></td>
                                        	<td><?php echo $row['pro_name']?></td>
                                            <td><?php echo $row['pro_price']?></td>
                                            <td><?php echo $row['pro_info']?></td>
                                            <td><a href="?product=edit&id=<?php echo $row['id']?>" class="btn btn-warning btn-sm"><i class="fa fa_edit"></i>Edit</a>
                                            <a href="function/delete_product.php?id=<?php echo $row['id']?>" class="btn btn-delete btn-sm" style="display: inline-block"><i class="fa fa_trash"></i>Delete</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
