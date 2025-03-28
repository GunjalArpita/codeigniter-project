
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    
</head>
<body>


<?= $this->extend('layouts/artist_main_layout'); ?>


<div class="content">
    <h2>Welcome to Artist Dashboard</h2>
    <p>Here you can manage Art Type, Art Medium, and Art Product.</p>
</div>

</body>
</html>
