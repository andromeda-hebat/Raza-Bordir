<?php require_once __DIR__ . '/../../components/admin/sidebar.php' ?>
<?php require_once __DIR__ . '/../../components/admin/topbar.php' ?>





<?php ////////////////////// ?>
<?php ///////--HTML--/////// ?>
<?php ////////////////////// ?>

<div class="d-flex">
    <?= Sidebar() ?>
    <div class="position-top w-100" style="margin-left:40vh;">
        <?= Topbar() ?>
        <main style="min-height: 100vh; margin-top:10vh;">
            <p>Manajemen penjualan</p>
        </main>
    </div>
</div>