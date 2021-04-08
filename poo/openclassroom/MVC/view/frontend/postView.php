<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
<h1 class="my-5">Mon super blog !</h1>
<p><a href="index.php">Retour à la liste des billets</a></p>

<div class="card">
    <h3 class="my-3">
        <?= htmlspecialchars($post['title']) ?>
        <em>le <?= $post['creation_date_fr'] ?></em>
    </h3>

    <p>
        <?= nl2br(htmlspecialchars($post['content'])) ?>
    </p>
</div>

<h2 class="my-4">Commentaires</h2>
<h3 class="my-3">Ajouter un com</h3>
<form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
    <div>
        <label class="form-label" for="author">Auteur</label><br />
        <input class="form-control" type="text" id="author" name="author" />
    </div>f
    <div>
        <label class="form-label" for="comment">Commentaire</label><br />
        <textarea class="form-control" id="comment" name="comment"></textarea>
    </div>
    <div>
        <input type="submit" class="btn btn-success my-4" />
    </div>
</form>
<?php
while ($comment = $comments->fetch()) {
?>
    <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
    <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
<?php
}
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>