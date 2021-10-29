<?= $this->extend('layouts/default'); ?>

<?= $this->section('title'); ?>Signup<?= $this->endsection(); ?>

<?= $this->section('content'); ?>
  <h1 class="title">Signup</h1>

  <p>Sign up successful.</p>
  <a href="<?= site_url("/")?>">Home</a>
<?= $this->endsection(); ?>