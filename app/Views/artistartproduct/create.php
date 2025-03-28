<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Artist Art Product</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { max-width: 400px; margin: auto; }
        select, button { padding: 10px; width: 100%; margin-top: 10px; }
        button { background-color: green; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h2>Add Artist Art Product</h2>
    <form action="/artistartproduct/store" method="post">
        <label for="artistid">Artist:</label>
        <select id="artistid" name="artistid" required>
            <option value="">Select Artist</option>
            <?php foreach ($artists as $artist): ?>
                <option value="<?= $artist['artistid'] ?>"><?= $artist['artistid'] ?></option>
            <?php endforeach; ?>
        </select>

        <label for="artproductid">Art Product:</label>
        <select id="artproductid" name="artproductid" required>
            <option value="">Select Art Product</option>
            <?php foreach ($artproducts as $artproduct): ?>
                <option value="<?= $artproduct['artproductid'] ?>"><?= $artproduct['artproductid'] ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Save</button>
    </form>
</body>
</html>
