<?php

class Film extends Controller {

    function __construct(){
        parent::__construct();
        error_log('Film construct -> Inicio');
    }

    function render(){
        $this->view->render("Film");
    }
}
?>