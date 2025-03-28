
<!DOCTYPE html>
<html>
<head>
    <title>Artist List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f8f8f8;
          
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
            background-color: #007BFF;
            color: #fff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: #fff;
        }
    </style>
</head>
<body>
    <h2>Artist List</h2>
    <a href="<?= site_url('artist/create') ?>">Add New Artist</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Admin ID</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Address</th>
            <th>Experience</th>
            <th>Famous For</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($artists as $artist): ?>
        <tr>
            <td><?= $artist['artistid'] ?></td>
            <td><?= $artist['adminid'] ?></td>
            <td><?= $artist['artistname'] ?></td>
            <td><?= $artist['artistmno'] ?></td>
            <td><?= $artist['artistemail'] ?></td>
            <td><?= $artist['artistaddress'] ?></td>
            <td><?= $artist['artistexperience'] ?></td>
            <td><?= $artist['artistfamous'] ?></td>
            <td>
                <a href="<?= site_url('artist/edit/'.$artist['artistid']) ?>">Edit</a>
                <a href="<?= site_url('artist/delete/'.$artist['artistid']) ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
