
<!DOCTYPE html>
<html>
<head>
    <title>Edit Artist</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            margin: 0;
        }
        h2 {
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            max-width: 400px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            margin-top: 15px;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h2>Edit Artist</h2>
    <form action="<?= site_url('artist/update/'.$artist['artistid']) ?>" method="post">
        <label>Admin ID:</label>
        <input type="number" name="adminid" value="<?= $artist['adminid'] ?>" required>
        <br>
        <label>Artist Name:</label>
        <input type="text" name="artistname" value="<?= $artist['artistname'] ?>" required>
        <br>
        <label>Mobile Number:</label>
        <input type="text" name="artistmno" value="<?= $artist['artistmno'] ?>" required>
        <br>
        <label>Email:</label>
        <input type="email" name="artistemail" value="<?= $artist['artistemail'] ?>" required>
        <br>
        <label>Address:</label>
        <input type="text" name="artistaddress" value="<?= $artist['artistaddress'] ?>" required>
        <br>
        <label>Experience:</label>
        <input type="number" name="artistexperience" value="<?= $artist['artistexperience'] ?>" required>
        <br>
        <label>Famous For:</label>
        <input type="text" name="artistfamous" value="<?= $artist['artistfamous'] ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
