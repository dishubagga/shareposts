<?php
    class Pages extends Controller{
        public function __construct(){
            
        }
        
        public function index(){
            if(isLoggedIn()){
                redirect('posts');
            }

            $data = [
                'title' => 'WorldShare',
                'description' => 'Simple Social neetwork app for sharing life moments'
            ];
            $this->view('pages/index', $data);
        }
        public function about(){
            $data = [
                'title' => 'About us',
                'description' => 'app to share posts with other users'
            ];
            $this->view('pages/about', $data);
        }
    }