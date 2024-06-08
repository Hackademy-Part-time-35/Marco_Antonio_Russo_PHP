<?php

include_once("../traccia_1/class.php");

class Post{
    private $title;
    private $category;
    private $tag;

    public function __construct(string $title,Category $category,array $tag){
        $this->title = $title;
        $this->category = get_class( $category );
        $this->tag = $tag;
    }

    public function getArticle(){
        $output = "<article>";
        $output .= "<h2>".$this->title."</h2>";
        $output .= "<p>Categoria: <span>" .$this->category. "</span></p>";
        $output .= "<ul>";
            foreach( $this->tag as $value ){
                $output .= "<li>".$value."</li>";
            }
        $output .= "</ul>";
        $output .= "</article>";
        return $output;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $starWars = new History();
        $post1 = new Post("Order 66", $starWars, ["Sci-fi", "Fantasy", "Chewbe"]);
        echo $post1->getArticle();
    ?>
</body>
</html>