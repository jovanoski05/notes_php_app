<div class="d-flex justify-content-center text-center">
<form class="justify-content-center" method="POST">
  <div class="form-group mb-3">
    <label for="email">Email</label>
    <input type="email" class="form-control <?= !empty($errors['email']) ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="Email" value="<?= $email ?? ''?>">
    <div class="invalid-feedback">
        <?= $errors['email'] ?>
    </div>
  </div>
  <div class="form-group mb-3">
    <label for="password">Password</label>
    <input type="password" class="form-control <?= !empty($errors['password']) ? 'is-invalid' : '' ?>" id="password" name="password" placeholder="Password">
    <div class="invalid-feedback">
        <?= $errors['password'] ?>
    </div>
  </div>

  <div class="form-group mb-3">
    <input type="hidden" class="form-control <?= !empty($errors['email_password']) ? 'is-invalid' : '' ?>">
    <div class="invalid-feedback">
        <?= $errors['email_password'] ?>
    </div>
  </div>
  <input type="submit" class="btn btn-outline-warning" value="Log In">
</form>
</div>