<?php

    namespace Controllers;

    use Models\UserModel;
    use Views\MainView;

    class UserController extends Controller{

        public function __construct(){ 
            $this->model = new UserModel();
        }

        public function execute(){
            
            \Router::route('user/login', function(){
                if(isset($_POST['submit']) || isset($_SESSION['logged'])){
                    if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
                        $this->view = new MainView('home');
                        $this->view->render(array('user' => 'eu'));
                    }else{
                        $result = $this->model->login($_POST['email'], $_POST['password']);
                        if($result == true){
                            $this->view = new MainView('home');
                            $this->view->render(array('user' => 'eu'));
                        }else{
                            $this->view = new MainView('user/login');
                            $this->view->render(); 
                        }
                    }
                }else{
                    $this->view = new MainView('user/login');
                    $this->view->render();
                }
            });

        }

    }