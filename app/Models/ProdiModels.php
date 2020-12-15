<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class ProdiModels extends Model {
        protected $table = 'informasi';

        protected $allowedFields = ['id', 'isi'];
    }
?>