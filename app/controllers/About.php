<?php 

class About extends Controller {
  public function index($name = 'dodi', $job = 'Programmer') {
    $data["name"] = $name;
    $data["job"] = $job;
    $data['judul'] = 'About';
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }
  
  public function page() {
    $data['judul'] = 'Page';
    $this->view('templates/header', $data);
    $this->view('about/page');
    $this->view('templates/footer');
  }
    
}