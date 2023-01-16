<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Category Edit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?= base_url('backend/categories/edit/' . $item->id); ?>" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" value="<?= $item->title; ?>" placeholder="Enter Title">
                            <?php echo form_error('title'); ?>
                        </div>
                        
                        <div class="form-group">
                            <label for="parent_id">Parent Category</label>
                            <br>
                            <select name="parent_id">
                                <option value="0">Choose parent category</option>
                            <?php foreach ($categories as $cat) { ?>
                                <option value="<?= $cat->id ?>"><?= $cat->title ?></option>
                            <?php  } ?>
                        </select>
                        </div>

                        <div class="form-group">
                            <label for="Status">Status</label>
                            <br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0" <?php echo ($item->status == 0) ? 'selected' : ''  ?>>Non-Active</option>
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