<?php
require_once 'models/PortfolioModel.php';

class HomeController {
    private $model;
    
    public function __construct() {
        $this->model = new PortfolioModel();
    }
    
    public function index() {
        $data = $this->model->getPortfolioData();
        require_once 'views/home.php';
    }
}
?>