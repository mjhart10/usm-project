<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class PenggunaModels extends Model {
        protected $table = 'users';
        protected $primaryKey = 'id';
  
        protected $allowedFields = ['id', 'email', 'username'];
    
       
    
    }



?>