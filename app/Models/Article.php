<?php
namespace App\Models;
use Carbon\Carbon;
class Article
{
    public $id;
    public $created_at;
    public $title;
    public $content;

    public function __construct($id, $created_at, $title, $content)
    {
        $this->id = $id;
        $this->created_at = $created_at;
        $this->title = $title;
        $this->content = $content;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getCreatedAt()
    {
        if (!$this->created_at) {
            return $this->created_at;
        }

        return new Carbon($this->created_at);
    }
}
