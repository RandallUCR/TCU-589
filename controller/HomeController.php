<?php

class HomeController {
    public function __construct() {
        $this->view = new View();
    }

    public function index(){
      $this->view->show("homeView.php");
    }
}

?>
