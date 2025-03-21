<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin List</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/sidebar.css'); ?>">
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

    <style>
        /* Sidebar Styling */
        body {
            display: flex;
            height: 100vh;
            display: flex;
            height: 100vh;
            background: url('/image/aa.jpg') no-repeat center center/cover;
        

        }
        .app-sidebar {
            width: 260px;
            position: fixed;
            height: 100vh;
            background: #212529;
            padding-top: 20px;
            transition: all 0.3s ease;
        }

        .sidebar-brand {
            text-align: center;
            padding: 15px;
            color: white;
            font-size: 22px;
            font-weight: bold;
            letter-spacing: 1px;
            background: #1c1f23;
            border-bottom: 1px solid #343a40;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-menu .nav-item {
            position: relative;
        }

        .sidebar-menu .nav-link {
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 20px;
            font-size: 16px;
            transition: 0.3s;
            text-decoration: none;
        }

        .sidebar-menu .nav-link:hover {
            background: #343a40;
            border-left: 4px solid #17a2b8;
            padding-left: 16px;
        }

        .nav-icon {
            margin-right: 12px;
            font-size: 18px;
        }

        .nav-arrow {
            font-size: 14px;
        }

        .nav-treeview {
            display: none;
            list-style: none;
            padding-left: 20px;
            background: #2b2f34;
        }

        .nav-item:hover .nav-treeview {
            display: block;
        }

        .nav-treeview .nav-link {
            padding: 8px 20px;
            font-size: 14px;
            color: #d1d1d1;
        }

        .nav-treeview .nav-link:hover {
            background: #3a3f44;
            color: #ffffff;
        }

        /* Main Content */
        .main-content {
            margin-left: 270px;
            padding: 20px;
            transition: all 0.3s ease;
        }
    </style>

</head>
<body>

<!-- Sidebar Start -->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="<?= base_url('admin') ?>" class="brand-link">
            <span class="brand-text fw-light">Admin</span>
        </a>
    </div>

    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-people"></i>
                        <p>Artists <i class="nav-arrow bi bi-chevron-down"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('artist') ?>" class="nav-link">
                                <i class="nav-icon bi bi-list"></i>
                                <p>All Artists</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('artist/create') ?>" class="nav-link">
                                <i class="nav-icon bi bi-plus-circle"></i>
                                <p>Add Artist</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Art Type -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-palette"></i>
                        <p>Art Type <i class="nav-arrow bi bi-chevron-down"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('arttype/view') ?>" class="nav-link">
                                <i class="nav-icon bi bi-list"></i>
                                <p>View Art Type</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Art Product -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-brush"></i>
                        <p>Art Product <i class="nav-arrow bi bi-chevron-down"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('artproduct/view') ?>" class="nav-link">
                                <i class="nav-icon bi bi-list"></i>
                                <p>View Art Product</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Art Medium -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-easel"></i>
                        <p>Art Medium <i class="nav-arrow bi bi-chevron-down"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('artmedium/view') ?>" class="nav-link">
                                <i class="nav-icon bi bi-list"></i>
                                <p>View Art Medium</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- Sidebar End -->

<!-- Main Content -->
<div class="main-content">
    <h2>Welcome to Admin Panel</h2>
    <p>Manage all artist-related data from here.</p>
</div>

</body>
</html>
