<?php
use App\Controllers\HomeController;
if(!isset($_GET['id']))
{
    $_GET['id']=null;
}
echo '<pre>';
var_dump($_SERVER['REQUEST_URI']);
echo '</pre>';


if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    if($_SERVER['REQUEST_URI'] == '/projet-perso/procedural/public/')
    {
        return (new HomeController($db))->index();
    }
    elseif ($_SERVER['REQUEST_URI'] == '/articles')
    {
        require  __DIR__.'/../views/articles/index.php';
    }
    elseif ($_SERVER['REQUEST_URI'] == '/articles/create')
    {
        require __DIR__ . '/../views/articles/create.php';
    }
    elseif ($_SERVER['REQUEST_URI'] == '/articles/edit?id=' .$_GET['id'])
    {
        require __DIR__.'/../views/articles/edit.php';
    }
    elseif ($_SERVER['REQUEST_URI'] == '/articles?id=' .$_GET['id'])
    {
        require __DIR__.'/../views/articles/index.php';
    }
    elseif ($_SERVER['REQUEST_URI'] == '/articles/create')
    {
        require  __DIR__.'/../views/articles/create.php';
    }

    else{
        return http_response_code(404);
    }
}
elseif ($_SERVER['REQUEST_METHOD']=='POST')
{
    if ($_SERVER['REQUEST_URI'] == '/articles/create'){
        return 'ok';
    }

}else{
    echo 'method not allowed';
}
?>
