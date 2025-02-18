<?php

namespace App\Models;

use Database;

class Task {
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllTasks()
    {
        $this->db->prepare('SELECT * FROM tasks');
        return $this->db->results();
    }

    public function addTask(array $data)
    {
        $this->db->prepare('INSERT INTO tasks VALUES (:name, :description, :status, :user_id :created_at)');
        $this->db->execute([
            ':name' => $data['name'],
            ':description' => $data['description'],
            ':status' => $data['status'],
            ':user_id' => $data['user_id'],
            ':created_at' => date('Y-m-d H:i:s')
        ]);

        return $this->db->results();
    }

    public function getTaskById($id)
    {
        $this->db->prepare('SELECT * FROM tasks WHERE id = :id');
        $this->db->execute([':id' => $id]);

        return $this->db->results();
    }

    public function getTaskByUser($user_id)
    {
        $this->db->prepare('SELECT * FROM tasks WHERE user_id = :user_id');
        $this->db->execute([':user_id' => $user_id]);

        return $this->db->results();
    }
}