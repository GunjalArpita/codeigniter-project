<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Art Types</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

    <style>
        /* General Styles */
        body {
            display: flex;
            min-height: 100vh;
            background: url('/image/bg.jpeg') no-repeat center center/cover;
            font-family: Arial, sans-serif;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #2c3e50;
            color: white;
            position: fixed;
            padding-top: 20px;
            box-shadow: 3px 0 10px rgba(0, 0, 0, 0.2);
        }

        .sidebar h3 {
            text-align: center;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 12px 20px;
            border-bottom: 1px solid #34495e;
            transition: 0.3s;
        }

        .sidebar ul li:hover {
            background-color: #1abc9c;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            display: block;
        }

        /* Main Content */
        .main-content {
            margin-left: 250px;
            width: 100%;
            padding: 20px;
        }

        /* Navbar */
        .navbar {
            background-color: #ffffff;
            padding: 15px 20px;
            border-bottom: 2px solid #ddd;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h2 {
            margin: 0;
            font-size: 22px;
            color: #333;
        }

        /* Table */
        .table-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: white;
            font-size: 16px;
        }

        td {
            background-color: #f9f9f9;
        }

        /* Buttons */
        .btn-back {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e74c3c;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px;
            transition: 0.3s;
        }

        .btn-back:hover {
            background-color: #c0392b;
        }

        /* Add Button */
        .btn-add {
            display: inline-block;
            padding: 10px 18px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px;
            font-size: 16px;
            transition: 0.3s;
        }

    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <h3>Admin Panel</h3>
        <ul>
            <li><a href="/admin">Back</a></li>
            <li><a href="<?= base_url('arttype/view') ?>">View Art Types</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <div class="main-content">

        <!-- Navbar -->
        <div class="navbar">
            <h2>All Art Types</h2>
        </div>

        <!-- Add Button -->
        <a href="<?= base_url('arttype/create') ?>" class="btn-add"><i class="fas fa-plus"></i> Add Art Type</a>

        <!-- Table Container -->
        <div class="table-container">
            <table>
                <tr>
                    <th>Art Type Name</th>
                </tr>
                <?php foreach ($arttypes as $arttype): ?>
                <tr>
                    <td><?= esc($arttype['arttypename']); ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>

        <!-- Back Button -->
        <!-- <a href="<?= base_url('arttype') ?>" class="btn-back">Back to List</a> -->

    </div>

</body>
</html>
