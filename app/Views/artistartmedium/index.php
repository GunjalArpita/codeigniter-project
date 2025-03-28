<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Art Mediums</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        .btn { padding: 8px 12px; text-decoration: none; color: white; border-radius: 5px; }
        .btn-add { background-color: green; }
        .btn-delete { background-color: red; }
    </style>
</head>
<body>
    <h2>Artist Art Mediums</h2>
    <a href="/artistartmedium/create" class="btn btn-add">Add New</a>
    <table>
        <tr>
            <th>Artist ID</th>
            <th>Art Medium ID</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($artistartmediums as $entry): ?>
        <tr>
            <td><?= $entry['artistid'] ?></td>
            <td><?= $entry['artmediumid'] ?></td>
            <td>
                <a href="/artistartmedium/delete/<?= $entry['artistid'] ?>/<?= $entry['artmediumid'] ?>" class="btn btn-delete">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
