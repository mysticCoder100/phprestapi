<?php
class User
{
    private $table = 'users';
    private $database;

    public function __construct($attributes = [])
    {
        global $db;
        $this->database = $db;
        foreach ($attributes as $key => $item) {
            $this->$key = $item;
        }
    }

    //getting all users 
    public function getAllUsers()
    {
        $query = "SELECT * FROM users";
        return $this->database->fetchAll($query);
    }

    //geting a user
    public function getUser()
    {
        $query = "SELECT * FROM users WHERE email = :email";
        $data = [
            'email' => $this->email
        ];
        return $this->database->fetch($query, $data);
    }

    //geting  users by state
    public function getUserByState()
    {
        $query = "SELECT * FROM users WHERE state = :state";
        $data = [
            'state' => $this->state
        ];
        return $this->database->fetchAll($query, $data);
    }
    //geting a user
    public function getUserBySex()
    {
        $query = "SELECT * FROM users WHERE sex = :sex";
        $data = [
            'sex' => $this->sex
        ];
        return $this->database->fetchAll($query, $data);
    }

    //getting all users for public key
    public function getAllUsersForPublic()
    {
        $query = "SELECT firstname, lastname FROM users";
        return $this->database->fetchAll($query);
    }

    //geting a user
    public function getUserForPublic()
    {
        $query = "SELECT firstname, lastname FROM users WHERE email = :email";
        $data = [
            'email' => $this->email
        ];
        return $this->database->fetch($query, $data);
    }

    //geting  users by state
    public function getUserByStateForPublic()
    {
        $query = "SELECT firstname, lastname FROM users WHERE state = :state";
        $data = [
            'state' => $this->state
        ];
        return $this->database->fetchAll($query, $data);
    }
    //geting a user
    public function getUserBySexForPublic()
    {
        $query = "SELECT firstname, lastname FROM users WHERE sex = :sex";
        $data = [
            'sex' => $this->sex
        ];
        return $this->database->fetchAll($query, $data);
    }
}
