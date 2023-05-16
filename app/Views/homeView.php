
<?= $this->extend("layouts/base"); ?>

<?= $this->section("content"); ?>

    

    
    <!-- Slider Section -->
        <section class="mt-3">
            <?= $this->include("partials/slider"); ?>
        </section>

        <!-- Services Section -->
        <section class="mt-3">
            <?= $this->include("partials/services"); ?>
        </section>

        <!-- About Section -->
        <section class="mt-3">
            <?= $this->include("partials/about"); ?>
        </section>

<?= $this->endSection(); ?>