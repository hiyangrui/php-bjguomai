<?php
namespace app\index\controller;
use app\index\model\Article as ArticleModel;

class Artlist extends Base
{
    /**
     * @return mixed
     */
    public function lis()
    {
        $articleModel = new ArticleModel();
        $articles = $articleModel->getAllArticles(input('cateid'));
        $hotArticles = $articleModel->getHotArticles(input('cateid'), 5);
//        $EduInfoSystem = $articleModel->getEduInfoSystem(input('cateid'), 5);
//        $EduRoomSolution = $articleModel->getEduRoomSolution(input('cateid'), 5);
//        $Instruments = $articleModel->getInstruments(input('cateid'), 5);
//
//
//        $this->assign(['EduInfoSystem'=>$EduInfoSystem, 'EduInfoSystem'=>$EduInfoSystem]);
//        $this->assign(['EduRoomSolution'=>$EduRoomSolution, 'EduRoomSolution'=>$EduRoomSolution]);
//        $this->assign(['Instruments'=>$Instruments, 'Instruments'=>$Instruments]);
        $this->assign(['articles'=>$articles, 'hotArticles'=>$hotArticles]);
        return $this->fetch('lis');
    }
}
