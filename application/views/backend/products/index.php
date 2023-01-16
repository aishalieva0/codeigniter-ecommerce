<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Products</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <div class="input-group-append">
                                        <a href="<?= base_url('backend/products/create'); ?>" class="btn btn-primary float-right">
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
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Brand</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Sale Price</th>
                                        <th>Create date</th>
                                        <th>Update date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($lists as $item) {
                                        // foreach ($brands as $brand) {
                                            // if($item->brand_id == $brand->id){

                                            // }
                                            ?>
                                            <tr>
                                                <td><?= $item->title; ?></td>
                                                <td><?= $item->desc; ?></td>
                                                <td><?= $item->brand_id; ?></td>
                                                <td><?= $item->price; ?></td>
                                                <td><?= $item->quantity; ?></td>
                                                <td><?= $item->sale_price; ?></td>
                                                <td><?= $item->created_at; ?></td>
                                                <td><?= $item->updated_at; ?></td>
                                                <td><?= $item->status; ?></td>
                                                <td style="display:flex;column-gap:5px;">
                                                    <a href="<?= base_url('backend/products/edit/' . $item->id); ?>" title="Edit" class="btn btn-sm btn-primary pull-right">
                                                        Edit
                                                    </a>
                                                    <a href="<?= base_url('backend/products/delete/' . $item->id); ?>" title="Delete" class="btn btn-sm btn-danger pull-right">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                    <?php 
                                    } ?>
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