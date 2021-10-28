<?= $this->extend('layouts/default'); ?>

<?= $this->section('title'); ?>Login<?= $this->endsection(); ?>

<?= $this->section('content'); ?>
  <h1>Login</h1>
  <?php if(session()->has('errors')): ?>
    <ul>
      <?php foreach(session('errors') as $error): ?>
        <li><?= $error ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
  <?= form_open("/login/create") ?>

    <div>
      <label for="email">Email</label>
      <input type="text" name="email" id="email" value="<?= old('email') ?>">
    </div>

    <div>
      <label for="password">Password</label>
      <input type="password" name="password">
    </div>

    <div>
      <label for="remember_me">
        <input type="checkbox" name="remember_me" id="remember_me"
              <?php if(old('remember_me')): ?> checked <?php endif; ?>> remember me
      </label>
    </div>

    <button>Log in</button>
    <a href="<?= site_url("/password/forgot")?>">Password Forgot?</a>
<?= $this->endsection(); ?>