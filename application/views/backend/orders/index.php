<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Orders</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Payment method</th>
                                        <th>Delivery method</th>
                                        <th>Total amount</th>
                                        <th>Create date</th>
                                        <th>Update date</th>
                                        <th>Order status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($lists as $item) : ?>
                                        <tr>
                                            <td><?= $item->user_id; ?></td>
                                            <td><?= $item->payment_method; ?></td>
                                            <td><?= $item->delivery_method; ?></td>
                                            <td><?= $item->total_amount; ?></td>
                                            <td><?= $item->created_at; ?></td>
                                            <td><?= $item->updated_at; ?></td>
                                            <td><?= $item->status_id; ?></td>
                                            <td style="display:flex;column-gap:5px;">
                                                <a href="<?= base_url('backend/orders/edit/' . $item->id); ?>" title="Edit" class="btn btn-sm btn-primary pull-right">
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div>
    </section>
</div>