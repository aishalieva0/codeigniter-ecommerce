<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Images</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <div class="input-group-append">
                                        <a href="<?= base_url('backend/images/create'); ?>" class="btn btn-primary float-right">
                                            Create
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Path</th>
                                        <th>Main</th>
                                        <th>Create date</th>
                                        <th>Update date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($lists as $item) : ?>
                                        <tr>
                                            <td><?= $item->product_id; ?></td>
                                            <td><img src="<?= base_url($item->path) ?>" height="50" width="50"></td>
                                            <td><?= $item->main; ?></td>
                                            <td><?= $item->created_at; ?></td>
                                            <td><?= $item->updated_at; ?></td>
                                            <td style="display:flex;column-gap:5px;">
                                                <a href="<?= base_url('backend/images/edit/' . $item->id); ?>" title="Edit" class="btn btn-sm btn-primary pull-right">
                                                    Edit
                                                </a>
                                                <a href="<?= base_url('backend/images/delete/' . $item->id); ?>" title="Delete" class="btn btn-sm btn-danger pull-right">
                                                    Delete
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