<?php

require_once ROOT_PATH . '/router/routes.php';

class Router {
    public $request;

    /**
     * @var
     */
    public $routes;

    public function __construct( $routes )
    {
        $this->request    = $_SERVER['REQUEST_URI'];
        $this->routes = $routes;

        $this->request();
    }

    /**
     * Parse request
     */
    public function request()
    {
        if ( !empty( $this->routes ) ) {
            $is_404 = true;

            foreach ( $this->routes as $route ) {
                if ( $this->request == $route['url'] ) {
                    $this->render( $route['view'] );

                    $is_404 = false;
                }
            }

            if ( $is_404 ) {
                require_once ROOT_PATH . PATH_TO_VIEWS . '/404.php';
            }

        }
    }

    /**
     * Render view
     * @param $view
     */
    public function render( $view )
    {
        if ( file_exists( $view ) ) {
            require_once $view;
        }
    }
}

$router = new Router( $routes );




