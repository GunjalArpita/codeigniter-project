<!DOCTYPE html>
<html>
<head>
    <title>Edit Arttype</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        form {
            background: #fff;
            padding: 20px;
            max-width: 400px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            margin-top: 15px;
            padding: 10px;
            width: 100%;
            background: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background: #218838;
        }
    </style>
</head>
<body>
    <h2>Edit Arttype</h2>
    <form action="<?= site_url('arttype/update/'.$arttype['arttypeid']) ?>" method="post">
        <label>Arttype Name:</label>
        <input type="text" name="arttypename" value="<?= $arttype['arttypename'] ?>" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
