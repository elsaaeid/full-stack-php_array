<form action="function/add_product.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Product Image</label>
                                                <input type="file" class="form-control" name="pro_img">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Poduct Name</label>
                                                <input type="text" class="form-control" placeholder="product name" name="pro_name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Poduct Price</label>
                                                <input type="text" class="form-control" placeholder="product price" name="pro_price">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Poduct Description</label>
                                                <input type="text" class="form-control" placeholder="product description" name="pro_desc">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Add Product</button>
                                    <div class="clearfix"></div>
                                </form>