<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

        protected $data;
        
        protected $allowed_url = array(
            'login',
            'try_login',
            'registration',
            'try_registration',
            'registration_active',
            'registration_active_save',
            'registration_active_by_email'
            
        );
                
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
            $this->data['error'] = $this->session->flashdata('error');
            $this->data['success'] = $this->session->flashdata('success');
            $this->load->view('/account/login', $this->data);
        }
        
        
        public function registration()
        {
            $this->data['header'] = $this->themelib->get_header('Регистрация в сервисе' );
            $this->data['footer'] = $this->themelib->get_footer('/registration');
            $this->data['user_count'] = $this->usermodel->get_all_accounts();
            $this->data['error'] = $this->session->flashdata('error');
            $this->load->view('/account/registration', $this->data);
        }
        
        
        public function try_registration()
        {
            $error_list = '';
            
            $user_role       = strtolower($this->input->post('user_role'));
            $user_email      = strtolower($this->input->post('email'));
            $user_password   = trim($this->input->post('password'));
            $user_repassword = trim($this->input->post('repassword'));
            if($user_role != 'specialist' && $user_role != 'user')
            {
                $error_list .= Errors::get_error('reg_user_role');
            }
            
            if(!$user_email || !filter_var($user_email, FILTER_VALIDATE_EMAIL))
            {
                $error_list .= Errors::get_error('reg_user_email');
            }
            
            if(!$user_password || !$user_repassword || $user_password != $user_repassword || $user_password == '' || $user_password == ' ')
            {
                $error_list .= Errors::get_error('reg_user_password');
            }
                
            if($error_list)
            {
                $this->session->set_flashdata('error', $error_list);
                redirect('/account/registration');
            }
            else
            {
                if($this->usermodel->is_allowed_email($user_email))
                {
                    $activate_code = $this->usermodel->save_new_user($user_email, $user_password, $user_role);
                    $this->session->set_userdata('reg_user_info',array('email'=>$user_email,'active_code'=>$activate_code));
                    redirect('/account/registration_active');
                }
                else
                {
                    $this->session->set_flashdata('error', Errors::get_error('reg_allowed_email'));
                    redirect('/account/registration');
                }
            }
            
        }
        
        public function registration_active()
        {
            $this->data['reg_user_info'] = $this->session->userdata('reg_user_info');
            
            if($this->data['reg_user_info']['email'] && $this->data['reg_user_info']['active_code'])
            {
                $this->data['header'] = $this->themelib->get_header('Завершение регистрации' );
                $this->data['footer'] = $this->themelib->get_footer('/registration');
                $this->data['user_count'] = $this->usermodel->get_all_accounts();
                $this->data['error'] = $this->session->flashdata('error');
                $this->load->view('/account/registration_active', $this->data);
            }
            else
            {
                $this->session->set_flashdata('error',  Errors::get_error('reg_sess_data'));
                redirect('/account/login');
            }
        }
        
        public function registration_active_save()
        {
            $this->data['reg_user_info'] = $this->session->userdata('reg_user_info');
            if($this->data['reg_user_info']['email'] && $this->data['reg_user_info']['active_code'])
            {
                $active_code = $this->input->post('active_code');
                if($active_code == $this->data['reg_user_info']['active_code'])
                {
                    $this->usermodel->activate_user($this->data['reg_user_info']['email'], $this->data['reg_user_info']['active_code']);
                    $this->session->set_flashdata('success',  Errors::get_error('reg_active_success'));
                    $this->session->unset_userdata('reg_user_info');
                    redirect('/account/login');
                }
                else
                {
                    $this->session->set_flashdata('error',  Errors::get_error('reg_active_wrong'));
                    redirect('/account/registration_active');
                }
            }
            else
            {
                $this->session->set_flashdata('error',  Errors::get_error('reg_sess_data'));
                redirect('/account/login');
            }
        }
        
        public function registration_active_by_email($email,$active_code)
        {
            $res = $this->usermodel->get_user_activate_info($email, $active_code);
            if($res->id)
            {
                if($res->activate_code == $active_code)
                {
                    $this->usermodel->activate_user($email, $active_code);
                    $this->session->set_flashdata('success',  Errors::get_error('reg_active_success'));
                    $this->session->unset_userdata('reg_user_info');
                    redirect('/account/login');
                }
                else
                {
                    $this->session->set_flashdata('error',  Errors::get_error('reg_active_wrong'));
                    redirect('/account/login');
                }
            }
            else
            {
                $this->session->set_flashdata('error',  Errors::get_error('reg_sess_data'));
                redirect('/account/login');
            }
        }
        
}
