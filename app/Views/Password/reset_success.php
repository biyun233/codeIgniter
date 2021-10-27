<?= $this->extend('layouts/default'); ?>

<?= $this->section('title'); ?>Password reset<?= $this->endsection(); ?>

<?= $this->section('content'); ?>
  <h1>Password reset</h1>
  
  <p>Password reset successfully</p>

  <p><a href="<?= site_url("/login") ?>">Login</a></p>
<?= $this->endsection(); ?>