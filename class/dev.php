<?php
class Devs
{
    private $database;

    public function __construct($attributes = [])
    {
        global $db;
        $this->database = $db;
        foreach ($attributes as $key => $item) {
            $this->$key = $item;
        }
    }


    //geting a key
    public function getDev()
    {
        $query = "SELECT * FROM devs WHERE email = :email";
        $data = [
            'email' => $this->email
        ];
        return $this->database->fetch($query, $data);
    }

    //Check If exists
    public function countDev()
    {
        $query = "SELECT count(*) exist FROM devs WHERE email = :email";
        $data = [
            'email' => $this->email
        ];
        return $this->database->fetch($query, $data);
    }

    //Check If exists
    public function countKey()
    {
        $query = "SELECT count(*) exist FROM devs WHERE api_key = :apiKey";
        $data = [
            'apiKey' => $this->apiKey
        ];
        return $this->database->fetch($query, $data);
    }

    //Upadting a dev
    public function upadteDev()
    {
        $query = "UPDATE devs SET api_key = :apiKey WHERE email = :email";
        $data = [
            'email' => $this->email,
            'apiKey' => $this->apiKey
        ];
        return $this->database->insert($query, $data);
    }

    //inserting a dev
    public function insertDev()
    {
        $query = "INSERT INTO devs( api_key, email) VALUES( :apiKey, :email)";
        $data = [
            'email' => $this->email,
            'apiKey' => $this->apiKey
        ];
        return $this->database->insert($query, $data);
    }
}
