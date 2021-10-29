<?= $this->extend('layouts/default'); ?>

<?= $this->section('title'); ?>Login<?= $this->endsection(); ?>

<?= $this->section('content'); ?>
  <h1 class="title">Login</h1>
  <?php if(session()->has('errors')): ?>
    <ul>
      <?php foreach(session('errors') as $error): ?>
        <li><?= $error ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
  <div class="container">
  <?= form_open("/login/create") ?>

    <div class="field">
      <label class="label" for="email">Email</label>
      <div class="control">
        <input class="input" type="text" name="email" id="email" value="<?= old('email') ?>">
      </div>
    </div>

    <div class="field">
      <label class="label" for="password">Password</label>
      <div class="control">
        <input class="input" type="password" name="password">
      </div>
    </div>

    <div class="field">
      <label class="checkbox" for="remember_me">
        <input type="checkbox" name="remember_me" id="remember_me"
              <?php if(old('remember_me')): ?> checked <?php endif; ?>> remember me
      </label>
    </div>

    <div class="field is-grouped">
      <div class="control">
        <button class="button is-primary">Log in</button>
      </div>
      <div class="control">
        <a href="<?= site_url("/password/forgot")?>">Password Forgot?</a>
      </div>
    </div>

</form>
  </div>
  
<?= $this->endsection(); ?>