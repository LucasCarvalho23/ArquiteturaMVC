<?php 

    namespace MF\Controller;

    abstract class Action {
        
        protected $view;

        public function __construct() {
            $this->view = new \stdClass();
        }

        protected function render($view) {
            $atualClass = get_class($this);
            $atualClass = str_replace("App\\Controllers\\", "", $atualClass);
            $atualClass = strtolower(str_replace("Controller", "", $atualClass));
            require_once "../App/Views/index/".$view.".phtml";
        }

    }

?>