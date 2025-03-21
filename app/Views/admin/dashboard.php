<?= $this->extend('layouts/main_layout'); ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #343a40;
            color: white;
            position: fixed;
            padding-top: 20px;
        }
        .sidebar a {
            display: block;
            padding: 10px;
            color: white;
            text-decoration: none;
        }
        .sidebar a:hover {
            background: #495057;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
        }
        .logout-btn {
            background: red;
            border: none;
            padding: 8px 15px;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            float: right;
        }
        .logout-btn:hover {
            background: darkred;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h4 class="text-center">Admin Panel</h4>
        <a href="<?= site_url('admin/dashboard') ?>">Dashboard</a>
        <a href="<?= site_url('artist/index') ?>">Artists List</a>
        <a href="<?= site_url('artist/create') ?>">Add New Artist</a>
        <a href="<?= site_url('arttype/index') ?>">All Art Types</a>
        <a href="<?= site_url('arttype/create') ?>">Add Art Type</a>
        <a href="<?= site_url('artmedium/index') ?>">All Art Mediums</a>
        <a href="<?= site_url('artmedium/create') ?>">Add Art Medium</a>
        <a href="<?= site_url('artproduct/index') ?>">All Art Products</a>
        <a href="<?= site_url('artproduct/create') ?>">Add Art Product</a>
        <a href="<?= site_url('admin/logout') ?>" class="text-danger">Logout</a>
    </div>

    <div class="content">
        <h3>Welcome, Admin</h3>
        <button class="logout-btn" onclick="location.href='<?= site_url('admin/logout') ?>'">Logout</button>
        <h1>Dashboard</h1>
        <p>Welcome to the Admin Management System.</p>
    </div>

</body>
</html>
