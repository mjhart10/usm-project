<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class AdminModels extends Model {
        protected $table = 'admin';
        protected $primaryKey = 'id_admin';

        protected $allowedFields = ['nama_admin', 'email', 'username', 'password'];
    }
?>