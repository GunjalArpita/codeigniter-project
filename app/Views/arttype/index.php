<!DOCTYPE html>
<html>
<head>
    <title>Arttype List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f8f8;
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        a {
            text-decoration: none;
            color: #007BFF;
            padding: 5px 10px;
            border: 1px solid #007BFF;
            border-radius: 4px;
            margin-right: 5px;
        }
        a:hover {
            background: #007BFF;
            color: #fff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background: #007BFF;
            color: #fff;
        }
    </style>
</head>
<body>
    <h2>Arttype List</h2>
    <a href="<?= site_url('arttype/create') ?>">Add New Arttype</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Arttype Name</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($arttypes as $arttype): ?>
        <tr>
            <td><?= $arttype['arttypeid'] ?></td>
            <td><?= $arttype['arttypename'] ?></td>
            <td>
                <a href="<?= site_url('arttype/edit/'.$arttype['arttypeid']) ?>">Edit</a>
                <a href="<?= site_url('arttype/delete/'.$arttype['arttypeid']) ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
