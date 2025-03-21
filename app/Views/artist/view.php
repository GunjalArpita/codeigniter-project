<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Artists</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">All Artists</h2>

        <?php if(session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <?php if(session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Experience</th>
                    <th>Famous For</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($artists as $artist): ?>
                    <tr>
                        <td><?= $artist['artistid'] ?></td>
                        <td><?= $artist['artistname'] ?></td>
                        <td><?= $artist['artistmno'] ?></td>
                        <td><?= $artist['artistemail'] ?></td>
                        <td><?= $artist['artistaddress'] ?></td>
                        <td><?= $artist['artistexperience'] ?></td>
                        <td><?= $artist['artistfamous'] ?></td>
                        <td>
                            <a href="<?= site_url('artist/edit/'.$artist['artistid']) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= site_url('artist/delete/'.$artist['artistid']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this artist?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="<?= site_url('artist/create') ?>" class="btn btn-primary">Add New Artist</a>
    </div>
</body>
</html>
