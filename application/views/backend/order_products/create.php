<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Order Product Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?= base_url('backend/order_products/create'); ?>" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="order_id">Order</label>
                            <input type="text" name="order_id" class="form-control" placeholder="Enter order">
                            <?php echo form_error('order_id'); ?>
                        </div>
						<div class="form-group">
							<label for="product_id">Product</label>
							<input type="text" name="product_id" class="form-control" placeholder="Enter Product">
							<?php echo form_error('product_id'); ?>
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
							<label for="amount">Amount</label>
							<input type="text" name="amount" class="form-control" placeholder="Enter amount">
							<?php echo form_error('amount'); ?>
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
