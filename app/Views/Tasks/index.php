<?= $this->extend('layouts/default'); ?>

<?= $this->section('title'); ?>Tasks<?= $this->endsection(); ?>

<?= $this->section('content'); ?>
  <h1>Tasks</h1>
  <a href="<?= site_url("/tasks/new")?>">New Task</a>

  <?php if($tasks): ?>

    <ul>
      <?php foreach($tasks as $task): ?>
        <li>
          <a href="<?= site_url("/tasks/show/" . $task->id) ?>">
            <?= esc($task->description) ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
    <?= $pager->links() ?>
  <?php else: ?>
    <p>No task found</p>
  <?php endif; ?>

<?= $this->endsection(); ?>