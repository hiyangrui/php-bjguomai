<?php
namespace app\index\controller;
use app\index\model\Blog as BlogModel;
use app\index\model\Article as ArticleModel;

class Blog extends Base
{
    public function blog()
    {
        $articleModel = new ArticleModel();
        $articles = $articleModel->getAllAllArticles();
        $this->assign(['articles'=>$articles]);
        //dump($articles);die;
        return $this->fetch('blog');
    }
}
