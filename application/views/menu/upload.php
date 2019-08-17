<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('menu/upload'); ?>
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title">
                    <?= form_error('title', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <!-- <div class="form-group row">
                <label for="category" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                    <select class="form-control" id="category" name="category">
                        <?php foreach ($category as $c) { ?>
                        <option value="<?= $c['id_category']; ?>"><?= $c['category']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="detailcategory" class="col-sm-2 col-form-label">Detail Category</label>
                <div class="col-sm-10">
                    <select class="form-control" id="detailcategory" name="detailcategory">
                        <?php foreach ($detailcategory as $dc) { ?>
                        <option value="<?= $dc['id_det_category']; ?>"><?= $dc['detail_category']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div> -->
            <div class=" form-group row">
                <div for="document" class="col-sm-2 col-form-label">Document</div>
                <div class="col-sm-10">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="document" name="document">
                        <label class="custom-file-label" for="document">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Upload</div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->