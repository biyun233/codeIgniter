<?= $this->extend('layouts/default'); ?>

<?= $this->section('title'); ?>Signup<?= $this->endsection(); ?>

<?= $this->section('content'); ?>
  <h1>Signup</h1>

  <p>Account activation successful.</p>
  <a href="<?= site_url("/")?>">Home</a>
<?= $this->endsection(); ?>