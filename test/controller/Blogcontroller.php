<?php 

require_once('model/Comments.php');

function listPosts()
{
    $postManager = new CommentManager(); // Création d'un objet
    $posts = $postManager->getComments($_GET['id']); // Appel d'une fonction de cet objet

    require('view/frontend/listPostsView.php');
}

