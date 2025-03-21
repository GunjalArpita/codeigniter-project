<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
</head>
<body>

    <h2>Add Admin</h2>

    <?php if(session()->getFlashdata('success')): ?>
        <p style="color: green;"><?php echo session()->getFlashdata('success'); ?></p>
    <?php endif; ?>

    <form action="<?= base_url('admin/create') ?>" method="post">
        <label>Email:</label>
        <input type="email" name="adminemail" required><br><br>

        <label>Password:</label>
        <input type="password" name="adminpass" required><br><br>

        <button type="submit">Add Admin</button>
    </form>

</body>
</html>
