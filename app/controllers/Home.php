<?php

class Home extends Controller {
  public function index() {
    $data['title'] = 'Peduli Kesehatan';
    $this->view('templates/headBody/head', $data);
    $this->view('templates/home/nav');
    $this->view('home/index');
    $this->view('templates/home/footer');
    $this->view('templates/headBody/foot');
  }
}