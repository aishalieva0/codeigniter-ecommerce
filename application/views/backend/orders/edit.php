<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Order Edit</h3>
                </div>
                <form action="<?= base_url('backend/orders/edit/' . $item->id); ?>" method="post">
                    <div class="card-body">
                        <label for="status_id">Order Status</label>
                        <br>
                        <select class="custom-select form-control" name="status_id">
                            <?php foreach ($order_status as $order_st) :
                                $selected = '';
                                if ($item->status_id == $order_st->id) {
                                    $selected = 'selected';
                                }
                            ?>
                                <option value="<?= $order_st->id ?>" <?= $selected ?>><?= $order_st->title ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>

</div>
</section>
</div>