<?php
    $page_session = \CodeIgniter\Config\Services::session();
?>

<?= $this->extend("layouts/base"); ?>



<?= $this->section("content"); ?>

<link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/contactView.css">

<script>
    setTimeout(function(){
        $('#hideMsg').hide();
    }, 3000);
</script>


    <h2 class="text-center">Contact Us</h2>

    <div class="container contactCon">

        <div class="row contactRow">

            <?php if($page_session->getTempdata('success')): ?>
                <div class="alert alert-success" id="hideMsg"><?= $page_session->getTempdata('success'); ?></div>
            <?php endif; ?>
            <?php if($page_session->getTempdata('error')): ?>
            <div class="alert alert-danger" id="hideMsg"><?= $page_session->getTempdata('error'); ?></div>
            <?php endif; ?>

            <div class="col-md-8">
            <?= form_open(); ?>

                <div class="form-group contactGrp">
                    <label for="name">Name :</label>
                    <input type="text" name="name" class="form-control" value="<?= set_value('name'); ?>">
                    <span class="text-danger"><?= display_error($validation, 'name'); ?></span>
                </div>
                <div class="form-group contactGrp">
                    <label for="email">Email : </label>
                    <input type="text" name="email" class="form-control" value="<?= set_value('email'); ?>">
                    <span class="text-danger"><?= display_error($validation, 'email'); ?></span>
                </div>
                <div class="form-group contactGrp">
                    <label for="phone">Phone No. : </label>
                    <input type="text" name="phone" class="form-control" value="<?= set_value('phone'); ?>">
                    <span class="text-danger"><?= display_error($validation, 'phone'); ?></span>
                </div>
                <div class="form-group contactGrp">
                    <label for="message">Message : </label>
                    <textarea type="text" name="msg" class="form-control"><?= set_value('msg'); ?></textarea>
                    <span class="text-danger"><?= display_error($validation, 'msg'); ?></span>
                </div>
                <div class="form-group contactGrp">
                    <input type="submit" name="btnSave" class="btn btn-primary form-control" value="Send">
                </div>


            <?= form_close(); ?>
            </div>
        </div>

    </div>

    


<?= $this->endSection(); ?>