<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">

            <!-- If Error -->
            <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>

            <!-- If Success -->
            <?= $this->session->flashdata('message'); ?>

            <a href="<?= base_url('menu/upload'); ?>" class="btn btn-primary mb-3">Add New Document</a>


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Detail Category</th>
                        <th scope="col">Sub Category</th>
                        <th scope="col">Document</th>
                        <th scope="col">Upload Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($doclist as $dc) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $dc['title_document']; ?></td>
                        <td><?= $dc['category']; ?></td>
                        <td><?= $dc['detail_category']; ?></td>
                        <td><?= $dc['sub_category']; ?></td>
                        <td><?= $dc['file_document']; ?></td>
                        <td><?= $dc['upload_date']; ?></td>
                    </tr>
                    <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="newDocumentModal" tabindex="-1" role="dialog" aria-labelledby="newDocumentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newDocumentModalLabel">Add New Document</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/document'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Document Title">
                    </div>
                    <div class="form-group">
                        <select name="categories" id="categories" class="form-control">
                            <option value="">Category</option>
                            <?php foreach ($categories as $cat) : ?>
                            <option value="<?= $cat['id_category']; ?>"><?= $cat['category']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="det_categories" id="det_categories" class="form-control">
                            <option value="">Detail Category</option>
                            <?php foreach ($det_categories as $detcat) : ?>
                            <option value="<?= $detcat['id_det_category']; ?>"><?= $detcat['detail_category']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="sub_categories" id="sub_categories" class="form-control">
                            <option value="">Sub Category</option>
                            <?php foreach ($sub_categories as $subcat) : ?>
                            <option value="<?= $subcat['id_sub_category']; ?>"><?= $subcat['sub_category']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input name="upload" type="file" class="form-control-file" id="upload" size="20">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>