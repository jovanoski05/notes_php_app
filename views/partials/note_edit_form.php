<div style="padding:15px;justify-content:center;" class="d-flex text-center">
    <form method="POST" action="/notesapp/note/edit">
    <div class="form-group">
        <div class="m-3">
            <label for="title">Title</label>
            <input type="text" value="<?=$card['title']?>" class="form-control <?= !empty($errors['title']) ? 'is-invalid' : '' ?>" id="title" name="title" placeholder="Title" required>
            <div class="invalid-feedback">
                <?= $errors['title'] ?>
            </div>
        </div>
        <div class="m-3">
            <label for="subtitle">Subtitle</label>
            <input type="text" value="<?= $card["subtitle"]?>" class="form-control <?= !empty($errors['subtitle']) ? 'is-invalid' : '' ?>" id="subtitle" name="subtitle" placeholder="Subtitle [Optional]">
            <div class="invalid-feedback">
                <?= $errors['subtitle'] ?>
            </div>
        </div>
    </div>
    <!--<div class="form-group">
        <label for="exampleFormControlSelect1">Example select</label>
        <select class="form-control" id="exampleFormControlSelect1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect2">Example multiple select</label>
        <select multiple class="form-control" id="exampleFormControlSelect2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        </select>
    </div>-->
    <div class="form-group">
        <label for="content">Note content</label>
        <textarea class="form-control <?= !empty($errors['content']) ? 'is-invalid' : '' ?>" id="content" name="content" rows="3" required><?= $card['body'] ?></textarea>
        <div class="invalid-feedback">
                <?= $errors['content'] ?>
        </div>
    </div>
    <a href="/notesapp/note?id=<?= $card['id'] ?>" class="btn btn-outline-primary">Cancel</a>
    <div clas="form-group">
        <input type="hidden" name="_method" value="PATCH">
        <input type='hidden' name='id' value="<?= $card['id'] ?>">
        <input type="submit" class="btn btn-outline-warning m-3" value="Update Note">
    </div>
    </form>
    <hr>
</div>