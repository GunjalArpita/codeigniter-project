<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Gallery Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
            display: flex;
            height: 100vh;
            background: url('/image/aa.jpg') no-repeat center center/cover;
        

        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar h2 {
            margin-bottom: 20px;
        }

        .sidebar nav ul {
            list-style: none;
            width: 100%;
            padding: 0;
        }

        .sidebar nav ul li {
            margin: 10px 0;
            width: 100%;
        }

        .sidebar nav ul li a {
            text-decoration: none;
            color: white;
            display: block;
            padding: 12px;
            background: #34495e;
            border-radius: 5px;
            text-align: center;
        }

        .sidebar nav ul li a:hover {
            background: #1abc9c;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        /* Navbar */
        .navbar {
            width: 100%;
            background: #3498db;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        /* Buttons */
        .buttons {
            display: flex;
            gap: 15px;
        }

        .btn {
            text-decoration: none;
            color: white;
            padding: 12px 20px;
            background: #e74c3c;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn:hover {
            background: #c0392b;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <h2>Dashboard</h2>
        <nav>
            <ul>
                <li><a href="admin/login">Admin</a></li>
                <li><a href="artist/login">Artist</a></li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
   

        <div class="buttons">
        <a href="<?= base_url('admin/login') ?>" class="btn">Admin</a>
        <a href="<?= base_url('artist/create') ?>" class="btn">Artist</a>

        </div>
    </main>

</body>
</html>
