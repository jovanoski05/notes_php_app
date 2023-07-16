<div class="d-inline-flex">
<a href="/notesapp/note?id=<?= $card['id'] ?>" class="link-underline link-underline-opacity-0">
<div class="card text-white bg-warning mb-3 shadow" style="max-width: 18rem; margin-left:10px; margin-right:10px;">
  <div class="card-header"><?= $card['date_created'] ?></div>
  <div class="card-body">
    <h5 class="card-title"><?= $card['title'] ?></h5>
    <?php if (!empty($card['subtitle'])) : ?>
        <h6 class="card-subtitle mb-2"><?= $card['subtitle'] ?></h6>
    <?php endif ?>
    <!--<p class="card-text"><?= $card['body'] ?></p>-->
  </div>
</div>
</a>
</div>