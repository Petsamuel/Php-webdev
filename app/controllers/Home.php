<?php


class Home  {

    use Controller;
    public function index(){

        $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;
        $this->view('home', $data);

    }
    public function edit(){

        echo "this is the home edit controller";
  
        $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;
        $this->view('home', $data);

    }

}



