<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .form-control {
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
        }

        .btn-login {
            background: #007BFF;
            color: white;
            border: none;
            padding: 10px;
            font-size: 18px;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
        }

        .btn-login:hover {
            background: #0056b3;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Artist Login</h2>

        <?php if (session()->getFlashdata('error')): ?>
            <p class="error-message"><?= session()->getFlashdata('error'); ?></p>
        <?php endif; ?>

        <form action="<?= base_url('/artist/authenticate'); ?>" method="post">
            <div class="mb-3">
                <label for="artistemail" class="form-label">Email:</label>
                <input type="email" name="artistemail" id="artistemail" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-login">Login</button>
        </form>
    </div>

</body>
</html>
