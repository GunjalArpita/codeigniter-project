<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            height: 100vh;
            background: url('/image/aa.jpg') no-repeat center center/cover;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #343a40;
            color: white;
            padding-top: 20px;
            position: fixed;
            
        }
        .sidebar a {
            display: block;
            color: white;
            padding: 10px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background: #495057;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <h3 class="text-center">Artist Panel</h3>
        <a href="<?= site_url('artist/dashboard') ?>">Dashboard</a>
        <!-- <a href="<?= site_url('artist') ?>">Artists List</a> -->
        <!-- <a href="<?= site_url('artist/create') ?>">Add New Artist</a> -->
        <a href="<?= site_url('artist/logout') ?>" class="text-danger">Logout</a>

        <hr>

        <a href="<?= base_url('arttype') ?>">All Art Type</a>
        <a href="<?= base_url('arttype/create') ?>">Add Art Type</a>

        <hr>

        <a href="<?= base_url('artmedium') ?>">All Art Medium</a>
        <a href="<?= base_url('artmedium/create') ?>">Add Art Medium</a>

        <hr>

        <a href="<?= base_url('artproduct') ?>">All Art Product</a>
        <a href="<?= base_url('artproduct/create') ?>">Add Art Product</a>
    </aside>

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <span class="navbar-brand">Welcome, <?= session()->get('artistname') ?></span>
                <div class="collapse navbar-collapse justify-content-end">
                    <a href="<?= site_url('artist/logout') ?>" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </nav>

        <!-- Dashboard Content -->
        <div class="container mt-4">
            <h2>Dashboard</h2>
            <p>Welcome to the Artist Management System.</p>
        </div>
    </div>

</body>
</html>
