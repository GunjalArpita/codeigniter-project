<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>"> 
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Admin Panel</h2>
            <ul>
                <li><a href="<?= base_url('admin') ?>">🏠 Dashboard</a></li>
                <li><a href="<?= base_url('admin/artists') ?>">🎨 Artists</a></li>
                <li><a href="<?= base_url('admin/art-products') ?>">🖼 Art Products</a></li>
                <li><a href="<?= base_url('admin/art-types') ?>">🗂 Art Types</a></li>
                <li><a href="<?= base_url('admin/art-mediums') ?>">🖌 Art Mediums</a></li>
                <li><a href="<?= base_url('logout') ?>" class="logout">🚪 Logout</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <?= $this->renderSection('content'); ?>
        </div>
    </div>
</body>
</html>
