<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Product Edit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?= base_url('backend/products/edit/'.$item->id); ?>" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" value="<?= $item->title; ?>" placeholder="Enter Title">
                            <?php echo form_error('title'); ?>
                        </div>
                        <div class="form-group">
                            <label for="desc">Description</label>
                            <input type="text" name="desc" class="form-control" value="<?= $item->desc; ?>" placeholder="Enter Description">
                            <?php echo form_error('desc'); ?>
                        </div>
						<div class="form-group">
							<label for="brand_id">Brand</label>
							<input type="text" name="brand_id" class="form-control" value="<?= $item->brand_id; ?>" placeholder="Enter Brand">
							<?php echo form_error('brand_id'); ?>
						</div>
						<div class="form-group">
							<label for="price">Price</label>
							<input type="text" name="price" class="form-control" value="<?= $item->price; ?>" placeholder="Enter Price">
							<?php echo form_error('price'); ?>
						</div>
						<div class="form-group">
							<label for="quantity">Quantity</label>
							<input type="text" name="quantity" class="form-control" value="<?= $item->quantity; ?>" placeholder="Enter Quantity">
							<?php echo form_error('quantity'); ?>
						</div>
						<div class="form-group">
							<label for="sale_price">Sale Price</label>
							<input type="text" name="sale_price" class="form-control" value="<?= $item->sale_price; ?>" placeholder="Enter Sale Price">
							<?php echo form_error('sale_price'); ?>
                        <div class="form-group">
                            <label for="Status">Status</label>
                            <br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0" <?php echo  ($item->status == 0) ? 'selected' : ''  ?>>Non-Active</option>
                                <option value="1" <?php echo ($item->status == 1) ? 'selected' : ''  ?>>Active</option>
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
