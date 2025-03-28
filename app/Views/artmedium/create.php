<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Art Medium</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { max-width: 400px; margin: auto; }
        input, button { padding: 10px; width: 100%; margin-top: 10px; }
        button { background-color: green; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h2>Add Art Medium</h2>
    <form action="/artmedium/store" method="post">
        <label for="artmediumname">Art Medium Name:</label>
        <input type="text" id="artmediumname" name="artmediumname" required>
        <button type="submit">Save</button>
    </form>
</body>
</html>
