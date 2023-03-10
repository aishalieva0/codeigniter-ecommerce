<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Order Product Edit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?= base_url('backend/order_products/edit/' . $item->id); ?>" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="order_id">Order</label>
                            <select name="order_id" class="form-control">
                                
                                <?php foreach ($orders as $order) :
                                    $selected = '';
                                    if ($item->order_id == $order->id) {
                                        $selected = 'selected';
                                    } ?>
                                    <option value="<?= $order->id ?>" <?= $selected ?>><?= $order->id ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="product_id">Product</label>
                            <select name="product_id" class="form-control">

                                <?php foreach ($products as $product) :
                                    $selected = '';
                                    if ($item->product_id == $product->id) {
                                        $selected = 'selected';
                                    } ?>

                                    <option value="<?= $product->id ?>" <?= $selected ?>> <?= $product->title ?></option>
                                <?php endforeach; ?>
                            </select>
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
                            <label for="amount">Amount</label>
                            <input type="text" name="amount" class="form-control" value="<?= $item->amount; ?>" placeholder="Enter Amount">
                            <?php echo form_error('amount'); ?>
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