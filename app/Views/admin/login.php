<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        /* Page Background */
        body {
            font-family: Arial, sans-serif;
            background: url('<?= base_url('assets/images/bg.jpg') ?>') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Login Container */
        .login-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 300px;
        }

        /* Heading */
        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        /* Input Fields */
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        /* Error Message */
        .error-message {
            color: red;
            font-size: 14px;
        }

        /* Submit Button */
        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>

    <div class="login-container">
        <h2>Admin Login</h2>

        <?php if(session()->getFlashdata('error')): ?>
            <p class="error-message"><?php echo session()->getFlashdata('error'); ?></p>
        <?php endif; ?>

        <form action="<?= base_url('admin/login') ?>" method="post">
            <label>Email:</label>
            <input type="email" name="adminemail" required>

            <label>Password:</label>
            <input type="password" name="adminpass" required>

            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>
