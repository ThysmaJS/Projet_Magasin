<?php 

class Article {
    public $id;
    public $name;
    public $price;
    public $quantity;
    public $deliveryMode;

    public function __construct($id, $name, $price,$quantity, $deliveryMode) {
        $this->id = $id;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->deliveryMode = $deliveryMode;
    }
}

class ArticleManager {
    private $articles = [];

    public function __construct() {
        $this->articles[] = new Article(1, "Carotte", 1.99, 4, "shop");
        $this->articles[] = new Article(2, "Tomate", 2.49, 2, "house");
        $this->articles[] = new Article(3, "Brocoli", 1.79, 1, "box");
        $this->articles[] = new Article(4, "Poivron", 2.99, 5, "shop");
        $this->articles[] = new Article(5, "Courgette", 1.89, 10, "house");
    }

    public function getArticles() {
        return $this->articles;
    }
}

$articleManager = new ArticleManager();
$articles = $articleManager->getArticles();