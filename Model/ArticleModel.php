<?php 

class Article {
    public $id;
    public $name;
    public $price;
    public $quantity;
    public $deliveryMode;

}

class ArticleManager {
    private $articles = [];

    public function getArticles() {
        return $this->articles;
    }
}

$articleManager = new ArticleManager();
$articles = $articleManager->getArticles();