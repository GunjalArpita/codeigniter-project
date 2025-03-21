<!DOCTYPE html>
<html>
<head>
    <title>Art Product List</title>
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
            margin-top: 20px;
            background: #fff;
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
    <h2>Art Product List</h2>
    <a href="<?= site_url('artproduct/create') ?>">Add New Art Product</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Art Product Name</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($artproducts as $product): ?>
        <tr>
            <td><?= $product['artproductid'] ?></td>
            <td><?= $product['artproductname'] ?></td>
            <td>
                <a href="<?= site_url('artproduct/edit/'.$product['artproductid']) ?>">Edit</a>
                <a href="<?= site_url('artproduct/delete/'.$product['artproductid']) ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
