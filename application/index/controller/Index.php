<?php
namespace app\index\controller;
use app\index\model\Blog as BlogModel;
use app\index\model\Article as ArticleModel;

class Index extends Base
{
    public function index()
    {
        $articleModel = new ArticleModel();
        $articles = $articleModel->getAllAllArticles();
       // dump($articles);
        $EduInfoSystem = $articleModel->getEduInfoSystem(input('cateid'), 5);
        $EduRoomSolution = $articleModel->getEduRoomSolution(input('cateid'), 5);
        $Instruments = $articleModel->getInstruments(input('cateid'), 5);


        $this->assign(['EduInfoSystem'=>$EduInfoSystem, 'EduInfoSystem'=>$EduInfoSystem]);
        $this->assign(['EduRoomSolution'=>$EduRoomSolution, 'EduRoomSolution'=>$EduRoomSolution]);
        $this->assign(['Instruments'=>$Instruments, 'Instruments'=>$Instruments]);
        $this->assign(['articles'=>$articles]);
        return $this->fetch('index');
    }
}
