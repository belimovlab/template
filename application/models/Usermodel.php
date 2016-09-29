<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Usermodel extends CI_Model {

        public $title;
        public $content;
        public $date;

        private function generateRandomString($length = 10) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        public function __construct()
        {
                parent::__construct();
        }

        public function get_all_accounts()
        {
            return $this->db->select('id')->get('account')->num_rows();
        }

        public function is_allowed_email($email)
        {
            $res = $this->db->get_where('account',array('email'=>$email))->row();
            return $res->id ? false : true;
        }
        
        public function save_new_user($email,$password,$user_role)
        {
            $activate_code = $this->generateRandomString(5);
            $this->db->insert('account',array(
                'id'            => '',
                'create_date'   => date('Y-m-d H:i:s'),
                'user_role'     => $user_role,
                'is_first'      => 1,
                'email'         => strtolower($email),
                'password'      => sha1(MainSiteConfig::get_item('encryption_key').$password),
                'activated'     => 0,
                'activate_code' => $activate_code,
                'remind'        => 0,
                'remind_code'   => ''
            ));
            
            
            $new_user_id = $this->db->get_where('account',array('email'=>$email))->row();
            $new_user_id = $new_user_id->id;
            
            $this->db->insert('profile',array(
                'id'      => '',
                'user_id' => $new_user_id
            ));

            return $activate_code;
        }
        
        public function activate_user($email,$active_code)
        {
            $this->db->update('account',
                array(
                    'activated'     => 1,
                    'activate_code' => ''
                ),
                array(
                    'email'         => $email,
                    'activate_code' => $active_code
                )
            );
        }
        
        public function get_user_activate_info($email,$active_code)
        {
            return $this->db->get_where('account',array(
                'email'         => $email,
                'activate_code' => $active_code
            ))->row();
        }
        
        
        
        
        
        
        
        
}