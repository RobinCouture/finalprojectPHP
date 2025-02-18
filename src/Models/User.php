<?php

namespace App\Models;

use Database;

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    
    public function getAllUsers()
    {
        $this->db->prepare('SELECT * FROM users');
        return $this->db->results();
    }

    public function addUser(array $data)
    {
        $this->db->prepare('INSERT INTO users VALUES (:name, :email, :password, :created_at)');
        $this->db->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':password' => $data['password'],
            ':created_at' => date('Y-m-d H:i:s')
        ]);

        return $this->db->results();
    }

    public function getUserById($id)
    {
        $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $this->db->execute([':id' => $id]);

        return $this->db->results();
    }
}