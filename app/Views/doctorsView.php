<?= $this->extend("layouts/base"); ?>

<?= $this->section("content"); ?>

    <section class="mt-3 d-flex">

        <?= $this->include("partials/search"); ?>

    </section>

<?= $this->endSection(); ?>