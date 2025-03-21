<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Artist Art Type</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { max-width: 400px; margin: auto; }
        select, button { padding: 10px; width: 100%; margin-top: 10px; }
        button { background-color: green; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h2>Add Artist Art Type</h2>
    <form action="/artistarttype/store" method="post">
        <label for="artistid">Artist:</label>
        <select id="artistid" name="artistid" required>
            <option value="">Select Artist</option>
            <?php foreach ($artists as $artist): ?>
                <option value="<?= $artist['artistid'] ?>"><?= $artist['artistid'] ?></option>
            <?php endforeach; ?>
        </select>

        <label for="arttypeid">Art Type:</label>
        <select id="arttypeid" name="arttypeid" required>
            <option value="">Select Art Type</option>
            <?php foreach ($arttypes as $arttype): ?>
                <option value="<?= $arttype['arttypeid'] ?>"><?= $arttype['arttypeid'] ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Save</button>
    </form>
</body>
</html>
