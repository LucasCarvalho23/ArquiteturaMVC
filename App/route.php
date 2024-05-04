<?php 

    namespace App;

    use MF\Init\Bootstrap;

    class Route extends Bootstrap {

        protected function initRoutes() {

            $routes['home'] = array(
                'route' => '/',
                'controller' => 'indexControllers',
                'action' => 'index'
            ); 

            $routes['aboutus'] = array(
                'route' => '/aboutus',
                'controller' => 'indexControllers',
                'action' => 'aboutus'
            );

            $this->setRoutes($routes);
        }


    }

?>