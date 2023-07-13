<div class="m-3 card text-white bg-warning mb-3 shadow" style="max-width: 18rem; margin-left:10px; margin-right:10px;">
  <div class="card-header"><?= $card['date_created'] ?></div>
  <div class="card-body">
    <h5 class="card-title"><?= $card['title'] ?></h5>
    <?php if (!empty($card['subtitle'])) : ?>
        <h6 class="card-subtitle mb-2"><?= $card['subtitle'] ?></h6>
    <?php endif ?>
    <p class="card-text"><?= $card['body'] ?></p>
    <form method="POST">
      <input type="hidden" value="<?= $card['id'] ?>" name="id">
      <input type="submit" class="btn btn-danger" value="Delete Note">
    </form>
  </div>
</div>