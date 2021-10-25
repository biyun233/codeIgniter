<?= $this->extend('layouts/default'); ?>

<?= $this->section('title'); ?>Delete User<?= $this->endsection(); ?>

<?= $this->section('content'); ?>
  <h1>Delete User</h1>
  
  <p>Are you sure?</p>

  <?= form_open('/admin/users/delete/' . $user->id) ?>
    <button>Yes</button>
    <a href="<?= site_url('/admin/users/show/' . $user->id) ?>">Cancel</a>
<?= $this->endsection(); ?>