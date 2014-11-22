<?php

class ArticlesController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }


    public function lireAction()
    {
        $articleId = !is_null($this->getRequest()->getPost('id'))?$this->getRequest()->getPost('id'):NULL;
        if(!is_null($articleId)) {
            // récueration des infos de l'article
            $dataArticle = $articleId;

        }
    }


}

