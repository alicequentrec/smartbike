<?php
include_once('model/velosModel.php');

class velosController
{

    private $model;

    public function __construct()
    {
        $this->model = new velosModel;
    }

    public function getArticles()
    {
        $articles = $this->model->getArticles();
        include_once('view/velos.php');
    }
    public function afficherDetailsVelos($id)
{
    $vélosdétails = $this->model->getVelosdétails($id);

    
    include_once('view/détailsvelos.php');
}

   
}

?>
