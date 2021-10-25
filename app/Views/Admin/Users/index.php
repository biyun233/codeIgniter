<?= $this->extend('layouts/default'); ?>

<?= $this->section('title'); ?>Users<?= $this->endsection(); ?>

<?= $this->section('content'); ?>
  <h1>Users</h1>
  <a href="<?= site_url("/admin/users/new") ?>">New User</a>
  <?php if($users): ?>

    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>email</th>
          <th>Created at</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($users as $user): ?>
          <tr>
            <td>
              <a href="<?= site_url("/admin/users/show/" . $user->id) ?>">
                <?= esc($user->name) ?>
              </a>
            </td>
            <td><?= esc($user->name) ?></td>
            <td><?= $user->created_at ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <?= $pager->links() ?>
  <?php else: ?>
    <p>No users found</p>
  <?php endif; ?>

<?= $this->endsection(); ?>