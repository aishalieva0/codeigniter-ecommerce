<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Order Product Create</h3>
                </div>
                <form action="<?= base_url('backend/order_products/create'); ?>" method="post">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="order_id">Order</label>
                            <select name="order_id" class="form-control">
                                <option value="">Choose order</option>
                                <?php foreach ($orders as $order) : ?>
                                    <option value="<?= $order->id ?>"><?= $order->id ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="product_id">Product</label>
                            <select name="product_id" class="form-control">
                                <option value="">Choose product</option>
                                <?php foreach ($products as $product) : ?>
                                    <option value="<?= $product->id ?>"><?= $product->title ?></option>
                                <?php endforeach; ?>
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