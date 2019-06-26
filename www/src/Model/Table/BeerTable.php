<?php
namespace App\Model\Table;

use Core\Model\Table;
use App\Model\Entity\BeerEntity;

class BeerTable extends Table{
    
    public function allByLimit(int $limit, int $offset){
        return $this->query("SELECT * FROM {$this->table} LIMIT {$limit} OFFSET {$offset}");

    }

   
}