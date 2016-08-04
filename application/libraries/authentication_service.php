<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentication_Service {

   private $_ci;

   public function __construct()
   {
      $this->_ci =& get_instance();
      $this->_ci->load->database();
      $this->_ci->load->library('constant');
      $this->_ci->load->helper('cookie');

      $this->_ci->load->model('account');
   }

   public function register(
      $username,
      $email, 
      $password) {

      $userWithEmail = $this->_ci->account->get_by_email($email);
      $userWithUsername = $this->_ci->account->get_by_username($username);

      if ($userWithEmail) 
      {
         return 'Email already been used';
      }

      if ($userWithUsername)
      {
         return 'Username alraedy been used';
      }

      if(!$userWithEmail && !$userWithEmail)
      {
         return $this->_ci->account->insert($username, $email, $password);
      } else
      {
         return 2;
      }
   }
}