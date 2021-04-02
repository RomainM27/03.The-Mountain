<?php
class Connexion
{
    private static $_pdo = "mysql:host=localhost;dbname=carnetadresse;charset=UTF8, root, root27, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ])";
    public static function connexionBDD()
    {
        return new PDO(self::$_pdo);
    }
}

class Post
{
    protected $id_post, $title_post, $content_post;


    public function __construct(array $post)
    {
        $this->hydrate($post);
    }


    public function hydrate(array $donnees)
    {

        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }


    // fonction //

    public function addPost()
    {
        // ajoute un post 
    }

    public function removePost()
    {
        // suprime un post avec son id 
    }


    public function findAllPost()
    {
        // affiche tout les post
    }


    // getter  //
    /**
     * Get the value of id_post
     */
    public function getId_post($id_post)
    {
        $id_post = (int) $id_post;

        if ($id_post > 0) {
            $this->id_post = $id_post;
        }
        return $this->id_post;
    }

    /**
     * Get the value of title_post
     */
    public function getTitle_post()
    {
        return $this->title_post;
    }

    /**
     * Get the value of content_post
     */
    public function getContent_post()
    {
        return $this->content_post;
    }


    // setter  //
    /**
     * Set the value of id_post
     *
     * @return  self
     */
    public function setId_post($id_post)
    {
        $this->id_post = $id_post;

        return $this;
    }

    /**
     * Set the value of title_post
     *
     * @return  self
     */
    public function setTitle_post($title_post)
    {
        $this->title_post = $title_post;

        return $this;
    }

    /**
     * Set the value of content_post
     *
     * @return  self
     */
    public function setContent_post($content_post)
    {
        $this->content_post = $content_post;

        return $this;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class='container'>


</body>

</html>