<?= $this->extend('layouts/default'); ?>

<?= $this->section('title'); ?>Profile<?= $this->endsection(); ?>

<?= $this->section('content'); ?>
  <h1>Profile</h1>
  
  <dl>
    <dt>Name</dt>
    <dd><?= esc($user->name) ?></dd>

    <dt>email</dt>
    <dd><?= esc($user->email) ?></dd>
  </dl>

  <p><a href="<?= site_url("/profile/edit") ?>">Edit</a></p>
  <p><a href="<?= site_url("/profile/editpassword") ?>">Edit Password</a></p>
<?= $this->endsection(); ?>