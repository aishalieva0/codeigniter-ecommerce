<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Products Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?= base_url('backend/products/create'); ?>" method="post">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter Title">
                            <?php echo form_error('title'); ?>
                        </div>

                        <div class="form-group">
                            <label for="desc">Description</label>
                            <input type="text" name="desc" class="form-control" placeholder="Enter Description">
                            <?php echo form_error('desc'); ?>
                        </div>

                        <div class="form-group">
                            <label for="brand_id">Brand</label>
                            <br>
                            <select name="brand_id" class="custom-select form-control">
                                <option value="">Choose brand</option>
                                <?php foreach ($brands as $brand) : ?>
                                    <option value="<?= $brand->id ?>"><?= $brand->title ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control" placeholder="Enter Price">
                            <?php echo form_error('price'); ?>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="text" name="quantity" class="form-control" placeholder="Enter Quantity">
                            <?php echo form_error('quantity'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sale_price">Sale Price</label>
                            <input type="text" name="sale_price" class="form-control" placeholder="Enter Sale Price">
                            <?php echo form_error('sale_price'); ?>
                        </div>

                        <div class="form-group">
                            <label for="Status">Status</label>
                            <br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0">Non-Active</option>
                                <option value="1">Active</option>
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

<!--  -->