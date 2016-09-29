<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

        protected $data;
        
        protected $allowed_url = [
            'login',
            'try_login',
            'registration',
            'try_registration'
        ];
                
        function __construct() {
            parent::__construct();
            if(!$this->auth->is_logined() && !in_array($this->uri->segment(2) , $this->allowed_url))
            {
                redirect('/account/login');
            }
            
        }

        public function index()
	{
		$this->load->view('welcome_message');
	}
        
        
        public function login()
        {
            $this->data['header'] = $this->themelib->get_header('Авторизация в сервисе' );
            $this->data['footer'] = $this->themelib->get_footer('/login');
            $this->load->view('/account/login', $this->data);
        }
        
}
