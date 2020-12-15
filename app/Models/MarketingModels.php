<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class MarketingModels extends Model {
        protected $table = 'marketing';

        protected $allowedFields = ['id_marketing', 'nama_pengguna', 'username', 'password'];
    }
?>