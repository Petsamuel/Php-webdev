<?php


class Home extends Controller {

    public function index(){

        // echo "this is the home controller";
        // $modal = new Model;
        // $modal->test();
        $this->view('home');

    }
    public function edit(){

        echo "this is the home edit controller";
  
        $this->view('home');

    }

}



