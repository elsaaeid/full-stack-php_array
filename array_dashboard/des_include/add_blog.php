<form action="function/add_blog.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Blog Image</label>
                                                <input type="file" class="form-control" name="blog_img">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Blog Title</label>
                                                <input type="text" class="form-control" placeholder="Blog Title" name="blog_title">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Blog Date</label>
                                                <input type="date" class="form-control" placeholder="Blog Date" name="blog_date">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Blog Description</label>
                                                <input type="text" class="form-control" placeholder="Blog Description" name="blog_description">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Add Blog</button>
                                    <div class="clearfix"></div>
                                </form>