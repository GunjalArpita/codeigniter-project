<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Artist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 500px;
            margin-top: 50px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add New Artist</h2>
        <form action="<?= site_url('artist/store') ?>" method="post">
            <div class="mb-3">
                <label class="form-label">Artist Name</label>
                <input type="text" name="artistname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Mobile</label>
                <input type="text" name="artistmno" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="artistemail" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="artistaddress" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Experience</label>
                <input type="text" name="artistexperience" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Famous For</label>
                <input type="text" name="artistfamous" class="form-control">
            </div>
            <button type="submit" class="btn btn-success w-100">Save Artist</button>
        </form>
        <hr>
        <form action="<?= site_url('artist/login') ?>" method="get">
            <button type="submit" class="btn btn-primary w-100">Already Login</button>
        </form>
    </div>
</body>
</html>
