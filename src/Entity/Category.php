<?php

namespace App\src\Entity;

use PDO;

class Category extends Database
{

    public $id;
    public $title;
    public $description;

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllListCategory()
    {
        $req = 'SELECT * FROM `sjt_category`;';
        $query = $this->db->query($req);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}
