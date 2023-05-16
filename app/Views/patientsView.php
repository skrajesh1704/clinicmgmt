
<?= $this->extend("layouts/base"); ?>

<?= $this->section("content"); ?>

    <section class="mt-3">
        <h2 class="text-center">Patients Panel</h2>
        <?= $this->include("partials/search"); ?>

    </section>

<?= $this->endSection(); ?>