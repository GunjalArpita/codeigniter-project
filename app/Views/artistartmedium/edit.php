<!-- <?= $this->extend('layout/main') ?> -->
<?= $this->section('content') ?>

<h2>Edit Artist - Art Medium Relationship</h2>

<form action="/artistartmedium/update/<?= $artistArtMedium['artistid'] ?>/<?= $artistArtMedium['artmediumid'] ?>" method="post">
    <label>Artist ID:</label>
    <input type="text" name="artistid" value="<?= $artistArtMedium['artistid'] ?>" readonly>

    <label>Art Medium ID:</label>
    <input type="text" name="artmediumid" value="<?= $artistArtMedium['artmediumid'] ?>" readonly>

    <button type="submit">Update</button>
</form>

<!-- <?= $this->endSection() ?> -->
