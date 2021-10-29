<?= $this->extend('layouts/default'); ?>

<?= $this->section('title'); ?>Delete Task<?= $this->endsection(); ?>

<?= $this->section('content'); ?>
  <h1 class="title">Delete Task</h1>
  
  <p>Are you sure?</p>

  <?= form_open('/tasks/delete/' . $task->id) ?>
    <button>Yes</button>
    <a href="<?= site_url('/tasks/show/' . $task->id) ?>">Cancel</a>
<?= $this->endsection(); ?>