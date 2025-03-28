<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Art Products</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!-- FontAwesome for icons -->

    <style>
        /* General Styles */
        body {
            display: flex;
            min-height: 100vh;
            background: url('/image/bg.jpeg') no-repeat center center/cover;
            font-family: 'Poppins', sans-serif;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #343a40;
            color: white;
            position: fixed;
            padding-top: 20px;
            transition: all 0.3s ease;
        }

        .sidebar h3 {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 12px 20px;
            border-bottom: 1px solid #495057;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 16px;
        }

        .sidebar ul li:hover {
            background-color: #495057;
        }

        /* Main Content */
        .main-content {
            margin-left: 250px;
            width: 100%;
            padding: 20px;
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(to right, #007bff, #6610f2);
            padding: 15px 20px;
            border-radius: 8px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar h2 {
            margin: 0;
            font-size: 22px;
        }

        /* Table */
        .table-container {
            margin-top: 20px;
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f1f1f1;
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

        .btn-add:hover {
            background-color: #218838;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .main-content {
                margin-left: 200px;
            }

            .btn-add {
                display: block;
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <h3>Admin Panel</h3>
        <ul>
            <li><a href="/admin"><i class="fas fa-arrow-left"></i> Back</a></li>
            <li><a href="<?= base_url('artproduct/view') ?>"><i class="fas fa-palette"></i> View Art Products</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <div class="main-content">

        <!-- Navbar -->
        <div class="navbar">
            <h2>All Art Products</h2>
        </div>

        <!-- Add Button -->
        <a href="<?= base_url('artproduct/create') ?>" class="btn-add"><i class="fas fa-plus"></i> Add Art Product</a>

        <!-- Table -->
        <div class="table-container">
            <table>
                <tr>
                    <th>Art Product Name</th>
                </tr>
                <?php foreach ($artproducts as $artproduct): ?>
                <tr>
                    <td><?= esc($artproduct['artproductname']) ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>

    </div>

</body>
</html>
