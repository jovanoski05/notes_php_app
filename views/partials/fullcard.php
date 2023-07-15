<div class="m-3 card text-white bg-warning mb-3 shadow" style="max-width: 18rem; margin-left:10px; margin-right:10px;">
  <div class="card-header"><?= $card['date_created'] ?></div>
  <div class="card-body">
    <h5 class="card-title"><?= $card['title'] ?></h5>
    <?php if (!empty($card['subtitle'])) : ?>
        <h6 class="card-subtitle mb-2"><?= $card['subtitle'] ?></h6>
    <?php endif ?>
    <p class="card-text"><?= $card['body'] ?></p>
    <a href="/notesapp/note/edit?id=<?= $card['id'] ?>" class="btn btn-light">Edit note</a>
    <form action="/notesapp/note" method="POST" class="justify-self-center mt-2">
    <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" value="<?= $card['id'] ?>" name="id">
        <input type="submit" class="btn btn-outline-danger" value="Delete note">
    </form>
  </div>
</div>