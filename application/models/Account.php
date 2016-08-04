<?php

class Account extends MY_Model {

    const kAccountTable = "account";
    const kAccountId = "id";
    const kAccountEmail = "email";
    const kAccountUsername = "username";
    const kAccountPassword = "password_hash";
    const kAccountCover = "cover";
    const kAccountStatus = "status";
    const kAccountType = "type";
    const kAccountCreatedAt = "created_at";

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function insert($username, $email, $password)
    {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $data = array(
            self::kAccountEmail => $email,
            self::kAccountUsername => $username,
            self::kAccountPassword => $password_hash
        );

        $this->db->insert(self::kAccountTable, $data);

        if($this->db->affected_rows() > 0){
            return $this->get_by_username($username);
        } else {
            return false;
        }
    }

    public function get_by_id($id)
    {
        $query = $this->db->select($this->account_selection_field())->from(self::kAccountTable)
                            ->where(self::kAccountId, $id)
                            ->get();
        return $query->row();
    }

    public function get_by_email($email)
    {
        $query = $this->db->select($this->account_selection_field())->from(self::kAccountTable)
                            ->where(self::kAccountEmail, $email)
                            ->get();
        return $query->row();
    }

    public function get_by_username($username)
    {
        $query = $this->db->select($this->account_selection_field())->from(self::kAccountTable)
                            ->where(self::kAccountUsername, $username)
                            ->get();
        return $query->row();
    }

    private function account_selection_field() 
    {
        $arr = array(
            self::kAccountId, 
            self::kAccountUsername, 
            self::kAccountEmail, 
            self::kAccountStatus, 
            self::kAccountCover, 
            self::kAccountType, 
            self::kAccountCreatedAt
        );

        $selection = '*';
        foreach ($arr as $item) {
            if ($selection == '*') {
                $selection = $item;
            } else {
                $selection = $selection . ', ' . $item;
            }
        }
        return $selection;
    }

}