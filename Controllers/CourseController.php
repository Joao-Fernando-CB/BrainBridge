<?php

    namespace Controllers;

    use Models\CourseModel;
    use Views\MainView;

    class CourseController extends Controller{

        public function __construct(){ 
            $this->model = new CourseModel();
        }

        public function execute(){
            
            \Router::route('user/login', function(){
                if($_SESSION['logged'] == true){
                    $this->view = new MainView('course');
                    $this->view->render(array('user' => 'eu'));
                }else{
                    $this->view = new MainView('course/login');
                    $this->view->render();
                }
            });

        }

    }