<?= $this->extend('layouts/default'); ?>

<?= $this->section('title'); ?>Home<?= $this->endsection(); ?>

<?= $this->section('content'); ?>
  <h1>Welcome</h1>

  <a href="<?= site_url('/signup') ?>">Sign up</a>

<?= $this->endsection(); ?>