<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Auth {

        protected $CI;
        protected  $data;
        
        

        public function __construct()
        {
            $this->CI =& get_instance();
        }

        public function is_logined()
        {
            return $this->CI->session->userdata('user_logined') ? true : false;
        }
        
        
}

/* End of file Auth.php */