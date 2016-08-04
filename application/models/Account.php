<?php

class Account extends MY_Model {

    public $username;
    public $email;
    public $password_hash;

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function create()
    {
        $this->email = $this->params()['email'];
        $this->username = $this->params()['username'];
        $this->password_hash = password_hash($this->params()['password'], PASSWORD_DEFAULT);

        $this->db->insert('account', $this);
    }

    public function search_by_username($username)
    {
        $username = $this->params()['username'];
        $account = $this->db->get_where('account', array('username' => $username))->row()

        return $account
    }

    public function authorize_account($account)
    {
        $password = $this->params()['password']
        $is_valid = password_verify($password, $account->password_hash)
        return $is_valid
    }

}