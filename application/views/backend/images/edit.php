<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Image Edit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?= base_url('backend/images/edit/' . $item->id); ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="product_id">Product</label>
                            <input type="text" name="product_id" class="form-control" value="<?= $item->product_id; ?>" placeholder="Enter product">
                            <?php echo form_error('product_id'); ?>
                        </div>
                        <div class="form-group">
                            <label for="path">Path</label>
                            <input type="file" name="path" class="form-control" value="<?= $item->path; ?>" placeholder="Enter path">
                            <?php echo form_error('path'); ?>
                        </div>
                        <div class="form-group">
                            <label for="main">Main</label>
                            <br>
                            <select class="custom-select form-control" id="main" name="main">
                                <option value="0" <?php echo ($item->main == 0) ? 'selected' : ''  ?>>Non-Active</option>
                                <option value="1" <?php echo ($item->main == 1) ? 'selected' : ''  ?>>Active</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </section>
</div>