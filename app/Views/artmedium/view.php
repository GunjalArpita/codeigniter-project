<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Art Mediums</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

    <style>
        /* Global Styles */
        body {
            display: flex;
            min-height: 100vh;
            background: url('/image/bg.jpeg') no-repeat center center/cover;
            color: #fff;
            font-family: 'Poppins', sans-serif;
        }

        /* Background Overlay */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6); /* Dark overlay */
            z-index: -1;
        }

        /* Sidebar */
        .sidebar {
            width: 260px;
            height: 100vh;
            background-color: #2c3e50;
            padding-top: 20px;
            position: fixed;
            transition: 0.3s ease-in-out;
        }

        .sidebar h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #f1c40f;
            font-weight: bold;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 12px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            transition: 0.3s ease-in-out;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 16px;
            font-weight: 500;
        }

        .sidebar ul li:hover {
            background-color: #34495e;
        }

        /* Main Content */
        .main-content {
            margin-left: 260px;
            width: 100%;
            padding: 20px;
        }

        /* Navbar */
        .navbar {
            background-color: rgba(255, 255, 255, 0.9);
            color: #333;
            padding: 15px 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
        }

        .navbar h2 {
            margin: 0;
            font-weight: 600;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: rgba(255, 255, 255, 0.9);
            color: #333;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #2980b9;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: rgba(41, 128, 185, 0.2);
            transition: 0.3s ease-in-out;
        }

        /* Buttons */
        .btn-back {
            display: inline-block;
            padding: 10px 18px;
            background-color: #27ae60;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px;
            font-weight: 500;
            transition: 0.3s ease-in-out;
        }

        .btn-back:hover {
            background-color: #219150;
        }

    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <h3><i class="bi bi-palette"></i> Admin Panel</h3>
        <ul>
            <li><a href="/admin"><i class="bi bi-arrow-left"></i> Back</a></li>
            <li><a href="<?= base_url('artmedium/view') ?>"><i class="bi bi-brush"></i> View Art Mediums</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <div class="main-content">

        <!-- Navbar -->
        <div class="navbar">
            <h2><i class="bi bi-easel"></i> All Art Mediums</h2>
        </div>

        <!-- Add Button -->
        <a href="<?= base_url('artmedium/create') ?>" class="btn-back"><i class="bi bi-plus-circle"></i> Add Art Medium</a>

        <!-- Table -->
        <table>
            <thead>
                <tr>
                    <th>Art Medium Name</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($artmediums as $artmedium): ?>
                <tr>
                    <td><?= esc($artmedium['artmediumname']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

</body>
</html>
