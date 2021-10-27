<?= $this->extend('layouts/default'); ?>

<?= $this->section('title'); ?>Forgot password<?= $this->endsection(); ?>

<?= $this->section('content'); ?>
  <h1>Forgot password</h1>
  <?= form_open("/password/processForgot") ?>
    <div>
      <label for="email">Email</label>
      <input type="text" name="email" id="email" value="<?= old('email') ?>">
    </div>

    <button>Send</button>
  </form>
  
<?= $this->endsection(); ?>