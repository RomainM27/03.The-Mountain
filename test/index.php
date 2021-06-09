<?php
require('controller/Blogcontroller.php');
require './vendor/autoload.php' ;

$router = new AltoRouter();

$router->map('GET', '/', 'home');




$match = $router->match();
if (is_array($match)){
    if (is_callable($match['target'])){
        call_user_func_array($match['target'], $match['params']);
    } else {
        $params = $match['params'];
        ob_start();
        require "./views/{$match['target']}.php";
        $pageContent = ob_get_clean();
    }
    require './views/template.php';
} else {
    echo '404';
}


// try {
//     if (isset($_GET['action'])) {
//         if ($_GET['action'] == 'listPosts') {
//             listPosts();
//         } elseif ($_GET['action'] == 'post') {
//             if (isset($_GET['id']) && $_GET['id'] > 0) {
//                 post();
//             } else {
//                 throw new Exception('Aucun identifiant de billet envoyé');
//             }
//         } elseif ($_GET['action'] == 'addComment') {
//             if (isset($_GET['id']) && $_GET['id'] > 0) {
//                 if (!empty($_POST['author']) && !empty($_POST['comment'])) {
//                     addComment($_GET['id'], $_POST['author'], $_POST['comment']);
//                 } else {
//                     throw new Exception('Tous les champs ne sont pas remplis !');
//                 }
//             } else {
//                 throw new Exception('Aucun identifiant de billet envoyé');
//             }
//         }
//     } else {
//         listPosts();
//     }
// } catch (Exception $e) { // S'il y a eu une erreur, alors...
//     $errorMessage = $e->getMessage();
//     require('view/errorView.php');
// }