<?php 

    namespace App\Controllers;

    use MF\Controller\Action;

    class indexControllers extends Action {

        public function index() {
            $this->view->dados = array('Vasco','Botafogo','Flamengo','Fluminense');
            $this->render('index');
        }

        public function aboutus() {
            $this->view->dados = array('Palmeiras','Corinthians','São Paulo','Santos');
            $this->render('aboutus');
        }

    }

?>