<?php

namespace App\controllers;
use PDO;
use App\Models\Article;

class HomeController
{
    protected $db;
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function index(){
        $query = $this->db->query('SELECT * FROM article');
        $articles = $query->fetchAll(PDO::FETCH_OBJ);

        $articlesObject = [];
        foreach ($articles as $article){
            $articlesObject[] = new Article($article->id,$article->created_at,$article->title,$article->content);
        }

        require __DIR__ . '/../../views/index.php';
    }
}
