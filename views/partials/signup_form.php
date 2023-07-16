<div class="d-flex justify-content-center text-center">
<form class="justify-content-center" method="POST" action="/notesapp/signup">
<div class="form-group mb-3">
    <label for="email">Email</label>
    <input type="email" class="form-control <?= !empty($errors['email']) ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="name@email.com" value="<?= $email ?? '' ?>">
    <div class="invalid-feedback">
        <?= $errors['email'] ?>
    </div>
  </div>
  <div class="form-group mb-3">
    <label for="username">Username</label>
    <input type="text" class="form-control <?= !empty($errors['username']) ? 'is-invalid' : '' ?>" id="username" name="username" placeholder="Username" value="<?= $username ?? '' ?>">
    <div class="invalid-feedback">
        <?= $errors['username'] ?>
    </div>
  </div>
  <div class="form-group mb-3">
    <label for="password">Password</label>
    <input type="password" class="form-control <?= !empty($errors['password']) ? 'is-invalid' : '' ?>" id="password" name="password" placeholder="Password" value="<?= $password ?? null ?>">
    <div class="invalid-feedback">
        <?= $errors['password'] ?>
    </div>
  </div>
  <div class="form-group mb-3">
    <label for="conf_password">Confirm Password</label>
    <input type="password" class="form-control <?= !empty($errors['confirm_password']) ? 'is-invalid' : '' ?>" id="conf_password" name="confirm_password" placeholder="Confirm Password" value="<?= $confirm_password ?? null ?>">
    <div class="invalid-feedback">
        <?= $errors['confirm_password'] ?>
    </div>
  </div>
  <input type="hidden" class="form-control <?= !empty($errors['matching_passwords']) ? 'is-invalid' : '' ?> ">
  <div class="invalid-feedback">
    <?= $errors['matching_passwords'] ?>
  </div>
  <input type="submit" class="btn btn-outline-warning" value="Sign Up">
</form>
</div>