<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class News_Controller extends FT_Controller
{
    public function indexAction()
    {
        echo '<pre>';
        print_r($this);
        echo '<h1>Index Action</h1>';
    }

    public  function detailAction()
    {
        echo "<h1>hello detail</h1>";
    }
}